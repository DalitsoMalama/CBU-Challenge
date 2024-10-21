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

    /* Image Styling */
    /* Image Styling */
    .rounded-image {
  border-radius: 15px;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
  transition: transform 0.3s ease, box-shadow 0.3s ease, filter 0.3s ease;
  max-width: 40%; /* Adjust this value to control the width */
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
    }

    .cta-button:hover {
      background-color: #ffd54f;
    }

    /* Enhanced Section Background */
    section {
      padding: 40px 0;
      background-color: #f5f5f5;
    }
  </style>
</head>

<body class="index-page">
  <?php include('includes/header.php'); ?>

  <main class="main">
    
    <!-- Donor Categories and Benefits Section -->
    <section id="donors" class="donors section">
      <div class="container section-title" data-aos="fade-up">
        <h2>Recieved Plegdes and Donations</h2>
        <p>Supporting the growth and development of Copperbelt University (CBU).</p>
      </div>

      <div class="container" data-aos="fade-up" data-aos-delay="100">
        <h3>1st Plegde</h3>
        <!-- Insert your image here -->
        <img src="assets/img/campaign/prelaunch.jpg" alt="Corporate Donors" class="rounded-image">
        
        <p>Vice Chancellor-Professor Imasiku Nyambe</p>
          <p>The vice Chancellor lead the donation pre-launch on monday 14th October,2024 by first plegding a donation of a K50,000 (ZMW).
            He said if the CBU challenge has be a success then it takes the involvement of the CBU members themselves and only after can the outside members and community come in.
          </p>

        <a href="donate.php" class="cta-button">Donate/Pledge</a>

        <h3>2nd Plegde</h3>
        <!-- Insert your image here -->
        <img src="assets/img/events/IMG-20241016-WA0014.jpg" alt="Philanthropic Donors" class="rounded-image">
        
        <p>The second pledge of support came from the three Copperbelt University unions, namely;</p>
        <ul>
        <li>Copperbelt University Academics Union (CBUAU)</li>
        <li>Copperbelt University Senior Administrative Workers Union (CUSAWU)</li>
        <li>Copperbelt University and Allied workers Union (CBUAWU)</li>
        </ul>
        
        <p> The union pledged a total of k30,000 (ZMW)
        </p>
      </div>
    </section>

    <!-- Monitoring and Evaluation Section -->
    <section id="monitoring" class="monitoring section">
      <div class="container section-title" data-aos="fade-up">
        <h2>Sum Total</h2>
      </div>

      <div class="container" data-aos="fade-up" data-aos-delay="100">
        <!-- Insert your image here -->
        <img src="assets/img/campaign/Monitoring-and-Evaluation.jpg" alt="Monitoring and Evaluation" class="rounded-image">

        <p>More pledges came in from individual CBU-members making a total of about K124,000</p>
         
      </div>
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

  <!-- Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>
