<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>CBU Challenge - Campaign</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link href="assets/img/CBU_Logo.png" rel="icon">
  <link href="assets/img/CBU_Logo.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">

  <!-- Custom CSS for Enhancements -->
  <style>
    /* Section Titles */
    .section-title h2 {
      font-weight: 700;
      font-size: 2rem;
      color: #003366;
      text-align: center;
      margin-bottom: 20px;
    }

    /* Center-align everything */
    .swiper-slide {
      text-align: center;
    }

    .swiper-container {
      display: flex;
      justify-content: center;
      align-items: center;
      text-align: center;
    }

    /* Image Styling */
    .rounded-image {
      border-radius: 15px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      transition: transform 0.3s ease, box-shadow 0.3s ease, filter 0.3s ease;
      max-width: 60%;
      height: auto;
      margin-bottom: 20px;
    }

    .rounded-image:hover {
      transform: scale(1.05);
      box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
      filter: brightness(1.1);
    }

    /* CTA Button */
    .cta-button {
      display: inline-block;
      background-color: #3b82f6;
      color: #ffffff;
      padding: 10px 20px;
      font-size: 1rem;
      font-weight: bold;
      border-radius: 50px;
      text-align: center;
      text-decoration: none;
      margin-top: 20px;
      transition: background-color 0.3s ease;
      align-items: center;
    }

    .cta-button:hover {
      background-color: #ffd54f;
    }

    /* Enhanced Section Background */
    section {
      padding: 40px 0;
      background-color: #f5f5f5;
    }

    /* Style pagination dots */
    .swiper-pagination {
      position:relative;
      margin-top: 10px;
    }

    .swiper-pagination-bullet {
      background-color: #003366;
      opacity: 1;
    }

    .swiper-pagination-bullet-active {
      background-color: #ffd54f;
    }
  </style>
</head>

<body class="index-page">
  <?php include('includes/header.php'); ?>

  <main class="main">
    
    <!-- Donor Categories and Benefits Section -->
    <section id="donors" class="donors section">
      <div class="container section-title" data-aos="fade-up">
        <h2>News</h2>
        <p>The latest updates on the progress of the CBU-Challenge</p>
      </div>

      <!-- Swiper Slider -->
      <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="swiper-container">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <h3>Pre-Launch(14th Oct,2024)</h3>
              <img src="assets/img/events/pre-launch.jpg" alt="Corporate Donors" class="rounded-image">
              <p>The Vice Chancellor and other stake-holders came to  set the pre-launch of the CBU-Challenge.</p>
            </div>
            <div class="swiper-slide">
              <h3>1st Pledge</h3>
              <img src="assets/img/events/IMG-20241016-WA0018.jpg" alt="Philanthropic Donors" class="rounded-image">
              <p>The Vice Chancellor - Professor Imasiku Nyambe pledged K50,000 on October 14, 2024, as part of the donation pre-launch.</p>
            </div>
            <div class="swiper-slide">
              <h3>CBUAU, CUSAWU and CBUAWU make the second (2nd) pledge</h3>
              <img src="assets/img/events/IMG-20241016-WA0014.jpg" alt="Monitoring and Evaluation" class="rounded-image">
              <p>The second pledge of support came from the three Copperbelt University unions; Copperbelt University Academics Union (CBUAU), Copperbelt University Senior Administrative Workers Union (CUSAWU) and Copperbelt University and Allied workers Union (CBUAWU) making a total of K30,000 (ZMW).</p>
            </div>
            <div class="swiper-slide">
              <h3>Launch Day - (17th Oct,2024)</h3>
              <img src="assets/img/events/challenge.jpg" alt="Monitoring and Evaluation" class="rounded-image">
              <p>The CBU-Challenge will be officially launched on the 17th October, 2024</p>
            </div>
          </div>
          <!-- Add Pagination -->
          <div class="swiper-pagination"></div>
        </div>
      </div>

      <!-- CTA Button
      <a href="donate.php" class="cta-button">Donate Now</a> -->

    </section>

  </main>

  <?php include('includes/footer.php'); ?>

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

  <!-- Initialize Swiper -->
  <script>
    var swiper = new Swiper('.swiper-container', {
      loop: true,
      speed: 600,
      autoplay: {
        delay: 5000
      },
      slidesPerView: 1, /* Only show one image at a time */
      centeredSlides: true,
      pagination: {
        el: '.swiper-pagination',
        type: 'bullets',
        clickable: true
      }
    });
  </script>

  <!-- Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>
