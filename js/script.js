// =============================================
// MODERN LANDING PAGE JAVASCRIPT
// Using GSAP and Swiper.js
// =============================================

// Register GSAP ScrollTrigger Plugin
gsap.registerPlugin(ScrollTrigger);

// DOM Content Loaded Event
document.addEventListener('DOMContentLoaded', function() {
    
    // Initialize loading screen
    initLoadingScreen();
    
    // Initialize navbar scroll effect
    initNavbarScroll();
    
    // Initialize GSAP animations
    initGSAPAnimations();
    
    // Initialize Swiper sliders
    initSwipers();
    
    // Initialize scroll animations
    initScrollAnimations();
    
    // Initialize counter animations
    initCounterAnimations();
    
    // Initialize smooth scrolling
    initSmoothScrolling();
    
    // Initialize contact form
    initContactForm();
    
    // Initialize particle effects
    initParticleEffects();
});

// Loading Screen
function initLoadingScreen() {
    const loading = document.createElement('div');
    loading.className = 'loading';
    loading.innerHTML = '<div class="spinner"></div>';
    document.body.appendChild(loading);
    
    window.addEventListener('load', function() {
        setTimeout(() => {
            loading.classList.add('hidden');
            setTimeout(() => {
                loading.remove();
            }, 500);
        }, 1000);
    });
}

// Navbar Scroll Effect
function initNavbarScroll() {
    const navbar = document.querySelector('.navbar');
    
    window.addEventListener('scroll', function() {
        if (window.scrollY > 50) {
            navbar.classList.add('scrolled');
        } else {
            navbar.classList.remove('scrolled');
        }
    });
}

// GSAP Animations
function initGSAPAnimations() {
    // Hero section animations
    const tl = gsap.timeline();
    
    tl.from('.hero-title', {
        duration: 1,
        y: 100,
        opacity: 0,
        ease: 'power3.out'
    })
    .from('.hero-subtitle', {
        duration: 0.8,
        y: 50,
        opacity: 0,
        ease: 'power3.out'
    }, '-=0.5')
    .from('.hero-buttons .btn', {
        duration: 0.6,
        y: 30,
        opacity: 0,
        stagger: 0.2,
        ease: 'power3.out'
    }, '-=0.3')
    .from('.floating-card', {
        duration: 1,
        scale: 0,
        opacity: 0,
        stagger: 0.3,
        ease: 'back.out(1.7)'
    }, '-=0.8')
    .from('.hero-circle', {
        duration: 1.5,
        scale: 0,
        opacity: 0,
        ease: 'elastic.out(1, 0.3)'
    }, '-=1');

    // Section animations with ScrollTrigger
    gsap.utils.toArray('.section-title').forEach(title => {
        gsap.from(title, {
            duration: 1,
            y: 50,
            opacity: 0,
            ease: 'power3.out',
            scrollTrigger: {
                trigger: title,
                start: 'top 80%',
                end: 'bottom 20%',
                toggleActions: 'play none none reverse'
            }
        });
    });

    gsap.utils.toArray('.section-subtitle').forEach(subtitle => {
        gsap.from(subtitle, {
            duration: 0.8,
            y: 30,
            opacity: 0,
            ease: 'power3.out',
            scrollTrigger: {
                trigger: subtitle,
                start: 'top 80%',
                end: 'bottom 20%',
                toggleActions: 'play none none reverse'
            }
        });
    });

    // Service cards animation
    gsap.utils.toArray('.service-card').forEach((card, index) => {
        gsap.from(card, {
            duration: 0.8,
            y: 80,
            opacity: 0,
            delay: index * 0.1,
            ease: 'power3.out',
            scrollTrigger: {
                trigger: card,
                start: 'top 80%',
                end: 'bottom 20%',
                toggleActions: 'play none none reverse'
            }
        });
    });

    // Feature items animation
    gsap.utils.toArray('.feature-item').forEach((item, index) => {
        gsap.from(item, {
            duration: 0.6,
            x: -50,
            opacity: 0,
            delay: index * 0.2,
            ease: 'power3.out',
            scrollTrigger: {
                trigger: item,
                start: 'top 80%',
                end: 'bottom 20%',
                toggleActions: 'play none none reverse'
            }
        });
    });

    // Stats animation
    gsap.from('.about-stats', {
        duration: 1,
        scale: 0.8,
        opacity: 0,
        ease: 'power3.out',
        scrollTrigger: {
            trigger: '.about-stats',
            start: 'top 80%',
            end: 'bottom 20%',
            toggleActions: 'play none none reverse'
        }
    });

    // Contact form animation
    gsap.from('.contact-form', {
        duration: 1,
        y: 100,
        opacity: 0,
        ease: 'power3.out',
        scrollTrigger: {
            trigger: '.contact-form',
            start: 'top 80%',
            end: 'bottom 20%',
            toggleActions: 'play none none reverse'
        }
    });
}

// Swiper Sliders
function initSwipers() {
    // Portfolio Swiper
    if (document.querySelector('.portfolio-swiper')) {
        new Swiper('.portfolio-swiper', {
            slidesPerView: 1,
            spaceBetween: 30,
            loop: true,
            autoplay: {
                delay: 4000,
                disableOnInteraction: false,
            },
            pagination: {
                el: '.portfolio-swiper .swiper-pagination',
                clickable: true,
            },
            navigation: {
                nextEl: '.portfolio-swiper .swiper-button-next',
                prevEl: '.portfolio-swiper .swiper-button-prev',
            },
            breakpoints: {
                640: {
                    slidesPerView: 2,
                },
                768: {
                    slidesPerView: 2,
                },
                1024: {
                    slidesPerView: 3,
                },
            },
            effect: 'slide',
            speed: 600,
            on: {
                init: function() {
                    // Add fade-in animation to slides
                    gsap.from('.portfolio-swiper .swiper-slide', {
                        duration: 0.8,
                        y: 50,
                        opacity: 0,
                        stagger: 0.2,
                        ease: 'power3.out'
                    });
                }
            }
        });
    }

    // Testimonials Swiper
    if (document.querySelector('.testimonials-swiper')) {
        new Swiper('.testimonials-swiper', {
            slidesPerView: 1,
            spaceBetween: 30,
            loop: true,
            autoplay: {
                delay: 5000,
                disableOnInteraction: false,
            },
            pagination: {
                el: '.testimonials-swiper .swiper-pagination',
                clickable: true,
            },
            breakpoints: {
                768: {
                    slidesPerView: 2,
                },
                1024: {
                    slidesPerView: 3,
                },
            },
            effect: 'slide',
            speed: 800,
        });
    }
}

// Scroll Animations
function initScrollAnimations() {
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    };

    const observer = new IntersectionObserver(function(entries) {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('visible');
            }
        });
    }, observerOptions);

    // Observe elements for scroll animations
    document.querySelectorAll('.fade-in, .slide-in-left, .slide-in-right').forEach(el => {
        observer.observe(el);
    });
}

// Counter Animations
function initCounterAnimations() {
    const counters = document.querySelectorAll('.stat-number');
    
    counters.forEach(counter => {
        const target = parseInt(counter.getAttribute('data-count'));
        
        gsap.to(counter, {
            innerHTML: target,
            duration: 2,
            ease: 'power2.out',
            snap: { innerHTML: 1 },
            scrollTrigger: {
                trigger: counter,
                start: 'top 80%',
                end: 'bottom 20%',
                toggleActions: 'play none none reverse'
            },
            onUpdate: function() {
                counter.innerHTML = Math.ceil(counter.innerHTML);
            }
        });
    });
}

// Smooth Scrolling
function initSmoothScrolling() {
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            
            if (target) {
                gsap.to(window, {
                    duration: 1,
                    scrollTo: {
                        y: target,
                        offsetY: 80
                    },
                    ease: 'power2.inOut'
                });
            }
        });
    });
}

// Contact Form
function initContactForm() {
    const form = document.getElementById('contactForm');
    
    if (form) {
        form.addEventListener('submit', function(e) {
            e.preventDefault();
            
            // Get form data
            const formData = new FormData(form);
            const formInputs = form.querySelectorAll('input, textarea');
            const submitBtn = form.querySelector('button[type="submit"]');
            
            // Disable form during submission
            formInputs.forEach(input => input.disabled = true);
            submitBtn.disabled = true;
            submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin me-2"></i>Sending...';
            
            // Simulate form submission (replace with actual form handling)
            setTimeout(() => {
                // Show success message
                showNotification('Message sent successfully!', 'success');
                
                // Reset form
                form.reset();
                
                // Re-enable form
                formInputs.forEach(input => input.disabled = false);
                submitBtn.disabled = false;
                submitBtn.innerHTML = 'Send Message';
            }, 2000);
        });
    }
}

// Notification System
function showNotification(message, type = 'info') {
    const notification = document.createElement('div');
    notification.className = `notification notification-${type}`;
    notification.innerHTML = `
        <div class="notification-content">
            <i class="fas fa-${type === 'success' ? 'check-circle' : 'info-circle'} me-2"></i>
            ${message}
        </div>
    `;
    
    // Add notification styles
    notification.style.cssText = `
        position: fixed;
        top: 20px;
        right: 20px;
        background: ${type === 'success' ? '#10b981' : '#3b82f6'};
        color: white;
        padding: 1rem 1.5rem;
        border-radius: 12px;
        box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1);
        z-index: 10000;
        transform: translateX(100%);
        transition: transform 0.3s ease;
        font-family: 'Poppins', sans-serif;
        font-weight: 500;
    `;
    
    document.body.appendChild(notification);
    
    // Animate in
    setTimeout(() => {
        notification.style.transform = 'translateX(0)';
    }, 100);
    
    // Remove after 3 seconds
    setTimeout(() => {
        notification.style.transform = 'translateX(100%)';
        setTimeout(() => {
            notification.remove();
        }, 300);
    }, 3000);
}

// Particle Effects
function initParticleEffects() {
    const particleContainer = document.querySelector('.hero-particles');
    
    if (particleContainer) {
        // Create floating particles
        for (let i = 0; i < 20; i++) {
            createParticle(particleContainer);
        }
    }
}

function createParticle(container) {
    const particle = document.createElement('div');
    particle.style.cssText = `
        position: absolute;
        width: 4px;
        height: 4px;
        background: rgba(99, 102, 241, 0.6);
        border-radius: 50%;
        pointer-events: none;
    `;
    
    // Random position
    particle.style.left = Math.random() * 100 + '%';
    particle.style.top = Math.random() * 100 + '%';
    
    container.appendChild(particle);
    
    // Animate particle
    gsap.to(particle, {
        duration: Math.random() * 10 + 10,
        x: (Math.random() - 0.5) * 200,
        y: (Math.random() - 0.5) * 200,
        opacity: Math.random() * 0.8 + 0.2,
        repeat: -1,
        yoyo: true,
        ease: 'sine.inOut'
    });
}

// Mouse move parallax effect
document.addEventListener('mousemove', function(e) {
    const cards = document.querySelectorAll('.floating-card');
    const mouseX = e.clientX / window.innerWidth;
    const mouseY = e.clientY / window.innerHeight;
    
    cards.forEach((card, index) => {
        const speed = (index + 1) * 0.5;
        const x = (mouseX - 0.5) * speed * 20;
        const y = (mouseY - 0.5) * speed * 20;
        
        gsap.to(card, {
            duration: 0.6,
            x: x,
            y: y,
            ease: 'power2.out'
        });
    });
});

// Service card hover effects
document.querySelectorAll('.service-card').forEach(card => {
    card.addEventListener('mouseenter', function() {
        gsap.to(this.querySelector('.service-icon'), {
            duration: 0.3,
            scale: 1.1,
            rotation: 5,
            ease: 'back.out(1.7)'
        });
    });
    
    card.addEventListener('mouseleave', function() {
        gsap.to(this.querySelector('.service-icon'), {
            duration: 0.3,
            scale: 1,
            rotation: 0,
            ease: 'back.out(1.7)'
        });
    });
});

// Portfolio hover effects
document.querySelectorAll('.portfolio-item').forEach(item => {
    const overlay = item.querySelector('.portfolio-overlay');
    const content = overlay.children;
    
    item.addEventListener('mouseenter', function() {
        gsap.fromTo(content, 
            { y: 30, opacity: 0 },
            { 
                duration: 0.4, 
                y: 0, 
                opacity: 1, 
                stagger: 0.1,
                ease: 'power3.out' 
            }
        );
    });
});

// Navbar mobile menu animation
const navbarToggler = document.querySelector('.navbar-toggler');
const navbarCollapse = document.querySelector('.navbar-collapse');

if (navbarToggler && navbarCollapse) {
    navbarToggler.addEventListener('click', function() {
        const isExpanded = navbarToggler.getAttribute('aria-expanded') === 'true';
        
        if (!isExpanded) {
            gsap.from('.navbar-nav .nav-item', {
                duration: 0.3,
                y: -20,
                opacity: 0,
                stagger: 0.1,
                ease: 'power3.out'
            });
        }
    });
}

// Window resize handler
window.addEventListener('resize', function() {
    // Recalculate ScrollTrigger positions
    ScrollTrigger.refresh();
});

// Preload images for better performance
function preloadImages() {
    const images = [
        'https://picsum.photos/400/300?random=1',
        'https://picsum.photos/400/300?random=2',
        'https://picsum.photos/400/300?random=3',
        'https://picsum.photos/400/300?random=4',
        'https://picsum.photos/60/60?random=5',
        'https://picsum.photos/60/60?random=6',
        'https://picsum.photos/60/60?random=7'
    ];
    
    images.forEach(src => {
        const img = new Image();
        img.src = src;
    });
}

// Initialize image preloading
preloadImages();

// Performance optimization: Debounce scroll events
function debounce(func, wait) {
    let timeout;
    return function executedFunction(...args) {
        const later = () => {
            clearTimeout(timeout);
            func(...args);
        };
        clearTimeout(timeout);
        timeout = setTimeout(later, wait);
    };
}

// Add scroll-based performance optimizations
const optimizedScrollHandler = debounce(function() {
    // Add any additional scroll-based functionality here
}, 16); // ~60fps

window.addEventListener('scroll', optimizedScrollHandler);

// Console welcome message
console.log('%c🚀 Modern Landing Page Loaded Successfully!', 'color: #6366f1; font-size: 16px; font-weight: bold;');
console.log('%c✨ Built with HTML, CSS, Bootstrap, Swiper.js, GSAP & Poppins Font', 'color: #ec4899; font-size: 12px;');