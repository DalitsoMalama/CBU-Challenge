<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The CBU Challenge - Admin Dashboard</title>
    <link rel="stylesheet" href="styles.css">

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

<style>
    * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body, html {
    height: 100%;
    font-family: Arial, sans-serif;
    background-color: #f0f4f8;
}

.container {
    display: flex;
    height: 100vh;
    width: 100%;
}

/* Left side: Logo and welcome message */
.left-side {
    width: 50%;
    padding: 40px;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: flex-start;
    background-color: #fff;
}

.header {
    margin-bottom: 40px;
}

.header .logo {
    width: 80px;
}

.header h1 {
    font-size: 2.5rem;
    color: #2358a5;
}

.header h2 {
    font-size: 1.2rem;
    color: #555;
}

.welcome-message {
    font-size: 1.2rem;
    color: #333;
    line-height: 1.5;
}

/* Right side: Dashboard tiles */
.right-side {
    width: 50%;
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 20px;
}

.dashboard {
    display: grid;
    grid-template-columns: repeat(2, 1fr);  /* Two tiles per row */
    gap: 20px;
    width: 80%;
}

.tile {
    padding: 30px;
    text-align: center;
    background-color: #4A90E2;
    color: white;
    font-size: 1.5rem;
    border-radius: 15px;
    cursor: pointer;
    transition: transform 0.3s ease, background-color 0.3s ease;
    text-decoration: none;
}

.tile:hover {
    transform: scale(1.05);
}

.tile:active {
    transform: scale(0.95);
}

.home { background-color: #E36C25; }
.vision { background-color: #9B8CD2; }
.campaign { background-color: #323232; }
.challenge { background-color: #41974B; }
.contact { background-color: #677DB7; }
.donate { background-color: #E36C25; }

</style>
<body>
    <div class="container">
        <!-- Left side: Logo and Welcome Message -->
        <div class="left-side">
            <div class="header">
                <img src="cbuchlogo.png.png" alt="CBU Challenge Logo" class="logo">
                <h1>The CBU Challenge</h1>
                <h2>ADMIN DASHBOARD</h2>
            </div>
            <div class="welcome-message">
                <p>
                    Welcome to the Dashboard! Here, you'll find everything you need to manage and update The CBU Challenge content with ease. We've organized each section to help you make quick changes and keep information up-to-date. Enjoy exploring!
                </p>
            </div>
        </div>

        <!-- Right side: Dashboard tiles -->
        <div class="right-side">
            <div class="dashboard">
                <a href="home.html" class="tile home">Home</a>
                <a href="vision.html" class="tile vision">Vision</a>
                <a href="campaign.html" class="tile campaign">Campaign</a>
                <a href="challenge.html" class="tile challenge">Challenge Team</a>
                <a href="contact.html" class="tile contact">Contact</a>
                <a href="donate.html" class="tile donate">Donate Now</a>
            </div>
        </div>
        
    <script src="script.js"></script>
</body>
</html>

<script>
    document.querySelectorAll('.tile').forEach(tile => {
    tile.addEventListener('mouseover', () => {
        tile.style.boxShadow = '0px 4px 15px rgba(0, 0, 0, 0.3)';
    });
    
    tile.addEventListener('mouseout', () => {
        tile.style.boxShadow = 'none';
    });
    
    tile.addEventListener('click', () => {
        tile.classList.add('animate-click');
        setTimeout(() => {
            tile.classList.remove('animate-click');
        }, 200);
    });
});

</script>