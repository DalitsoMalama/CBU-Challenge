<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Vision</title>

  <!-- Favicons -->
  <link href="assets/img/CBU_Logo.png" rel="icon">
  <link href="assets/img/CBU_Logo.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&family=Lato:wght@400;700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">

  <style>
    body {
      font-family: 'Roboto', sans-serif;
    }

    /* Gallery Section Styles */
    .gallery {
      padding: 60px 20px;
      text-align: center;
    }

    .gallery h2 {
      font-size: 32px;
      margin-bottom: 20px;
    }

    .gallery h3 {
      font-size: 20px;
      color: #6c757d;
      margin-bottom: 40px;
    }

    .swiper-slide {
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .swiper-slide img {
      max-width: 80%; /* Reduced image size for better performance */
      height: auto;
      border-radius: 12px;
      transition: transform 0.3s ease-in-out;
    }

    .swiper-slide img:hover {
      transform: scale(1.05);
    }

    /* Responsive Design */
    @media (max-width: 768px) {
      .gallery h2 {
        font-size: 28px;
      }

      .swiper-slide img {
        max-width: 100%;
      }
    }

    @media (max-width: 576px) {
      .gallery h2 {
        font-size: 24px;
      }

      .gallery h3 {
        font-size: 18px;
      }
    }
    #about {text-align:center;}
    .caption {
      margin-top: 8px; /* Add some space between image and caption */
      font-size: 14px; /* Caption font size */
      color: #333; /* Caption color */
      text-align: center; /* Center align caption */
    }
    .swiper-slide {
    display: flex;                  /* Use flexbox to stack elements */
    flex-direction: column;        /* Stack items vertically */
    align-items: center;           /* Center items horizontally */
    text-align: center;            /* Center text */
  }

  .caption {
    margin-top: 8px;              /* Space between image and caption */
    font-size: 14px;              /* Caption font size */
    color: #333;                  /* Caption color */
  }
  </style>
</head>

<body class="index-page">
  <?php include('includes/header.php'); ?>

  <main class="main">
    <section id="about" class="about section">
      <h2>Gallery</h2>
      <h3>Now Vs Vision</h3></h3>
    </section>

    <!-- Gallery Section -->
   <!-- Gallery Section -->
    <!-- Gallery Carousel Section -->
    <section id="gallery" class="gallery">
      <div class="swiper mySwiper">
        <div class="swiper-wrapper">
      <!-- Image 1 -->
      <div class="swiper-slide">
            <a href="assets/img/CHALLENGE PICS/current bar.jpg" class="glightbox">
              <img src="assets/img/CHALLENGE PICS/current bar.jpg" class="img-fluid" alt="Current Bar">
            </a>
            <div class="caption"><h4>Current Bar</h4></div>
          </div>
      <!-- Image 2 -->
      <div class="swiper-slide">
        <a href="assets/img/CHALLENGE PICS/new bar.png" class="glightbox">
          <img src="assets/img/CHALLENGE PICS/new bar.png" class="img-fluid" alt="New Bar">
        </a>
      </div>
      <!-- Image 3 -->
      <div class="swiper-slide">
        <a href="assets/img/CHALLENGE PICS/current class corridor.jpg" class="glightbox">
          <img src="assets/img/CHALLENGE PICS/current class corridor.jpg" class="img-fluid" alt="Current Class Corridor">
        </a>
      </div>
      <!-- Image 4 -->
      <div class="swiper-slide">
        <a href="assets/img/CHALLENGE PICS/new class corridor.png" class="glightbox">
          <img src="assets/img/CHALLENGE PICS/new class corridor.png" class="img-fluid" alt="New Class Corridor">
        </a>
      </div>
      <!-- Image 5 -->
      <div class="swiper-slide">
        <a href="assets/img/CHALLENGE PICS/current classroom1.jpg" class="glightbox">
          <img src="assets/img/CHALLENGE PICS/current classroom1.jpg" class="img-fluid" alt="Current Classroom1">
        </a>
      </div>
      <!-- Image 6 -->
      <div class="swiper-slide">
        <a href="assets/img/CHALLENGE PICS/new classroom.png" class="glightbox">
          <img src="assets/img/CHALLENGE PICS/new classroom.png" class="img-fluid" alt="New Classroom">
        </a>
      </div>
      <!-- Image 7 -->
      <div class="swiper-slide">
        <a href="assets/img/CHALLENGE PICS/current classroom.jpg" class="glightbox">
          <img src="assets/img/CHALLENGE PICS/current classroom.jpg" class="img-fluid" alt="Current Classroom">
        </a>
      </div>
      <!-- Image 8 -->
      <div class="swiper-slide">
        <a href="assets/img/CHALLENGE PICS/current clinic.jpg" class="glightbox">
          <img src="assets/img/CHALLENGE PICS/current clinic.jpg" class="img-fluid" alt="Current Clinic">
        </a>
      </div>
      <!-- Image 9 -->
      <div class="swiper-slide">
        <a href="assets/img/CHALLENGE PICS/new clinic.png" class="glightbox">
          <img src="assets/img/CHALLENGE PICS/new clinic.png" class="img-fluid" alt="New Clinic">
        </a>
      </div>
      <!-- Image 10 -->
      <div class="swiper-slide">
        <a href="assets/img/CHALLENGE PICS/current footbal pitch.jpg" class="glightbox">
          <img src="assets/img/CHALLENGE PICS/current footbal pitch.jpg" class="img-fluid" alt="Current Football Pitch">
        </a>
      </div>
      <!-- Image 11 -->
      <div class="swiper-slide">
        <a href="assets/img/CHALLENGE PICS/new footbal pitch.png" class="glightbox">
          <img src="assets/img/CHALLENGE PICS/new footbal pitch.png" class="img-fluid" alt="New Football Pitch">
        </a>
      </div>
      <!-- Image 12 -->
      <div class="swiper-slide">
        <a href="assets/img/CHALLENGE PICS/current hostel1.jpg" class="glightbox">
          <img src="assets/img/CHALLENGE PICS/current hostel1.jpg" class="img-fluid" alt="Current Hostel1">
        </a>
      </div>
      <!-- Image 13 -->
      <div class="swiper-slide">
        <a href="assets/img/CHALLENGE PICS/new hostel1.png" class="glightbox">
          <img src="assets/img/CHALLENGE PICS/new hostel1.png" class="img-fluid" alt="New Hostel1">
        </a>
      </div>
      <!-- Image 14 -->
      <div class="swiper-slide">
        <a href="assets/img/CHALLENGE PICS/current lecture theater1.jpg" class="glightbox">
          <img src="assets/img/CHALLENGE PICS/current lecture theater1.jpg" class="img-fluid" alt="Current Lecture Theater1">
        </a>
      </div>
      <!-- Image 15 -->
      <div class="swiper-slide">
        <a href="assets/img/CHALLENGE PICS/new lecture theater1.jpg" class="glightbox">
          <img src="assets/img/CHALLENGE PICS/new lecture theater1.jpg" class="img-fluid" alt="New Lecture Theater1">
        </a>
      </div>
      <!-- Image 16 -->
      <div class="swiper-slide">
        <a href="assets/img/CHALLENGE PICS/current lecture theater.jpg" class="glightbox">
          <img src="assets/img/CHALLENGE PICS/current lecture theater.jpg" class="img-fluid" alt="Current Lecture Theater">
        </a>
      </div>
      <!-- Image 17 -->
      <div class="swiper-slide">
        <a href="assets/img/CHALLENGE PICS/new lecture theater.jpg" class="glightbox">
          <img src="assets/img/CHALLENGE PICS/new lecture theater.jpg" class="img-fluid" alt="New Lecture Theater">
        </a>
      </div>
      <!-- Image 18 -->
      <div class="swiper-slide">
        <a href="assets/img/CHALLENGE PICS/current library interior.jpg" class="glightbox">
          <img src="assets/img/CHALLENGE PICS/current library interior.jpg" class="img-fluid" alt="Current Library Interior">
        </a>
      </div>
      <!-- Image 19 -->
      <div class="swiper-slide">
        <a href="assets/img/CHALLENGE PICS/new library interior.png" class="glightbox">
          <img src="assets/img/CHALLENGE PICS/new library interior.png" class="img-fluid" alt="New Library Interior">
        </a>
      </div>
      <!-- Image 20 -->
      <div class="swiper-slide">
        <a href="assets/img/CHALLENGE PICS/current machine1.png" class="glightbox">
          <img src="assets/img/CHALLENGE PICS/current machine1.png" class="img-fluid" alt="Current Machine1">
        </a>
      </div>
      <!-- Image 21 -->
      <div class="swiper-slide">
        <a href="assets/img/CHALLENGE PICS/new machine1.png" class="glightbox">
          <img src="assets/img/CHALLENGE PICS/new machine1.png" class="img-fluid" alt="New Machine1">
        </a>
      </div>
      <!-- Image 22 -->
      <div class="swiper-slide">
        <a href="assets/img/CHALLENGE PICS/current machine.png" class="glightbox">
          <img src="assets/img/CHALLENGE PICS/current machine.png" class="img-fluid" alt="Current Machine">
        </a>
      </div>
      <!-- Image 23 -->
      <div class="swiper-slide">
        <a href="assets/img/CHALLENGE PICS/new machine.png" class="glightbox">
          <img src="assets/img/CHALLENGE PICS/new machine.png" class="img-fluid" alt="New Machine">
        </a>
      </div>
      <!-- Image 24 -->
      <div class="swiper-slide">
        <a href="assets/img/CHALLENGE PICS/current mpf1.jpg" class="glightbox">
          <img src="assets/img/CHALLENGE PICS/current mpf1.jpg" class="img-fluid" alt="Current MPF1">
        </a>
      </div>
      <!-- Image 25 -->
      <div class="swiper-slide">
        <a href="assets/img/CHALLENGE PICS/new mpf2.jpg" class="glightbox">
          <img src="assets/img/CHALLENGE PICS/new mpf2.jpg" class="img-fluid" alt="New MPF2">
        </a>
      </div>
      <!-- Image 26 -->
      <div class="swiper-slide">
        <a href="assets/img/CHALLENGE PICS/current mpf2.jpg" class="glightbox">
          <img src="assets/img/CHALLENGE PICS/current mpf2.jpg" class="img-fluid" alt="Current MPF2">
        </a>
      </div>
      <!-- Image 27 -->
      <div class="swiper-slide">
        <a href="assets/img/CHALLENGE PICS/new mpf.png" class="glightbox">
          <img src="assets/img/CHALLENGE PICS/new mpf.png" class="img-fluid" alt="New MPF">
        </a>
      </div>
      <!-- Image 28 -->
      <div class="swiper-slide">
        <a href="assets/img/CHALLENGE PICS/current mpf.jpg" class="glightbox">
          <img src="assets/img/CHALLENGE PICS/current mpf.jpg" class="img-fluid" alt="Current MPF">
        </a>
      </div>
      <!-- Image 29 -->
      <div class="swiper-slide">
        <a href="assets/img/CHALLENGE PICS/current netball court.jpg" class="glightbox">
          <img src="assets/img/CHALLENGE PICS/current netball court.jpg" class="img-fluid" alt="Current Netball Court">
        </a>
      </div>
      <!-- Image 30 -->
      <div class="swiper-slide">
        <a href="assets/img/CHALLENGE PICS/new netball court.png" class="glightbox">
          <img src="assets/img/CHALLENGE PICS/new netball court.png" class="img-fluid" alt="New Netball Court">
        </a>
      </div>
      <!-- Image 31 -->
      <div class="swiper-slide">
        <a href="assets/img/CHALLENGE PICS/current pitch.jpg" class="glightbox">
          <img src="assets/img/CHALLENGE PICS/current pitch.jpg" class="img-fluid" alt="Current Pitch">
        </a>
      </div>
      <!-- Image 32 -->
      <div class="swiper-slide">
        <a href="assets/img/CHALLENGE PICS/current running track.jpg" class="glightbox">
          <img src="assets/img/CHALLENGE PICS/current running track.jpg" class="img-fluid" alt="Current Running Track">
        </a>
      </div>
      <!-- Image 33 -->
      <div class="swiper-slide">
        <a href="assets/img/CHALLENGE PICS/new running track.png" class="glightbox">
          <img src="assets/img/CHALLENGE PICS/new running track.png" class="img-fluid" alt="New Running Track">
        </a>
      </div>
      <!-- Image 34 -->
      <div class="swiper-slide">
        <a href="assets/img/CHALLENGE PICS/current volleyball court.jpg" class="glightbox">
          <img src="assets/img/CHALLENGE PICS/current volleyball court.jpg" class="img-fluid" alt="Current Volleyball Court">
        </a>
      </div>
      <!-- Image 35 -->
      <div class="swiper-slide">
        <a href="assets/img/CHALLENGE PICS/new volleybal court.png" class="glightbox">
          <img src="assets/img/CHALLENGE PICS/new volleybal court.png" class="img-fluid" alt="New Volleyball Court">
        </a>
      </div>
      <!-- Image 36 -->
      <div class="swiper-slide">
        <a href="assets/img/CHALLENGE PICS/current volleybla court1.jpg" class="glightbox">
          <img src="assets/img/CHALLENGE PICS/current volleybla court1.jpg" class="img-fluid" alt="Current Volleyball Court1">
        </a>
      </div>
      <!-- Image 37 -->
      <div class="swiper-slide">
        <a href="assets/img/CHALLENGE PICS/current walkway.jpg" class="glightbox">
          <img src="assets/img/CHALLENGE PICS/current walkway.jpg" class="img-fluid" alt="Current Walkway">
        </a>
      </div>
      <!-- Image 38 -->
      <div class="swiper-slide">
        <a href="assets/img/CHALLENGE PICS/new walkway.png" class="glightbox">
          <img src="assets/img/CHALLENGE PICS/new walkway.png" class="img-fluid" alt="New Walkway">
        </a>
      </div>
      <!-- Image 39 -->
      <div class="swiper-slide">
        <a href="assets/img/CHALLENGE PICS/hostel.jpg" class="glightbox">
          <img src="assets/img/CHALLENGE PICS/hostel.jpg" class="img-fluid" alt="Hostel">
        </a>
      </div>
      <!-- Image 40 -->
      <div class="swiper-slide">
        <a href="assets/img/CHALLENGE PICS/new hostel.png" class="glightbox">
          <img src="assets/img/CHALLENGE PICS/new hostel.png" class="img-fluid" alt="New Hostel">
        </a>
      </div>
      <!-- Image 41 -->
      <div class="swiper-slide">
        <a href="assets/img/CHALLENGE PICS/Mukuba Unipod.jpg" class="glightbox">
          <img src="assets/img/CHALLENGE PICS/Mukuba Unipod.jpg" class="img-fluid" alt="Mukuba Unipod">
        </a>
      </div>
      <!-- Image 42 -->
      <div class="swiper-slide">
        <a href="assets/img/CHALLENGE PICS/new gym.png" class="glightbox">
          <img src="assets/img/CHALLENGE PICS/new gym.png" class="img-fluid" alt="New Gym">
        </a>
      </div>
      <!-- Remaining Images -->
      <div class="swiper-slide">
        <a href="assets/img/CHALLENGE PICS/norhead.jpg" class="glightbox">
          <img src="assets/img/CHALLENGE PICS/norhead.jpg" class="img-fluid" alt="Norhead">
        </a>
      </div>
      <div class="swiper-slide">
        <a href="assets/img/CHALLENGE PICS/pic1.jpg" class="glightbox">
          <img src="assets/img/CHALLENGE PICS/pic1.jpg" class="img-fluid" alt="Pic1">
        </a>
      </div>
      <div class="swiper-slide">
        <a href="assets/img/CHALLENGE PICS/pic3.jpg" class="glightbox">
          <img src="assets/img/CHALLENGE PICS/pic3.jpg" class="img-fluid" alt="Pic3">
        </a>
      </div>
      <div class="swiper-slide">
        <a href="assets/img/CHALLENGE PICS/running track.jpg" class="glightbox">
          <img src="assets/img/CHALLENGE PICS/running track.jpg" class="img-fluid" alt="Running Track">
        </a>
      </div>
      <div class="swiper-slide">
        <a href="assets/img/CHALLENGE PICS/School of Graduate Studies.jpg" class="glightbox">
          <img src="assets/img/CHALLENGE PICS/School of Graduate Studies.jpg" class="img-fluid" alt="School of Graduate Studies">
        </a>
      </div>
      <div class="swiper-slide">
        <a href="assets/img/CHALLENGE PICS/Mukuba Unipod.jpg" class="glightbox">
          <img src="assets/img/CHALLENGE PICS/Mukuba Unipod.jpg" class="img-fluid" alt="Unipod">
        </a>
      </div>
      <div class="swiper-slide">
        <a href="assets/img/CHALLENGE PICS/what we have SOM.jpg" class="glightbox">
          <img src="assets/img/CHALLENGE PICS/what we have SOM.jpg" class="img-fluid" alt="Unipod">
        </a>
      </div>
      </div>

<!-- Pagination and Navigation -->
    <div class="swiper-pagination"></div>
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>

    <!-- Navigation buttons -->
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
</div>
</section>

<script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    
  </main>

  <?php include('includes/footer.php'); ?>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>
  <script>
  var swiper = new Swiper(".mySwiper", {
    loop: true,
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
    autoplay: {
      delay: 5000,
      disableOnInteraction: false,
    },
  });
</script>

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

  <script>
    document.addEventListener('DOMContentLoaded', function() {
      const lightbox = GLightbox({
        selector: '.glightbox'
      });
    });
  </script>
</body>

</html>
