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
        <h2>Donor Categories and Benefits</h2>
        <p>Supporting the growth and development of Copperbelt University (CBU).</p>
      </div>

      <div class="container" data-aos="fade-up" data-aos-delay="100">
        <h3>Corporate Donors</h3>
        <!-- Insert your image here -->
        <img src="assets/img/campaign/donar.jpg" alt="Corporate Donors" class="rounded-image">
        
        <p>Government agencies, as well as private and public industry partners, are invited to contribute to the growth and development of Copperbelt University (CBU) through the following means:</p>
        <ul>
          <li>Substantial financial contributions to support key projects;</li>
          <li>Construction of new infrastructure to enhance educational and research facilities;</li>
          <li>Rehabilitation of existing structures to improve the learning environment;</li>
          <li>Provision of building materials to assist in ongoing and future construction projects; and</li>
          <li>Donation of buildings.</li>
        </ul>

        <h4>Corporate Donor Benefits:</h4>
        <ul>
          <li>Exclusive naming rights for projects or facilities, along with corporate branding opportunities;</li>
          <li>Recognition on the Wall of Fame, both electronic and physical, showcasing the donor's contribution;</li>
          <li>Special acknowledgment during the annual Donor Recognition Day; and</li>
          <li>Recognition during graduation ceremonies and inclusion in all CBU marketing material.</li>
        </ul>

        <a href="donate.php" class="cta-button">Donate Now</a>

        <h3>Philanthropic Donors</h3>
        <!-- Insert your image here -->
        <img src="assets/img/campaign/philanthropic.jpg" alt="Philanthropic Donors" class="rounded-image">
        
        <p>Non-Governmental Organizations (NGOs), individuals, clubs, and communities are encouraged to support CBU’s initiatives through various means:</p>
        <ul>
          <li>Significant financial donations to fund critical programmes and projects;</li>
          <li>Material contributions, including furniture, laboratory equipment, computers, and other essential resources;</li>
          <li>Rehabilitation of existing infrastructure to create a conducive learning atmosphere; and</li>
          <li>Construction of new infrastructure to accommodate the growing needs of the university.</li>
        </ul>

        <h4>Philanthropic Donor Benefits:</h4>
        <ul>
          <li>Naming rights for key initiatives and corporate branding opportunities;</li>
          <li>Honorary recognition on the Wall of Fame, both physical and electronic;</li>
          <li>Acknowledgment during the annual Donor Recognition Day; and</li>
          <li>Recognition at graduation ceremonies and inclusion in CBU’s promotional materials.</li>
        </ul>
      </div>
    </section>

    <!-- Monitoring and Evaluation Section -->
    <section id="monitoring" class="monitoring section">
      <div class="container section-title" data-aos="fade-up">
        <h2>Monitoring and Evaluation of the CBU Challenge</h2>
      </div>

      <div class="container" data-aos="fade-up" data-aos-delay="100">
        <!-- Insert your image here -->
        <img src="assets/img/campaign/Monitoring-and-Evaluation.jpg" alt="Monitoring and Evaluation" class="rounded-image">

        <p>CBU is developing a donor management system to track contributions and ensure accurate matching by the CBU Challenge Management Committee. The Committee will provide quarterly updates on fundraising progress and publish detailed reports on the use of funds and project outcomes. Evaluation and feedback will be an essential component of the Committee's activities, reviewing success through:</p>
        <ul>
          <li>Evaluation of the success of the challenge account by comparing the funds raised to the initial goals;</li>
          <li>Assessing the impact on the university’s image, infrastructure, laboratories, furniture, health, and recreational facilities.</li>
        </ul>
        <p>The Committee will gather feedback through:</p>
        <ul>
          <li>Soliciting feedback from contributors and stakeholders through surveys and interviews;</li>
          <li>Using feedback to refine future fundraising strategies and initiatives.</li>
        </ul>
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
