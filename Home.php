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

  <?php include 'components/projects-section.php' ?>

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

  <?php include 'components/join-us-section.php' ?>

  <?php include 'components/partners.php' ?>


  <?php include 'components/footer.php' ?>


  <!-- Scripts -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/11.0.5/swiper-bundle.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>
  <script src="js/script.js"></script>

</body>

</html>