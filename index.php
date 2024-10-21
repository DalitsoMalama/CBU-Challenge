<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>The CBU Challenge</title>
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

  <!-- Custom CSS -->
  <style>
    /* General Styles */
    body {
      font-family: 'Roboto', sans-serif;
      background-color: #f5f5f5;
      margin: 0;
      padding: 0;
      text-decoration: none;
    }

    /* Navbar */
    .navbar {
      background-color: #fff;
      padding: 1rem;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
      text-decoration: none;
    }

    .navbar a {
      font-weight: bold;
      color: none;
      margin-right: 1.5rem;
      text-decoration: none;
    }

    .navbar .btn-contact {
      background-color: #fdd835;
      border: none;
      padding: 0.6rem 1.2rem;
      color: #000;
      font-weight: bold;
      border-radius: 50px;
      text-decoration: none;
    }

   
/* Hero Section */
#hero {
  background-image: url('assets/img/banner-website.jpg'); /* Your background image */
  background-size: cover; /* Cover the entire area */
  background-position: center; /* Center the background image */
  padding: 6rem 0; /* Padding for the section */
  text-align: left; /* Align text to the left */
  color: #fff; /* Default text color */
  position: relative; /* Position for overlay */
  overflow: hidden; /* Hide overflow if necessary */
}

/* Overlay */
.overlay {
  position: absolute; /* Absolutely position the overlay */
  top: 0; /* Top of the section */
  left: 0; /* Left of the section */
  right: 0; /* Right of the section */
  bottom: 0; /* Bottom of the section */
  background: rgba(0, 0, 0, 0.5); /* Semi-transparent black overlay */
  z-index: 1; /* Ensure overlay is on top of background */
}

/* Text Styles */
#hero .container {
  position: relative; /* Position text container */
  z-index: 2; /* Text above the overlay */
}

#hero h1 {
  font-size: 3rem; /* Heading size */
  font-weight: 700; /* Font weight */
  color: white; /* Heading color */
}

#hero p {
  font-size: 1.3rem; /* Paragraph size */
  margin-bottom: 1.5rem; /* Bottom margin */
  color: white; /* Paragraph color */
}

#hero .btn {
  background-color: #fdd835; /* Button background color */
  border: none; /* No border */
  padding: 0.8rem 2rem; /* Button padding */
  color: #000; /* Button text color */
  font-weight: bold; /* Button text weight */
  border-radius: 50px; /* Rounded corners */
}


    /* About Section */
    #about {
      padding: 4rem 0;
      text-align: center;
    }

    #about h2 {
      font-size: 2.5rem;
      font-weight: 700;
      margin-bottom: 1.5rem;
    }

    #about p {
      font-size: 1.1rem;
      margin-bottom: 2rem;
    }

    /* Latest Updates Section */
    .latest-updates {
      padding: 4rem 0;
      background-color: #fff;
    }

    .latest-updates h2 {
      font-size: 2rem;
      font-weight: 700;
      margin-bottom: 1rem;
    }

    .latest-updates p {
      font-size: 1.1rem;
    }
    
    /* Update button styles */
    .btn-watch-video {
      color: white; /* Change text color to white */
    }
    .btn-watch-video:hover {
      color: #3b82f6; /* Darker blue on hover */
      text-decoration: underline; /* Ensure underline stays removed on hover */
    }



  </style>


</head>

<body class="index-page">
   <?php  include('includes/header.php'); ?>

  <main class="main">

  <!--Hero Section-->
  <section id="hero" class="hero section">
  <div class="overlay"></div> <!-- Overlay div -->
  <div class="container d-flex flex-column justify-content-center align-items-center text-center position-relative" data-aos="zoom-out">
    <h1>Welcome to the CBU Challenge <span></span></h1>
    <p>The CBU Challenge is an initiative to grow an endowment fund 
      with sustained financial support for the 
      University’s infrastructure modernisation 
      and expansion for a world-class learning 
      environment.</p>
    <div class="d-flex">
      <a href="#about" class="btn-get-started scrollto">More Info</a>
      <a href="https://youtu.be/uTsOd9KMJVQ?si=O_LxU1l8GHxD0hMy" class="glightbox btn-watch-video d-flex align-items-center" style="color: white;">
      <i class="bi bi-play-circle"></i><span>Watch Video</span></a>
    </div>
  </div>
</section> <!--Hero Section-->

<!-- Add this to your CSS file or inside a <style> tag -->
<style>
  .rounded-image {
    border-radius: 15px; /* Rounded corners */
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); /* Drop shadow */
    transition: transform 0.3s ease, box-shadow 0.3s ease, filter 0.3s ease; /* Smooth transition for hover effects */
    object-fit: cover; /* Ensures the image covers its container while maintaining aspect ratio */
    width: 100%; /* Makes the image responsive */
    height: auto; /* Keeps height proportional */
    filter: brightness(0.95); /* Slightly dims the image for a subtle initial effect */
  }

  /* Hover Effects */
  .rounded-image:hover {
    transform: scale(1.05); /* Scales the image up slightly on hover */
    box-shadow: 0 8px 16px rgba(0, 0, 0, 0.3); /* Increases the shadow for more depth */
    filter: brightness(1.1); /* Brightens the image on hover */
  }
  
</style>

<!-- About Section -->
<section id="about" class="about section">

  <!-- Section Title -->
  <div class="container section-title" data-aos="fade-up">
    <h2>About The CBU Challenge</h2>
    <p>VISION - To be the best African University in Science, Technology and Innovation by 2035.</p>
        
      <!--Download button-->
        <a href="assets/pdf/The CBU Challenge.pdf" class="btn btn-primary mt-3" target="_blank" rel="noopener noreferrer">
  <span>Download Brochure</span><i class="bi bi-arrow-right"></i>
</a>

  </div><!-- End Section Title -->

  <div class="container">
    <div class="row gy-4">
      <div class="col-lg-6 content" data-aos="fade-up" data-aos-delay="100">
        <h3>Overview</h3>
        <p>The objective of the CBU Challenge is to
        raise funds for:</p>
        <ul>
          <li><i class="bi bi-check2-circle"></i> <span>Critical infrastructure renewal and
            laboratory equipment upgrades.</span></li>
          <li><i class="bi bi-check2-circle"></i> <span>Campus facility improvements;</span></li>
          <li><i class="bi bi-check2-circle"></i> <span>Raise funds for improving campus facilities.</span></li>
          <li><i class="bi bi-check2-circle"></i> <span>Boosting student welfare.</span></li>
          <li><i class="bi bi-check2-circle"></i> <span>Developing long-term sustainability endowment fund through</span></li>
          <li><span>````contributions of alumni, corporates, cooperating partners and</span></li>
          <li>````all well wishers.</li>
          <li><i class="bi bi-check2-circle"></i> <span>Attracting global partnerships and networks.</span></li>
        </ul>
      </div>

      <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
        <!-- Apply the 'rounded-image' class here -->
        <img src="assets/img/infrastructure/top-view.jpg" class="img-fluid rounded-image" />
      </div>
    </div>
  </div>

</section><!-- /About Section -->




   <!-- Features Section -->
<section id="features" class="features section">
  <div class="container">

    <div class="row gy-4 align-items-center features-item">
      <div class="col-md-5 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="100">
        <img src="assets/img/team/patron2.png" class="img-fluid rounded-image" alt="">
      </div>
      <div class="col-md-7" data-aos="fade-up" data-aos-delay="100">
        <h3>Our Patron</h3>
        <p>H.E Hakainde Hichilema</p>
        <ul>
          <li><span> His Excellency, the President of Zambia and Patron of
            the Copperbelt University (CBU) Challenge,
            Mr. Hakainde Hichilema, has consistently demonstrated
            a strong commitment to improving student welfare on
            campus. His involvement underscores the significance
            of investing in infrastructure that fosters academic
            excellence and holistic development among students.</span></li>

          <li><span>Being part of this initiative showcases his passion for
                  ensuring that students have access to the resources
                  they need to excel, ultimately contributing to the
                  broader national strategy of elevating higher education
                  in Zambia. Through his support, the President is
                  investing in the future of CBU and nurturing a
                  generation of talented individuals who will drive the
                  nation’s development forward.</span></li>
        </ul>
      </div>
    </div><!-- Features Item -->

    <div class="row gy-4 align-items-center features-item">
      <div class="col-md-5 order-1 order-md-2 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="200">
        <img src="assets/img/hh-with-students.png" class="img-fluid rounded-image" alt="">
      </div>
      <div class="col-md-7 order-2 order-md-1" data-aos="fade-up" data-aos-delay="200">
        <h3>Additional contributions from our patron
        include:</h3>
        <p class="fst-italic">
        Our esteemed patron has been instrumental in uplifting the university and improving
        student welfare. Among his many contributions include the re-introduction of meal
        allowances to all public higher learning institutions to which the Copperbelt University
        Students are major beneficiaries.
        </p>
      <ul>
        <li><i class="bi bi-check2-circle"></i> <span> Increased the allocation to HESLB to K1.2 billion increasing loan beneficiaries.</span></li>
        <li><i class="bi bi-check2-circle"></i><span> K300.5 million allocated to the completion of the unfinished hostels.</span></li>
        <li><i class="bi bi-check2-circle"></i><span> Drilling of 3 boreholes.</span></li>
        <li><i class="bi bi-check2-circle"></i><span> Provision of an ambulance.</span></li>
        <li><i class="bi bi-check2-circle"></i><span> Pledged to buy a COBUSU bus.</span></li>
      </ul>

      </div>
    </div><!-- Features Item -->

    <div class="row gy-4 align-items-center features-item">
      <div class="col-md-5 d-flex align-items-center" data-aos="zoom-out">
        <img src="assets/img/ZIT.png" class="img-fluid rounded-image" alt="">
      </div>
      <div class="col-md-7" data-aos="fade-up">
        <h3>Where we are from</h3>
        <p>The Zambia Institute of Technology was founded with a strong focus on providing technical and vocational education to support the
            country's growing mining and industrial sectors, which were and still are essential to Zambia’s economy.</p>

        <P>The University has since grown into a comprehensive institution offering a wide variety of programs. Over time, it has expanded beyond its technical and engineering roots to offer
          programs in business, education, health sciences, built environment, natural resources, hospitality and more.</P>
      </div>
    </div><!-- Features Item -->

    <div class="row gy-4 align-items-center features-item">
      <div class="col-md-5 order-1 order-md-2 d-flex align-items-center" data-aos="zoom-out">
        <img src="assets/img/ZIT-1974.png" class="img-fluid rounded-image" alt="">
      </div>
      <div class="col-md-7 order-2 order-md-1" data-aos="fade-up">
        <p>
        Today, Copperbelt University is recognized as one of Zambia’s leading institutions, with a growing reputation in research and
        development, particularly in areas tied to Zambia’s industrial and economic growth, such as mining, engineering, natural resources management, and business
        administration. The University continues to evolve, with partnerships and collaborations both locally
        and internationally. However, the infrastructure remains stagnant.
        </p>
        <h3>
        Key Challenges
        </h3>
        <ul>
        <li><i class="bi bi-check2-circle"></i> <span> Aging infrastructure and Outdated laboratory equipment.</span></li>
        <li><i class="bi bi-check2-circle"></i><span> Limited recreational, welfare facilities and Insufficient modern learning resources.</span></li>
        <li><i class="bi bi-check2-circle"></i><span> Inadequate learning, library and study spaces.</span></li>
        <li><i class="bi bi-check2-circle"></i><span> Inadequate health facilities and inadequate campus landscaping and aesthetics </span></li>
        <li><i class="bi bi-check2-circle"></i><span> Limited external financial support research funding
        constraints.</span></li>
      </ul>
      </div>
    </div><!-- Features Item -->

    <div class="row gy-4 align-items-center features-item">
      <div class="col-md-5 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="100">
        <img src="assets/img/Ndola-Campus.jpg" class="img-fluid rounded-image" alt="">
      </div>
      <div class="col-md-7" data-aos="fade-up" data-aos-delay="100">
        <h3>What we have done</h3>
        <p>Ndola Campus</p>
        <ul>
          <li><span> The institution has received significant support from corporate partners, leading to the construction of several notable projects. Among
                    these is the Michael Chilufya Sata School of Medicine (Left) in Ndola, constructed by the Israeli</span></li>
        </ul>
      </div>
    </div><!-- Features Item -->

    <div class="row gy-4 align-items-center features-item">
      <div class="col-md-5 order-1 order-md-2 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="200">
        <img src="assets/img/Push.jpg" class="img-fluid rounded-image" alt="">
      </div>
      <div class="col-md-7 order-2 order-md-1" data-aos="fade-up" data-aos-delay="200">
        <h4>Pushpaben, Chimanial and Anilkumar Patel (Multipurpose Facility Hall)</h4>
        <p>
        The Pushpaben, Chimanial and Anilkumar Patel Multipurpose Facility Hall (Right) in Ndola,
        built through partnership with the Lions Club of Ndola.
        </p>
      </div>
    </div><!-- Features Item -->

    <div class="row gy-4 align-items-center features-item">
      <div class="col-md-5 d-flex align-items-center" data-aos="zoom-out">
        <img src="assets/img/Norhead.jpg" class="img-fluid rounded-image" alt="">
      </div>
      <div class="col-md-7" data-aos="fade-up">
        <h4>Norhed Auditorium</h4>
        <p>The Auditorium built through the NORHED project, facilitates academic and student engagement</p>
      </div>
    </div><!-- Features Item -->

    <div class="row gy-4 align-items-center features-item">
      <div class="col-md-5 order-1 order-md-2 d-flex align-items-center" data-aos="zoom-out">
        <img src="assets/img/worldBank.jpg" class="img-fluid rounded-image" alt="">
      </div>
      <div class="col-md-7 order-2 order-md-1" data-aos="fade-up">
        <h4>CBU-ACESM laboratory</h4>
        <p>
        The CBU-ACESM laboratory (Right) funded by the World Bank advances sustainable mining research. CBU has developed a curriculum in
        Railway System Engineering (Mpika campus) and is currently in the process of developing curricula focused on the Mining Value Chain.
        </p>
      </div>
    </div><!-- Features Item -->

    <div class="row gy-4 align-items-center features-item">
      <div class="col-md-5 d-flex align-items-center" data-aos="zoom-out">
        <img src="assets/img/CHALLENGE PICS/Mukuba Unipod.jpg" class="img-fluid rounded-image" alt="">
      </div>
      <div class="col-md-7" data-aos="fade-up">
        <h4>Mukuba Unipod innovation hub </h4>
        <p>The Mukuba Unipod hub was built to facilitate innovation and creative projects, from ideas to actualisation for industry. </p>
        <a href="https://www.cbu.ac.zm/unipod/website/" class="btn btn-primary mt-3" target="_blank" rel="noopener noreferrer">
  <span>More about Unipod</span><i class="bi bi-arrow-right"></i>
</a>     
      </div>
    </div><!-- Features Item -->
  </div>
</section><!-- /Features Section -->




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