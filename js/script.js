document.addEventListener('DOMContentLoaded', function () {
    const loader = document.getElementById('page-loader');

    // Minimum loading time (to show the animation)
    const minLoadTime = 2000; // 2 seconds
    const startTime = Date.now();

    // Function to hide loader
    function hideLoader() {
        const elapsedTime = Date.now() - startTime;
        const remainingTime = Math.max(0, minLoadTime - elapsedTime);

        setTimeout(() => {
            if (loader) {
                loader.classList.add('fade-out');
                document.body.classList.add('loaded');

                // Remove loader from DOM after animation completes
                setTimeout(() => {
                    loader.remove();
                }, 400);
            }
        }, remainingTime);
    }

    // Hide loader when everything is loaded
    window.addEventListener('load', hideLoader);

    // Fallback: hide loader after maximum time
    setTimeout(hideLoader, 8000); // 8 seconds max
});
// Initialize GSAP
gsap.registerPlugin(ScrollTrigger);

// Navbar scroll effect
window.addEventListener('scroll', function () {
    const navbar = document.getElementById('navbar');
    if (window.scrollY > 50) {
        navbar.classList.add('scrolled');
    } else {
        navbar.classList.remove('scrolled');
    }
});

// Hero Swiper
const heroSwiper = new Swiper('.hero-swiper', {
    effect: 'fade',
    fadeEffect: { crossFade: true },
    autoplay: { delay: 5000, disableOnInteraction: false },
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
    loop: true,

    on: {
        slideChangeTransitionStart: function () {
            document.querySelectorAll('.hero-slide').forEach(slide => {
                slide.classList.remove('zoom');
            });
            const activeSlide = this.slides[this.activeIndex];
            activeSlide.classList.add('zoom');
        }
    }
});


// Products Swiper
const productsSwiper = new Swiper('.products-swiper', {
    slidesPerView: 1,
    spaceBetween: 30,
    autoplay: {
        delay: 4000,
        disableOnInteraction: false,
    },
    pagination: {
        el: '.swiper-pagination',
        clickable: true,
    },
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
    breakpoints: {
        768: {
            slidesPerView: 2,
        },
        992: {
            slidesPerView: 3,
        },
        1200: {
            slidesPerView: 4,
        }
    },
    loop: true,
});

// Projects Swiper
const projectsSwiper = new Swiper('.projects-swiper', {
    slidesPerView: 1,
    spaceBetween: 24,
    slidesPerView: 1,
    autoplay: {
        delay: 4500,
        disableOnInteraction: false,
    },
    pagination: {
        el: '.swiper-pagination',
        clickable: true,
    },
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
    breakpoints: {
        768: {
            slidesPerView: 1,
            spaceBetween: 12,
        },
        992: {
            slidesPerView: 1,
            spaceBetween: 16,
        },
        1222: {
            slidesPerView: 1,
            spaceBetween: 28,
        }
    },
    loop: true,
});

// Scroll animations with GSAP
gsap.utils.toArray('.animate-on-scroll').forEach((element, index) => {
    // Set initial state
    gsap.set(element, {
        opacity: 0,
        y: 50
    });

    // Animate on scroll
    gsap.to(element, {
        opacity: 1,
        y: 0,
        duration: 0.8,
        ease: "power2.out",
        scrollTrigger: {
            trigger: element,
            start: 'top 85%',
            end: 'bottom 15%',
            toggleActions: 'play none none reverse',
            // Add stagger for multiple elements
            delay: index * 0.1
        }
    });
});

// Alternative scroll animation using Intersection Observer for better performance
const observerOptions = {
    threshold: 0.1,
    rootMargin: '0px 0px -50px 0px'
};

const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            gsap.to(entry.target, {
                opacity: 1,
                y: 0,
                duration: 0.8,
                ease: "power2.out"
            });
            observer.unobserve(entry.target);
        }
    });
}, observerOptions);

// Observe all animate-on-scroll elements
document.querySelectorAll('.animate-on-scroll').forEach(el => {
    gsap.set(el, { opacity: 0, y: 50 });
    observer.observe(el);
});

// Smooth scrolling for navigation links
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();
        const target = document.querySelector(this.getAttribute('href'));
        if (target) {
            const offsetTop = target.offsetTop - 80;
            window.scrollTo({
                top: offsetTop,
                behavior: 'smooth'
            });
        }
    });
});

// Email subscription function
function subscribeEmail() {
    const emailInput = document.getElementById('emailInput');
    const email = emailInput.value.trim();

    if (email && isValidEmail(email)) {
        // Animate success
        gsap.to('.email-submit-btn', {
            scale: 0.95,
            duration: 0.1,
            yoyo: true,
            repeat: 1,
            onComplete: () => {
                emailInput.value = '';
                showMessage('Thank you for subscribing!', 'success');
            }
        });
    } else {
        showMessage('Please enter a valid email address', 'error');
    }
}

// Email validation
function isValidEmail(email) {
    return /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email);
}

// Contact form submission
document.getElementById('contactForm').addEventListener('submit', function (e) {
    e.preventDefault();

    // Get form data
    const formData = new FormData(this);
    const name = this.querySelector('input[type="text"]').value;
    const email = this.querySelector('input[type="email"]').value;
    const message = this.querySelector('textarea').value;

    if (name && email && message && isValidEmail(email)) {
        // Animate submit button
        const submitBtn = this.querySelector('button[type="submit"]');
        gsap.to(submitBtn, {
            scale: 0.95,
            duration: 0.1,
            yoyo: true,
            repeat: 1,
            onComplete: () => {
                this.reset();
                showMessage('Message sent successfully! We will get back to you soon.', 'success');
            }
        });
    } else {
        showMessage('Please fill in all fields with valid information', 'error');
    }
});

// Show message function
function showMessage(text, type) {
    const messageDiv = document.createElement('div');
    messageDiv.className = `alert alert-${type === 'success' ? 'success' : 'danger'} position-fixed`;
    messageDiv.style.cssText = 'top: 100px; right: 20px; z-index: 9999; opacity: 0;';
    messageDiv.textContent = text;

    document.body.appendChild(messageDiv);

    gsap.to(messageDiv, {
        opacity: 1,
        duration: 0.3,
        onComplete: () => {
            gsap.to(messageDiv, {
                opacity: 0,
                duration: 0.3,
                delay: 3,
                onComplete: () => {
                    document.body.removeChild(messageDiv);
                }
            });
        }
    });
}

// Enhanced hover effects with GSAP
document.querySelectorAll('.product-card, .project-card, .feature-card').forEach(card => {
    card.addEventListener('mouseenter', () => {
        gsap.to(card, {
            y: -10,
            duration: 0.3,
            ease: "power2.out"
        });
    });

    card.addEventListener('mouseleave', () => {
        gsap.to(card, {
            y: 0,
            duration: 0.3,
            ease: "power2.out"
        });
    });
});

// Parallax effect for hero section
gsap.to('.hero-content', {
    yPercent: -50,
    ease: "none",
    scrollTrigger: {
        trigger: '.hero-section',
        start: "top bottom",
        end: "bottom top",
        scrub: true
    }
});

// Counter animation for stats (if needed)
function animateCounters() {
    const counters = document.querySelectorAll('[data-counter]');
    counters.forEach(counter => {
        const target = parseInt(counter.dataset.counter);
        gsap.from(counter, {
            textContent: 0,
            duration: 2,
            ease: "power2.out",
            snap: { textContent: 1 },
            scrollTrigger: {
                trigger: counter,
                start: "top 80%",
                toggleActions: "play none none none"
            }
        });
    });
}

// Initialize animations when DOM is loaded
// document.addEventListener('DOMContentLoaded', function () {
//     // Add loading animation for navbar
//     gsap.from('.navbar', {
//         y: -100,
//         duration: 1,
//         delay: 0.5
//     });

//     // Initialize counter animations
//     animateCounters();

//     // Ensure all sections are visible initially for users without JS
//     document.querySelectorAll('.animate-on-scroll').forEach(el => {
//         if (!window.gsap) {
//             el.style.opacity = '1';
//             el.style.transform = 'translateY(0)';
//         }
//     });
// });

// Add mobile menu close on link click
document.querySelectorAll('.navbar-nav .nav-link').forEach(link => {
    link.addEventListener('click', () => {
        const navbarCollapse = document.querySelector('.navbar-collapse');
        if (navbarCollapse.classList.contains('show')) {
            const bsCollapse = new bootstrap.Collapse(navbarCollapse);
            bsCollapse.hide();
        }
    });
});

// Remove preloader code since no preloader exists
// window.addEventListener('load', function() {
//     gsap.to('.preloader', {
//         opacity: 0,
//         duration: 0.5,
//         onComplete: () => {
//             const preloader = document.querySelector('.preloader');
//             if (preloader) {
//                 preloader.style.display = 'none';
//             }
//         }
//     });
// });

// Enhanced scroll behavior
let lastScrollY = window.scrollY;

window.addEventListener('scroll', () => {
    const currentScrollY = window.scrollY;
    const navbar = document.getElementById('navbar');

    if (currentScrollY > lastScrollY && currentScrollY > 100) {
        // Scrolling down
        gsap.to(navbar, {
            y: -80,
            duration: 0.3
        });
    } else {
        // Scrolling up
        gsap.to(navbar, {
            y: 0,
            duration: 0.3
        });
    }

    lastScrollY = currentScrollY;
});
// SVG Path Animation with GSAP and ScrollTrigger
function initSVGAnimation() {
    const heroPath = document.getElementById('hero-path');
    if (heroPath) {
        // Get the total length of the path
        const pathLength = heroPath.getTotalLength();

        // Set initial state
        gsap.set(heroPath, {
            strokeDasharray: pathLength,
            strokeDashoffset: pathLength,
            fill: 'none',
            stroke: 'white',
            strokeWidth: 2
        });

        // Create scroll-triggered animation
        gsap.to(heroPath, {
            strokeDashoffset: 0,
            duration: 2,
            ease: "power2.out",
            scrollTrigger: {
                trigger: "#hero-svg",
                start: "top 80%",
                end: "bottom 20%",
                toggleActions: "play none none reverse",
                scrub: 1, // Smooth scrubbing effect
            },
            onComplete: function () {
                // Fill the path after drawing is complete
                gsap.to(heroPath, {
                    fill: 'white',
                    duration: 0.5,
                    delay: 0.2
                });
            }
        });

        // Alternative: Trigger on scroll position
        ScrollTrigger.create({
            trigger: ".hero-section",
            start: "top center",
            end: "bottom center",
            onEnter: () => {
                gsap.to(heroPath, {
                    strokeDashoffset: 0,
                    duration: 2,
                    ease: "power2.out",
                    onComplete: () => {
                        gsap.to(heroPath, {
                            fill: 'white',
                            duration: 0.5
                        });
                    }
                });
            },
            onLeave: () => {
                gsap.to(heroPath, {
                    strokeDashoffset: pathLength,
                    fill: 'none',
                    duration: 1,
                    ease: "power2.in"
                });
            },
            onEnterBack: () => {
                gsap.to(heroPath, {
                    strokeDashoffset: 0,
                    duration: 2,
                    ease: "power2.out",
                    onComplete: () => {
                        gsap.to(heroPath, {
                            fill: 'white',
                            duration: 0.5
                        });
                    }
                });
            },
            onLeaveBack: () => {
                gsap.to(heroPath, {
                    strokeDashoffset: pathLength,
                    fill: 'none',
                    duration: 1,
                    ease: "power2.in"
                });
            }
        });
    }
}
document.addEventListener('DOMContentLoaded', function () {
    // GSAP animation for single-glass-card
    gsap.set('.single-glass-card', {
        opacity: 0,
        y: 50,
        scale: 0.95
    });

    gsap.to('.single-glass-card', {
        opacity: 1,
        y: 0,
        scale: 1,
        duration: 1,
        ease: "power3.out",
        scrollTrigger: {
            trigger: '.single-glass-card',
            start: 'top 70%',
            end: 'bottom 30%',
            toggleActions: 'play none none reverse'
        }
    });

    // Hover effects for single-glass-card
    const card = document.querySelector('.single-glass-card');

    card.addEventListener('mouseenter', () => {
        gsap.to(card, {
            y: -15,
            scale: 1.03,
            duration: 0.4,
            ease: "power2.out"
        });
    });

    card.addEventListener('mouseleave', () => {
        gsap.to(card, {
            y: 0,
            scale: 1,
            duration: 0.4,
            ease: "power2.out"
        });
    });
});
// Select all curve paths and SVGs
document.querySelectorAll(".curve-svg").forEach(svg => {
    const path = svg.querySelector(".curve-path");

    if (path) {
        const length = path.getTotalLength();

        // Set initial state for stroke animation
        gsap.set(path, {
            strokeDasharray: length,
            strokeDashoffset: length,
            stroke: "#3AB4FF",
            strokeWidth: 2,
            fill: "transparent"
        });

        // Create timeline for each SVG
        const curveTl = gsap.timeline({
            scrollTrigger: {
                trigger: svg,
                start: "top 80%",
                end: "bottom 20%",
                toggleActions: "play none none reverse"
            }
        });

        curveTl
            // Draw the stroke
            .to(path, {
                strokeDashoffset: 0,
                duration: 2,
                ease: "power3.out"
            })
            // Fill the path
            .to(path, {
                fill: "#3AB4FF",
                duration: 0.8,
                ease: "power2.out"
            }, "-=0.5")
            // Scale effect
            .to(svg, {
                scale: 1.02,
                duration: 0.3,
                ease: "back.out(1.7)"
            }, "-=0.3")
            .to(svg, {
                scale: 1,
                duration: 0.3,
                ease: "power2.out"
            });

        // Hover effects
        svg.addEventListener('mouseenter', () => {
            gsap.to(path, {
                filter: "drop-shadow(0 4px 15px rgba(58, 180, 255, 0.6))",
                scale: 1.05,
                duration: 0.3,
                ease: "power2.out"
            });
        });

        svg.addEventListener('mouseleave', () => {
            gsap.to(path, {
                filter: "drop-shadow(0 2px 8px rgba(58, 180, 255, 0.3))",
                scale: 1,
                duration: 0.3,
                ease: "power2.out"
            });
        });
    }
});

//partnersSwiper
const partnersSwiper = new Swiper('.partners-swiper', {
    loop: true,
    spaceBetween: 30,
    slidesPerView: 2,
    autoplay: {
        delay: 2500,
        disableOnInteraction: false,
    },
    pagination: {
        el: ".swiper-pagination",
        clickable: true
    },
    breakpoints: {
        576: { slidesPerView: 3 },
        768: { slidesPerView: 4 },
        992: { slidesPerView: 4 }
    }
});
const sideMenu = document.getElementById('side-menu');
const overlay = document.getElementById('overlay');

document.getElementById('menu-toggle').addEventListener('click', () => {
    sideMenu.classList.add('active');
    overlay.classList.add('active');
});

document.getElementById('close-menu').addEventListener('click', closeMenu);
overlay.addEventListener('click', closeMenu);

// Close on link click
document.querySelectorAll('.side-nav a').forEach(link => {
    link.addEventListener('click', closeMenu);
});

function closeMenu() {
    sideMenu.classList.remove('active');
    overlay.classList.remove('active');
}

