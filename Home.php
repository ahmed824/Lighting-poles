<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>LPC - Lighting Your Way</title>

  <!-- Bootstrap CSS -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css" rel="stylesheet">

  <!-- Swiper CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/11.0.5/swiper-bundle.min.css">

  <!-- Google Fonts - Poppins -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap"
    rel="stylesheet">

  <!-- Font Awesome -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet">

  <link rel="stylesheet" href="styles/main.css">
</head>

<body>
  <?php include 'components/nav.php'; ?>

  <?php include 'components/hero.php'; ?>

  <?php include 'components/whatsapp-btn.php'; ?>

  <?php include 'components/about-us-section.php'; ?>

<?php include 'components/products-section.php'; ?>


  <!-- Projects Section -->
  <section id="projects" class="projects-section">
    <div class="container">
      <div class="section-title animate-on-scroll">
        <h2>Explore Our Projects</h2>
        <p>Discover our successful lighting installations across various sectors and industries</p>
      </div>

      <div class="swiper projects-swiper mt-5">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <div class="project-card"
              style="background-image: url('https://images.unsplash.com/photo-1519501025264-65ba15a82390?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80')">
              <div class="project-content">
                <h5>Lighting For Hotel Municipality</h5>
                <p>Complete lighting solution for a luxury hotel, featuring elegant pole lighting and decorative
                  elements.</p>
              </div>
            </div>
          </div>

          <div class="swiper-slide">
            <div class="project-card"
              style="background-image: url('https://images.unsplash.com/photo-1558618666-fcd25c85cd64?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80')">
              <div class="project-content">
                <h5>Urban Street Lighting</h5>
                <p>Modern LED street lighting installation enhancing safety and aesthetics in urban areas.</p>
              </div>
            </div>
          </div>

          <div class="swiper-slide">
            <div class="project-card"
              style="background-image: url('https://images.unsplash.com/photo-1565814329452-e1efa11c5b89?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80')">
              <div class="project-content">
                <h5>Industrial Complex</h5>
                <p>High-performance lighting system for industrial facilities with energy-efficient LED technology.</p>
              </div>
            </div>
          </div>

          <div class="swiper-slide">
            <div class="project-card"
              style="background-image: url('https://images.unsplash.com/photo-1513475382585-d06e58bcb0e0?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80')">
              <div class="project-content">
                <h5>Residential Community</h5>
                <p>Comprehensive lighting solution for residential areas, combining security and beauty.</p>
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

  <!-- Why Choose Us Section -->
  <section class="why-choose-section">
    <div class="container">
      <div class="text-center mb-5 animate-on-scroll">
        <h2 class="display-4 fw-bold mb-3">Building Success Together</h2>
        <p class="lead mb-4">Choose LPC for unmatched expertise, quality, and innovation in lighting solutions</p>
        <a href="#contact" class="btn-primary-custom btn-lg">Contact Us</a>
      </div>

      <div class="row g-4 mt-5">
        <div class="col-lg-3 col-md-6">
          <div class="feature-card animate-on-scroll">
            <div class="feature-icon">
              <i class="fas fa-award"></i>
            </div>
            <h5>Premium Quality</h5>
            <p>We use only the finest materials and latest technology to ensure long-lasting, reliable lighting
              solutions.</p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6">
          <div class="feature-card animate-on-scroll">
            <div class="feature-icon">
              <i class="fas fa-users"></i>
            </div>
            <h5>Expert Team</h5>
            <p>Our experienced professionals provide comprehensive support from design consultation to installation and
              maintenance.</p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6">
          <div class="feature-card animate-on-scroll">
            <div class="feature-icon">
              <i class="fas fa-leaf"></i>
            </div>
            <h5>Eco-Friendly</h5>
            <p>Committed to sustainability with energy-efficient LED solutions that reduce environmental impact and
              operating costs.</p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6">
          <div class="feature-card animate-on-scroll">
            <div class="feature-icon">
              <i class="fas fa-headset"></i>
            </div>
            <h5>24/7 Support</h5>
            <p>Round-the-clock customer support and maintenance services to ensure your lighting systems operate
              flawlessly.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Join Us Section -->
  <section class="join-us-section">
    <div class="container">
      <div class="text-center animate-on-scroll">
        <h2 class="display-4 fw-bold mb-3">Join Us Now</h2>
        <p class="lead mb-4">Stay updated with our latest products, projects, and lighting innovations</p>

        <div class="email-input-group">
          <input type="email" class="email-input" placeholder="Enter your email address" id="emailInput">
          <button class="email-submit-btn" onclick="subscribeEmail()">Subscribe</button>
        </div>
      </div>
    </div>
  </section>

  <!-- Partners Section -->
  <section class="partners-section">
    <div class="container">
      <div class="section-title animate-on-scroll">
        <h2>Our Partners</h2>
        <p>Trusted by leading organizations and companies worldwide</p>
      </div>

      <div class="row align-items-center justify-content-center g-4 mt-4">
        <div class="col-lg-2 col-md-3 col-4 text-center">
          <div class="animate-on-scroll">
            <svg class="partner-logo" viewBox="0 0 120 40" fill="currentColor">
              <rect x="10" y="15" width="25" height="10" fill="#6B7280" />
              <text x="45" y="25" font-family="Poppins" font-weight="600" font-size="12" fill="#6B7280">PARTNER</text>
            </svg>
          </div>
        </div>

        <div class="col-lg-2 col-md-3 col-4 text-center">
          <div class="animate-on-scroll">
            <svg class="partner-logo" viewBox="0 0 120 40" fill="currentColor">
              <circle cx="22.5" cy="20" r="7.5" fill="#6B7280" />
              <text x="40" y="25" font-family="Poppins" font-weight="600" font-size="12" fill="#6B7280">TECH CO</text>
            </svg>
          </div>
        </div>

        <div class="col-lg-2 col-md-3 col-4 text-center">
          <div class="animate-on-scroll">
            <svg class="partner-logo" viewBox="0 0 120 40" fill="currentColor">
              <polygon points="15,10 25,10 30,20 25,30 15,30 10,20" fill="#6B7280" />
              <text x="40" y="25" font-family="Poppins" font-weight="600" font-size="12" fill="#6B7280">GLOBAL</text>
            </svg>
          </div>
        </div>

        <div class="col-lg-2 col-md-3 col-4 text-center">
          <div class="animate-on-scroll">
            <svg class="partner-logo" viewBox="0 0 120 40" fill="currentColor">
              <path d="M10 20 L20 10 L30 20 L20 30 Z" fill="#6B7280" />
              <text x="40" y="25" font-family="Poppins" font-weight="600" font-size="12" fill="#6B7280">INNOVATE</text>
            </svg>
          </div>
        </div>

        <div class="col-lg-2 col-md-3 col-4 text-center">
          <div class="animate-on-scroll">
            <svg class="partner-logo" viewBox="0 0 120 40" fill="currentColor">
              <rect x="10" y="12" width="20" height="16" rx="3" fill="#6B7280" />
              <text x="40" y="25" font-family="Poppins" font-weight="600" font-size="12" fill="#6B7280">FUTURE</text>
            </svg>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer id="contact" class="footer">
    <div class="container">
      <div class="footer-content">
        <div class="row g-4">
          <div class="col-lg-4 col-md-6">
            <h5><i class="fas fa-lightbulb me-2"></i>About LPC</h5>
            <p class="mb-4">Lighting Poles Company is a leading lighting manufacturer, supplier, and installer providing
              comprehensive lighting solutions for commercial and residential projects across Egypt.</p>

            <div class="contact-info">
              <div class="mb-2">
                <i class="fas fa-map-marker-alt me-2 text-primary"></i>
                <span>Cairo, Egypt</span>
              </div>
              <div class="mb-2">
                <i class="fas fa-phone me-2 text-primary"></i>
                <span>+20 123 456 789</span>
              </div>
              <div class="mb-2">
                <i class="fas fa-envelope me-2 text-primary"></i>
                <span>info@lpc-lighting.com</span>
              </div>
            </div>

            <div class="social-links mt-3">
              <a href="#" class="text-light me-3 fs-4"><i class="fab fa-facebook"></i></a>
              <a href="#" class="text-light me-3 fs-4"><i class="fab fa-twitter"></i></a>
              <a href="#" class="text-light me-3 fs-4"><i class="fab fa-linkedin"></i></a>
              <a href="#" class="text-light me-3 fs-4"><i class="fab fa-instagram"></i></a>
            </div>
          </div>

          <div class="col-lg-2 col-md-6">
            <h5>Quick Links</h5>
            <ul class="list-unstyled">
              <li class="mb-2"><a href="#home" class="text-light text-decoration-none">Home</a></li>
              <li class="mb-2"><a href="#about" class="text-light text-decoration-none">About Us</a></li>
              <li class="mb-2"><a href="#products" class="text-light text-decoration-none">Products</a></li>
              <li class="mb-2"><a href="#projects" class="text-light text-decoration-none">Projects</a></li>
              <li class="mb-2"><a href="#contact" class="text-light text-decoration-none">Contact</a></li>
            </ul>
          </div>

          <div class="col-lg-2 col-md-6">
            <h5>Services</h5>
            <ul class="list-unstyled">
              <li class="mb-2"><a href="#" class="text-light text-decoration-none">Lighting Design</a></li>
              <li class="mb-2"><a href="#" class="text-light text-decoration-none">Installation</a></li>
              <li class="mb-2"><a href="#" class="text-light text-decoration-none">Maintenance</a></li>
              <li class="mb-2"><a href="#" class="text-light text-decoration-none">Consultation</a></li>
              <li class="mb-2"><a href="#" class="text-light text-decoration-none">Support</a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6">
            <h5>Contact Us</h5>
            <div class="contact-form">
              <form id="contactForm">
                <div class="mb-3">
                  <input type="text" class="form-control" placeholder="Your Name" required>
                </div>
                <div class="mb-3">
                  <input type="email" class="form-control" placeholder="Your Email" required>
                </div>
                <div class="mb-3">
                  <textarea class="form-control" rows="4" placeholder="Your Message" required></textarea>
                </div>
                <button type="submit" class="btn-primary-custom w-100">Send Message</button>
              </form>
            </div>
          </div>
        </div>
      </div>

      <hr class="border-secondary">

      <div class="text-center py-3">
        <p class="mb-0">&copy; 2024 LPC - Lighting Poles Company. All rights reserved. | Designed with <i
            class="fas fa-heart text-danger"></i> by LPC Team</p>
      </div>
    </div>
  </footer>

  <!-- Scripts -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/11.0.5/swiper-bundle.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>
  <script src="js/script.js"></script>

</body>

</html>