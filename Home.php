<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modern Landing Page</title>
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
    
    <!-- Google Fonts - Poppins -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="styles/main.css">
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
        <div class="container">
            <a class="navbar-brand fw-bold" href="#" data-aos="fade-right">
                <i class="fas fa-bolt me-2"></i>ModernLand
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#services">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#portfolio">Portfolio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="home" class="hero-section d-flex align-items-center">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="hero-content">
                        <h1 class="hero-title mb-4">
                            <span class="text-gradient">Innovation</span> Meets <br>
                            <span class="text-gradient">Excellence</span>
                        </h1>
                        <p class="hero-subtitle mb-4">
                            Transform your ideas into reality with our cutting-edge solutions. 
                            We create digital experiences that inspire and engage.
                        </p>
                        <div class="hero-buttons">
                            <a href="#contact" class="btn btn-primary btn-lg me-3">Get Started</a>
                            <a href="#about" class="btn btn-outline-light btn-lg">Learn More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="hero-image">
                        <div class="floating-card card-1">
                            <i class="fas fa-rocket"></i>
                        </div>
                        <div class="floating-card card-2">
                            <i class="fas fa-lightbulb"></i>
                        </div>
                        <div class="floating-card card-3">
                            <i class="fas fa-chart-line"></i>
                        </div>
                        <div class="hero-circle"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="hero-particles"></div>
    </section>

    <!-- About Section -->
    <section id="about" class="about-section py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center mb-5">
                    <h2 class="section-title">About Us</h2>
                    <p class="section-subtitle">Discover what makes us unique</p>
                </div>
            </div>
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="about-content">
                        <h3 class="mb-4">We Build Amazing Digital Experiences</h3>
                        <p class="mb-4">
                            With over 10 years of experience in the industry, we've helped hundreds of 
                            businesses transform their digital presence and achieve remarkable growth.
                        </p>
                        <div class="features-list">
                            <div class="feature-item">
                                <i class="fas fa-check-circle text-primary me-3"></i>
                                <span>Expert Team of Professionals</span>
                            </div>
                            <div class="feature-item">
                                <i class="fas fa-check-circle text-primary me-3"></i>
                                <span>Cutting-edge Technology</span>
                            </div>
                            <div class="feature-item">
                                <i class="fas fa-check-circle text-primary me-3"></i>
                                <span>24/7 Customer Support</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-stats">
                        <div class="row">
                            <div class="col-6">
                                <div class="stat-item text-center">
                                    <h3 class="stat-number" data-count="500">0</h3>
                                    <p>Projects Completed</p>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="stat-item text-center">
                                    <h3 class="stat-number" data-count="150">0</h3>
                                    <p>Happy Clients</p>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="stat-item text-center">
                                    <h3 class="stat-number" data-count="10">0</h3>
                                    <p>Years Experience</p>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="stat-item text-center">
                                    <h3 class="stat-number" data-count="25">0</h3>
                                    <p>Team Members</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section id="services" class="services-section py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center mb-5">
                    <h2 class="section-title">Our Services</h2>
                    <p class="section-subtitle">What we offer to help you succeed</p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="service-card h-100">
                        <div class="service-icon">
                            <i class="fas fa-code"></i>
                        </div>
                        <h4>Web Development</h4>
                        <p>Custom websites and web applications built with modern technologies and best practices.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="service-card h-100">
                        <div class="service-icon">
                            <i class="fas fa-mobile-alt"></i>
                        </div>
                        <h4>Mobile Apps</h4>
                        <p>Native and cross-platform mobile applications for iOS and Android platforms.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="service-card h-100">
                        <div class="service-icon">
                            <i class="fas fa-paint-brush"></i>
                        </div>
                        <h4>UI/UX Design</h4>
                        <p>Beautiful and intuitive user interfaces that provide exceptional user experiences.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="service-card h-100">
                        <div class="service-icon">
                            <i class="fas fa-chart-bar"></i>
                        </div>
                        <h4>Digital Marketing</h4>
                        <p>Comprehensive digital marketing strategies to boost your online presence and growth.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="service-card h-100">
                        <div class="service-icon">
                            <i class="fas fa-cloud"></i>
                        </div>
                        <h4>Cloud Solutions</h4>
                        <p>Scalable cloud infrastructure and deployment solutions for your applications.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="service-card h-100">
                        <div class="service-icon">
                            <i class="fas fa-cogs"></i>
                        </div>
                        <h4>Maintenance</h4>
                        <p>Ongoing support and maintenance to keep your systems running smoothly.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Portfolio Section with Swiper -->
    <section id="portfolio" class="portfolio-section py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center mb-5">
                    <h2 class="section-title">Our Portfolio</h2>
                    <p class="section-subtitle">Recent projects we're proud of</p>
                </div>
            </div>
            <div class="swiper portfolio-swiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="portfolio-item">
                            <div class="portfolio-image">
                                <img src="https://picsum.photos/400/300?random=1" alt="Project 1">
                                <div class="portfolio-overlay">
                                    <h4>E-commerce Platform</h4>
                                    <p>Modern online shopping experience</p>
                                    <a href="#" class="btn btn-primary">View Project</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="portfolio-item">
                            <div class="portfolio-image">
                                <img src="https://picsum.photos/400/300?random=2" alt="Project 2">
                                <div class="portfolio-overlay">
                                    <h4>Mobile Banking App</h4>
                                    <p>Secure and user-friendly banking</p>
                                    <a href="#" class="btn btn-primary">View Project</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="portfolio-item">
                            <div class="portfolio-image">
                                <img src="https://picsum.photos/400/300?random=3" alt="Project 3">
                                <div class="portfolio-overlay">
                                    <h4>Corporate Website</h4>
                                    <p>Professional business presence</p>
                                    <a href="#" class="btn btn-primary">View Project</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="portfolio-item">
                            <div class="portfolio-image">
                                <img src="https://picsum.photos/400/300?random=4" alt="Project 4">
                                <div class="portfolio-overlay">
                                    <h4>Social Media Platform</h4>
                                    <p>Connecting people worldwide</p>
                                    <a href="#" class="btn btn-primary">View Project</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-pagination"></div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="testimonials-section py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center mb-5">
                    <h2 class="section-title">What Our Clients Say</h2>
                    <p class="section-subtitle">Real feedback from satisfied customers</p>
                </div>
            </div>
            <div class="swiper testimonials-swiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="testimonial-card">
                            <div class="testimonial-content">
                                <p>"Exceptional service and outstanding results. They transformed our business completely!"</p>
                            </div>
                            <div class="testimonial-author">
                                <img src="https://picsum.photos/60/60?random=5" alt="Client">
                                <div>
                                    <h5>John Doe</h5>
                                    <span>CEO, TechCorp</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="testimonial-card">
                            <div class="testimonial-content">
                                <p>"Professional, reliable, and innovative. Highly recommend their services!"</p>
                            </div>
                            <div class="testimonial-author">
                                <img src="https://picsum.photos/60/60?random=6" alt="Client">
                                <div>
                                    <h5>Jane Smith</h5>
                                    <span>Marketing Director, InnovateCo</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="testimonial-card">
                            <div class="testimonial-content">
                                <p>"Amazing team with great communication throughout the entire project."</p>
                            </div>
                            <div class="testimonial-author">
                                <img src="https://picsum.photos/60/60?random=7" alt="Client">
                                <div>
                                    <h5>Mike Johnson</h5>
                                    <span>Founder, StartupXYZ</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="contact-section py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center mb-5">
                    <h2 class="section-title">Get In Touch</h2>
                    <p class="section-subtitle">Ready to start your next project?</p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <form class="contact-form" id="contactForm">
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <input type="text" class="form-control" placeholder="Your Name" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <input type="email" class="form-control" placeholder="Your Email" required>
                            </div>
                        </div>
                        <div class="mb-3">
                            <input type="text" class="form-control" placeholder="Subject" required>
                        </div>
                        <div class="mb-3">
                            <textarea class="form-control" rows="5" placeholder="Your Message" required></textarea>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary btn-lg">Send Message</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer py-4">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <p class="mb-0">&copy; 2024 ModernLand. All rights reserved.</p>
                </div>
                <div class="col-lg-6 text-lg-end">
                    <div class="social-links">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    
    <!-- GSAP -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>
    
    <!-- Custom JS -->
    <script src="js/script.js"></script>
</body>
</html>