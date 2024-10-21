<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Vision</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link href="assets/img/CBU_Logo.png" rel="icon">
  <link href="assets/img/CBU_Logo.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Nunito:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">
</head>

<body class="index-page">
   <?php  include('includes/header.php'); ?>

  <main class="main">
    <style>
      /* Comparison Section */
    #comparison {
      padding: 4rem 0;
      text-align: center;
    }

    #comparison .container {
      display: flex;
      justify-content: space-between;
      align-items: center;
      text-align:center;
    }

    #comparison .img-fluid {
      max-width: 100%;
      height: auto;
    }

    /* Comparison Section */
    #comparison .rounded-image {
      border-radius: 15px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
      transition: transform 0.3s ease, box-shadow 0.3s ease, filter 0.3s ease;
  
    /* Adjust the width and height to reduce image size */
      width: 90%;  
      max-width: 720px;  
      height: auto;
      object-fit: cover;
      filter: brightness(0.95);
    }

    /* Hover effects remain the same */
    #comparison .rounded-image:hover {
      transform: scale(1.05);
      box-shadow: 0 8px 16px rgba(0, 0, 0, 0.3);
      filter: brightness(1.1);
    }


    #about {
      text-align:center;
      justify-content:flex-end;
    }

    </style>

    <!-- About Section -->
    <section id="about" class="about section">
      <!--Section Title-->
    <h2>Our Vision</h2>
    <p>VISION - To be the best African University in Science, Technology and Innovation by 2035.</p>
      
      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-6 content" data-aos="fade-up" data-aos-delay="100">
            <h3>
              What we have
            </h3>
            <p>Below (on the left) are the existing facilities and infrastructure that we currently have.</p>
          </div>

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
            <h3>What we want to build</h3>
            <p>Below (on the right) are the facilities and infrastructure that we intend to build through your funds.</p>
          </div>
        </div>
      </div>
    </section><!-- /End of About Section -->

    <section id="comparison" class="comparison section">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-md-6" data-aos="fade-right" data-aos-delay="100">
        <img src="assets/img/CHALLENGE PICS/Current mpf2.jpg" class="img-fluid rounded-image" alt="Comparison Image 1">
        <p> </p>
        <h4>Current Multi Purpose Facility</h4>
      </div>
      <div class="col-md-6" data-aos="fade-left" data-aos-delay="200">
        <img src="assets/img/CHALLENGE PICS/new mpf2.jpg" class="img-fluid rounded-image" alt="Comparison Image 2">
        <p> </p>
        <h4>Envisioned Multi Purpose facility</h4>     
      </div>
    </div>
  </div>

  <div class="container">
    <div class="row align-items-center">
      <div class="col-md-6" data-aos="fade-right" data-aos-delay="100">
        <img src="assets/img/CHALLENGE PICS/current lecture theater1.jpg" class="img-fluid rounded-image" alt="Comparison Image 1">
        <p> </p>
        <h4>Current Lecture Theater</h4>
      </div>
      <div class="col-md-6" data-aos="fade-left" data-aos-delay="200">
        <img src="assets/img/CHALLENGE PICS/new lecture theater.jpg" class="img-fluid rounded-image" alt="Comparison Image 2">
        <p> </p>
        <h4>Envisioned Lecture Theater</h4>     
      </div>
    </div>
  </div>
  <div class="container">
    <div class="row align-items-center">
      <div class="col-md-6" data-aos="fade-right" data-aos-delay="100">
        <img src="assets/img/CHALLENGE PICS/current library interior.jpg" class="img-fluid rounded-image" alt="Comparison Image 1">
        <p> </p>
        <h4>Current library</h4>
      </div>
      <div class="col-md-6" data-aos="fade-left" data-aos-delay="200">
        <img src="assets/img/CHALLENGE PICS/new library interior.png" class="img-fluid rounded-image" alt="Comparison Image 2">
        <p> </p>
        <h4>Envisioned Library</h4>     
      </div>
    </div>
  </div>

  <div class="container">
    <div class="row align-items-center">
      <div class="col-md-6" data-aos="fade-right" data-aos-delay="100">
        <img src="assets/img/CHALLENGE PICS/current machine.png" class="img-fluid rounded-image" alt="Comparison Image 1">
        <p> </p>
        <h4>Current Machines</h4>
      </div>
      <div class="col-md-6" data-aos="fade-left" data-aos-delay="200">
        <img src="assets/img/CHALLENGE PICS/new machine.png" class="img-fluid rounded-image" alt="Comparison Image 2">
        <p> </p>
        <h4>Envisioned Machines</h4>     
      </div>
    </div>
  </div>

  <div class="container">
    <div class="row align-items-center">
      <div class="col-md-6" data-aos="fade-right" data-aos-delay="100">
        <img src="assets/img/CHALLENGE PICS/current running track.jpg" class="img-fluid rounded-image" alt="Comparison Image 1">
        <p> </p>
        <h4>Current Running track</h4>
      </div>
      <div class="col-md-6" data-aos="fade-left" data-aos-delay="200">
        <img src="assets/img/CHALLENGE PICS/new running track.png" class="img-fluid rounded-image" alt="Comparison Image 2">
        <p> </p>
        <h4>Envisioned Running track</h4>     
      </div>
     
    </div>
  </div>
    
  <a href="gallery.php" class="btn btn-primary mt-3">
          <span>See More</span><i class="bi bi-arrow-right"></i>
        </a>
</section>


  </main>

  <?php include ('includes/footer.php') ?>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>