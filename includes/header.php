<link href="assets/css/main.css" rel="stylesheet">
<style>
  .donate-btn {
  background-color: #3b82f6; /* Blue color */
  color: white; /* White text */
  padding: 10px 20px; /* Adjust padding for more spacing */
  border-radius: 30px; /* Rounded corners */
  text-decoration: none; /* Remove underline */
  font-weight: bold; /* Bold text */
  font-size: 16px; /* Adjust text size */
  display: flex; /* Use flexbox for centering */
  justify-content: center; /* Center horizontally */
  align-items: center; /* Center vertically */
  transition: background-color 0.3s ease; /* Smooth hover transition */
  height: 40px; /* Set button height */
  min-width: 120px; /* Minimum width for small content */
  padding-left: 20px;
  padding-right: 20px;
  white-space: nowrap; /* Prevent text wrapping */
}

.donate-btn:hover {
  background-color: #e6a223; /* Change color on hover */
  text-decoration: none; /* Ensure underline stays removed on hover */
}
.back-btn {
  background-color: #6c757d; /* Grey color */
  color: white;
  padding: 8px; /* Smaller padding */
  border-radius: 50%; /* Circular button */
  text-decoration: none;
  display: flex;
  justify-content: center;
  align-items: center;
  transition: background-color 0.3s ease;
  height: 40px; /* Small height */
  width: 40px; /* Make width equal to height for a circular shape */
}

.back-btn:hover {
  background-color: #5a6268; /* Darker grey on hover */
}

.back-btn i {
  font-size: 20px; /* Adjust size of the back arrow */
}


</style>
<header id="header" class="header d-flex align-items-center sticky-top">
    <div class="container position-relative d-flex align-items-center justify-content-between">

    <div class="logo d-flex align-items-center me-auto me-xl-0">
    <!-- Logo Image -->
    <!-- Back Button -->
<a href="https://www.cbu.ac.zm" class="back-btn">
  <i class="bi bi-arrow-left"></i> <!-- Bootstrap Icon for Back Arrow -->
</a>


    <img src="assets/img/CBU_Logo.png" alt="">
    <!-- Text (Not inside an anchor tag anymore) -->
    <h1 class="sitename">THE CBU CHALLENGE</h1>
    </div>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="index.php" class="<?php echo stripos($_SERVER['PHP_SELF'],'index.php')!==false?'active':''?>">Home</a></li>
          <li class="dropdown"><a href="#"><span>Vision</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
            <ul>
              <li><a href="vision.php" class="<?php echo stripos($_SERVER['PHP_SELF'],'vision.php')!==false?'active':''?>">Vision</a></li>
              <li><a href="gallery.php" class="<?php echo stripos($_SERVER['PHP_SELF'],'gallery.php')!==false?'active':''?>">Vision Gallery</a></li>
            </ul>
          </li>
          <li class="dropdown"><a href="#"><span>Campaign</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
            <ul>
            <li><a href="news.php" class="<?php echo stripos($_SERVER['PHP_SELF'],'news.php')!==false?'active':''?>">Latest News</a></li>
              <li><a href="campaign.php" class="<?php echo stripos($_SERVER['PHP_SELF'],'campaign.php')!==false?'active':''?>">Donor Categories</a></li>
              <li><a href="leaders.php" class="<?php echo stripos($_SERVER['PHP_SELF'],'leaders.php')!==false?'active':''?>">Leader Board</a></li>
            </ul>
          </li>
          <li><a href="team.php" class="<?php echo stripos($_SERVER['PHP_SELF'],'team.php')!==false?'active':''?>">Challenge Team</a></li>
          <li><a href="contact.php" class="<?php echo stripos($_SERVER['PHP_SELF'],'contact.php')!==false?'active':''?>">Contact</a></li>
          <li><a href="donate.php" class="donate-btn <?php echo stripos($_SERVER['PHP_SELF'],'donate.php')!==false?'active':''?>" style="color: white;">Donate Now</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

      <div class="header-social-links">
       <!--<a href="#" class="twitter"><i class="bi bi-twitter-x"></i></a>
        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>-->
        <a href="https://www.linkedin.com/company/the-cbu-challenge/" class="linkedin" target="_blank" rel="noopener noreferrer"><i class="bi bi-linkedin"></i></a>
        <a href="https://www.facebook.com/profile.php?id=61566853296806" class="facebook" target="_blank" rel="noopener noreferrer"><i class="bi bi-facebook"></i></a>
      </div>

    </div>
  </header>