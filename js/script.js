document.addEventListener('DOMContentLoaded', function () {
    // Page loader functionality
    const loader = document.getElementById('page-loader');
    if (loader) {
        const minLoadTime = 2000;
        const startTime = Date.now();

        function hideLoader() {
            const elapsedTime = Date.now() - startTime;
            const remainingTime = Math.max(0, minLoadTime - elapsedTime);

            setTimeout(() => {
                loader.classList.add('fade-out');
                document.body.classList.add('loaded');
                setTimeout(() => loader.remove(), 400);
            }, remainingTime);
        }

        window.addEventListener('load', hideLoader);
        setTimeout(hideLoader, 8000);
    }

    // Initialize GSAP ScrollTrigger
    gsap.registerPlugin(ScrollTrigger);

    // Enhanced navbar scroll effect with hide/show functionality
    let lastScrollY = window.scrollY;
    window.addEventListener('scroll', function () {
        const navbar = document.getElementById('navbar');
        const currentScrollY = window.scrollY;

        // Add/remove scrolled class
        navbar.classList.toggle('scrolled', currentScrollY > 50);

        // Hide/show navbar on scroll
        if (currentScrollY > lastScrollY && currentScrollY > 100) {
            gsap.to(navbar, { y: -80, duration: 0.3 });
        } else {
            gsap.to(navbar, { y: 0, duration: 0.3 });
        }
        lastScrollY = currentScrollY;
    });

    // Initialize all Swipers
    initializeSwipers();

    // Scroll animations - unified approach using Intersection Observer
    initScrollAnimations();

    // Initialize other features
    initSmoothScrolling();
    initFormHandlers();
    initHoverEffects();
    initSVGAnimations();
    initSideMenu();
    initLanguageToggle();
});

// Swiper initialization
function initializeSwipers() {
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
                this.slides[this.activeIndex].classList.add('zoom');
            }
        }
    });

    // Products Swiper
    const productsSwiper = new Swiper('.products-swiper', {
        slidesPerView: 1,
        spaceBetween: 30,
        autoplay: { delay: 4000, disableOnInteraction: false },
        pagination: { el: '.products-bullets', clickable: true },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        breakpoints: {
            480: { slidesPerView: 2 },
            768: { slidesPerView: 2 },
            992: { slidesPerView: 3 },
            1200: { slidesPerView: 4 },
        },
        loop: true,
        speed: 800,
    });

    // Projects Swiper
    const projectsSwiper = new Swiper('.projects-swiper', {
        slidesPerView: 1,
        spaceBetween: 24,
        autoplay: { delay: 4500, disableOnInteraction: false },
        pagination: { el: '.swiper-pagination', clickable: true },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        breakpoints: {
            768: { spaceBetween: 12 },
            992: { spaceBetween: 16 },
            1222: { spaceBetween: 28 },
        },
        loop: true,
    });

    // Partners Swiper
    const partnersSwiper = new Swiper('.partners-swiper', {
        loop: true,
        spaceBetween: 30,
        slidesPerView: 2,
        autoplay: { delay: 2500, disableOnInteraction: false },
        pagination: { el: ".swiper-pagination", clickable: true },
        breakpoints: {
            576: { slidesPerView: 3 },
            768: { slidesPerView: 4 },
            992: { slidesPerView: 4 }
        }
    });
}

// Unified scroll animations using Intersection Observer
function initScrollAnimations() {
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

    // Initialize all scroll-animated elements
    document.querySelectorAll('.animate-on-scroll').forEach(el => {
        gsap.set(el, { opacity: 0, y: 50 });
        observer.observe(el);
    });

    // Special handling for single-glass-card
    const glassCard = document.querySelector('.single-glass-card');
    if (glassCard) {
        gsap.set(glassCard, { opacity: 0, y: 50, scale: 0.95 });
        gsap.to(glassCard, {
            opacity: 1,
            y: 0,
            scale: 1,
            duration: 1,
            ease: "power3.out",
            scrollTrigger: {
                trigger: glassCard,
                start: 'top 70%',
                toggleActions: 'play none none reverse'
            }
        });
    }

    // Hero parallax effect
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
}

// Smooth scrolling for navigation links
function initSmoothScrolling() {
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                window.scrollTo({
                    top: target.offsetTop - 80,
                    behavior: 'smooth'
                });
            }
        });
    });

    // Close mobile menu on navigation link click
    document.querySelectorAll('.navbar-nav .nav-link').forEach(link => {
        link.addEventListener('click', () => {
            const navbarCollapse = document.querySelector('.navbar-collapse');
            if (navbarCollapse.classList.contains('show')) {
                new bootstrap.Collapse(navbarCollapse).hide();
            }
        });
    });
}

// Form handlers
function initFormHandlers() {
    // Email subscription
    window.subscribeEmail = function () {
        const emailInput = document.getElementById('emailInput');
        const email = emailInput.value.trim();

        if (email && isValidEmail(email)) {
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
    };

    // Contact form
    const contactForm = document.getElementById('contactForm');
    if (contactForm) {
        contactForm.addEventListener('submit', function (e) {
            e.preventDefault();

            const name = this.querySelector('input[type="text"]').value;
            const email = this.querySelector('input[type="email"]').value;
            const message = this.querySelector('textarea').value;

            if (name && email && message && isValidEmail(email)) {
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
    }
}

// Utility functions
function isValidEmail(email) {
    return /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email);
}

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
                onComplete: () => messageDiv.remove()
            });
        }
    });
}

// Hover effects
function initHoverEffects() {
    const cards = document.querySelectorAll('.product-card, .project-card, .feature-card, .single-glass-card');

    cards.forEach(card => {
        const hoverY = card.classList.contains('single-glass-card') ? -15 : -10;
        const hoverScale = card.classList.contains('single-glass-card') ? 1.03 : 1;

        card.addEventListener('mouseenter', () => {
            gsap.to(card, {
                y: hoverY,
                scale: hoverScale,
                duration: 0.3,
                ease: "power2.out"
            });
        });

        card.addEventListener('mouseleave', () => {
            gsap.to(card, {
                y: 0,
                scale: 1,
                duration: 0.3,
                ease: "power2.out"
            });
        });
    });
}

// SVG animations
function initSVGAnimations() {
    // Hero SVG path animation
    const heroPath = document.getElementById('hero-path');
    if (heroPath) {
        const pathLength = heroPath.getTotalLength();

        gsap.set(heroPath, {
            strokeDasharray: pathLength,
            strokeDashoffset: pathLength,
            fill: 'none',
            stroke: 'white',
            strokeWidth: 2
        });

        ScrollTrigger.create({
            trigger: ".hero-section",
            start: "top center",
            end: "bottom center",
            onEnter: () => animatePath(heroPath, pathLength, 'white'),
            onLeave: () => resetPath(heroPath, pathLength),
            onEnterBack: () => animatePath(heroPath, pathLength, 'white'),
            onLeaveBack: () => resetPath(heroPath, pathLength)
        });
    }

    // Curve SVGs animation
    document.querySelectorAll(".curve-svg").forEach(svg => {
        const path = svg.querySelector(".curve-path");
        if (!path) return;

        const length = path.getTotalLength();

        gsap.set(path, {
            strokeDasharray: length,
            strokeDashoffset: length,
            stroke: "#3AB4FF",
            strokeWidth: 2,
            fill: "transparent"
        });

        const curveTl = gsap.timeline({
            scrollTrigger: {
                trigger: svg,
                start: "top 80%",
                end: "bottom 20%",
                toggleActions: "play none none reverse"
            }
        });

        curveTl
            .to(path, { strokeDashoffset: 0, duration: 2, ease: "power3.out" })
            .to(path, { fill: "#3AB4FF", duration: 0.8, ease: "power2.out" }, "-=0.5")
            .to(svg, { scale: 1.02, duration: 0.3, ease: "back.out(1.7)" }, "-=0.3")
            .to(svg, { scale: 1, duration: 0.3, ease: "power2.out" });

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
    });
}

function animatePath(path, length, fillColor) {
    gsap.to(path, {
        strokeDashoffset: 0,
        duration: 2,
        ease: "power2.out",
        onComplete: () => {
            gsap.to(path, { fill: fillColor, duration: 0.5 });
        }
    });
}

function resetPath(path, length) {
    gsap.to(path, {
        strokeDashoffset: length,
        fill: 'none',
        duration: 1,
        ease: "power2.in"
    });
}

// Side menu functionality
function initSideMenu() {
    const sideMenu = document.getElementById('side-menu');
    const overlay = document.getElementById('overlay');
    const menuToggle = document.getElementById('menu-toggle');
    const closeMenu = document.getElementById('close-menu');

    if (!sideMenu || !overlay || !menuToggle || !closeMenu) return;

    function toggleMenu(show) {
        sideMenu.classList.toggle('active', show);
        overlay.classList.toggle('active', show);
    }

    menuToggle.addEventListener('click', () => toggleMenu(true));
    closeMenu.addEventListener('click', () => toggleMenu(false));
    overlay.addEventListener('click', () => toggleMenu(false));

    // Close on link click
    document.querySelectorAll('.side-nav a').forEach(link => {
        link.addEventListener('click', () => toggleMenu(false));
    });
}

// Language toggle functionality
function initLanguageToggle() {
    const langBtn = document.getElementById("lang-btn");
    const langText = document.getElementById("lang-text");

    if (!langBtn || !langText) return;

    let currentLang = localStorage.getItem("lang") || "en";

    function applyLanguage(lang) {
        langText.textContent = lang === "en" ? "Arabic" : "English";
    }

    // Apply on page load
    applyLanguage(currentLang);

    // Toggle on button click
    langBtn.addEventListener("click", () => {
        currentLang = currentLang === "en" ? "ar" : "en";
        localStorage.setItem("lang", currentLang);
        applyLanguage(currentLang);
    });
}