<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>LPC - Lighting Your Way</title>

  <!-- Favicon -->
  <link rel="icon" type="image/png" href="assets/images/fav-image.png">

  <!-- Bootstrap CSS -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css" rel="stylesheet">

  <!-- Swiper CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/11.0.5/swiper-bundle.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

  <!-- Google Fonts - Poppins -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap"
    rel="stylesheet">

  <!-- Font Awesome -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet">

  <!-- Always load main.css -->
  <link rel="stylesheet" href="styles/main.css">

  <!-- Arabic CSS will be added dynamically here -->
  <link id="arabic-style" rel="stylesheet" href="" disabled>
</head>

<body>
  <!-- Page Loader (Always first) -->
  <?php include 'components/loader.php'; ?>

  <!-- Main Content Wrapper -->
  <div class="main-content">
    <?php include 'components/nav.php'; ?>

    <?php include 'components/hero.php'; ?>

    
    <?php include 'components/about-us-section.php'; ?>
    
    <?php include 'components/products-section.php'; ?>
    
    <?php include 'components/projects-section.php' ?>
    
    <?php include 'components/why-choose-section.php' ?>
    
    <?php include 'components/join-us-section.php' ?>
    
    <?php include 'components/partners.php' ?>
    
    <?php include 'components/footer.php' ?>


    <?php include 'components/back-to-top.php'; ?>
    <?php include 'components/whatsapp-btn.php'; ?>
    
  </div>

  <!-- Scripts -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/11.0.5/swiper-bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>
  <script src="js/script.js"></script>

</body>

</html>