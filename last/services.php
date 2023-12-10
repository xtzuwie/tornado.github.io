<?php
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
  <title>Services</title>
  <style>
    body {
      width: 100%;
      height: 100vh;
      margin: 0;
      font-family: 'Poppins', sans-serif;
    }

    header {
      position: relative;
      width: 100%;
      top: 0;
      right: 0;
      z-index: 1000;
      display: flex;
      align-items: center;
      justify-content: space-between;
    }

    .logo img {
      max-width: 120px;
      height: auto;
    }

    .navmenu {
      display: flex;
    }

    .navmenu a {
      color: blue;
      font-size: 20px;
      text-transform: capitalize;
      padding: 10px 20px;
      font-weight: 400;
      transition: all .42s ease;
    }

    .navmenu:hover {
      color: skyblue;
      transition: 2s ease;
    }

    .nav-icon {
      display: flex;
      align-items: center;
    }

    .nav-icon i {
      margin-right: 30px;
      color: #2c2c2c;
      font-size: 25px;
      font-weight: 400;
      transition: all .42s ease;
    }

    .nav-icon i:hover {
      transform: scale(1.1);
      color: skyblue;
    }

    .dropdown-content {
      display: none;
      position: absolute;
      background-color: #f9f9f9;
      min-width: 160px;
      box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
      z-index: 1;
      right: 0;
      top: 0;
    }

    .dropdown-content a {
      color: black;
      padding: 20px 20px;
      text-decoration: none;
      display: block;
    }

    .dropdown-content a:hover {
      background-color: #f1f1f1;
    }

    .nav-icon:hover .dropdown-content {
      display: block;
    }

    .card-container {
      display: flex;
      justify-content: center;
      /* Adjust as needed */
      padding: 20px;
      gap: 50px;
      /* Add padding if necessary */
    }

    .card {
      width: 320px;
      height: 500px;
      border-radius: 20px;
      overflow: hidden;
      border: 8px solid blueviolet;
      position: relative;
    }

    .card-img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      border-radius: 15px;
    }

    .card-body {
      width: 100%;
      height: 100%;
      top: 0;
      right: -100%;
      position: absolute;
      background: #1f3d4738;
      backdrop-filter: blur(5px);
      border-radius: 15px;
      color: #fff;
      padding: 30px;
      display: flex;
      flex-direction: column;
      justify-content: center;
      transition: 2s;
    }

    .card:hover .card-body {
      right: 0;
    }

    .card-title {
      text-transform: uppercase;
      font-size: 50px;
      font-weight: 500;
    }

    .card-sub-title {
      text-transform: capitalize;
      font-size: 14px;
      font-weight: 300;
    }

    .card-info {
      font-size: 16px;
      line-height: 25px;
      margin: 40px 0;
      font-weight: 400;
    }

    .card-btn {
      color: #1f3d47;
      padding: 10px 20px;
      width: 120px;
      border-radius: 3px;
      border: none;
      outline: none;
      font-weight: 500;
      cursor: pointer;
    }

    .accordion {
      margin: 60px auto;
      width: 600px;
    }

    .accordion li {
      list-style: none;
      width: 100%;
      margin: 20px;
      padding: 10px;
      border-radius: 8px;
      background-color: #e3edf7;
      box-shadow: 6px 6px 10px -1px rgba(0, 0, 0, 0.15),
        -6px 6px 10px -1px rgba(0, 0, 0, 0.15);
    }

    .accordion li label {
      display: flex;
      align-items: center;
      padding: 10px;
      font-size: 18px;
      font-weight: 500;
      cursor: pointer;
    }

    label::before {
      content: '+';
      margin-right: 10px;
      font-size: 24px;
      font-weight: 600;
    }

    input[type="radio"] {
      display: none;
    }

    .accordion .content {
      color: #555;
      padding: 0 10px;
      line-height: 26px;
      max-height: 0;
      overflow: hidden;
      transition: max-height 0.5s, padding 0.5s;
    }

    .accordion input[type="radio"]:checked+label+.content {
      max-height: 400px;
      padding: 10px 10px 20px;
    }

    .accordion input[type="radio"]:checked+label::before {
      content: '-';
    }
  </style>
</head>

<body>


  <header>
    <a href="index.php" class="logo"><img src="img/tm1.png"></a>

    <ul class="navmenu">
      <a href="index.php">Home</a>
      <a href="about.php">About</a>
      <a href="services.php">Services</a>
      <a href="pricing.php">Pricing</a>
    </ul>

    <div class="nav-icon">
      <a href="#"><i class="fas fa-user"></i></a>
      <div class="dropdown-content">
        <a href="authentication/register.php">Sign Up</a>
        <a href="authentication/login.php">Login</a>
      </div>
    </div>
  </header>

  <!-- <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="index.php">Tornado Mix</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <div class="navbar-nav justfiy-content-center">
        <a class="nav-link" href="index.php">Home</a>
        <a class="nav-link" href="about.php">About</a>
        <a class="nav-link" href="services.php">Services</a>
        <a class="nav-link" href="pricing.php">Pricing</a>
      </div>
      <div class="navbar-nav ms-auto">
        <div class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <i class="far fa-user"></i>
          </a>
          <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="authentication/login.php">Login</a></li>
            <li><a class="dropdown-item" href="authentication/register.php">Signup</a></li>
          </ul>
        </div>
      </div>
    </div>
  </nav> -->

  <div class="container text-center mt-3">
    <h6 class="text-gradient text-uppercase text-center font-weight-bold mb-3" style="font-size: 1.5rem; background: linear-gradient(45deg, #ff8a00, #e52e71); -webkit-background-clip: text; color: transparent;">Our Services</h6>
  </div>

  <div class="container text-center">
    <p>We are committed to giving our clients convenient, high-quality laundry services. Our laundry is sorted, meticulously cleaned, dried, folded, and packed. It could be necessary to wash your clothes gently, as indicated by the care labels. For this reason, we also offer dry cleaning and hand washing for your delicates and unique items. In addition, we provide steaming and ironing services for your just laundered clothing. We can expertly press your clothes so you look your best.</p>
  </div>

  <div class="card-container">
    <div class="card">
      <img src="img/mwa.jpg" class="card-img">
      <div class="card-body">
        <h1 class="card-title" style="color: #ffa213; text-decoration: underline;">CASUAL SERVICE</h1>
        <h2 style="color: #a40e0e; border: 3px solid #c13bb2;">Includes :</h2>
        <p style="color: #fb5ee6; text-decoration: underline; font-weight: bold; font-size: 20px;">Press Iron</p>
        <p style="color: #0052fb; text-decoration: underline; font-weight: bold; font-size: 1.2rem;">Free Ecobag</p2>
        <p style="color: #4a04a4; text-decoration: underline; font-weight: bold; font-size: 1rem;">Casual Clothes only</p>
        <strong style="color: #000000; border: 3px solid #ffffff; font-weight: bold;">P75.00</strong>
        <a href="pricing.php" class="card-btn">
          <button type="submit">See Info</button>
        </a>
      </div>
    </div>

    <div class="card">
      <img src="img/ironing.jpg" class="card-img">
      <div class="card-body">
        <h1 class="card-title" style="color:#131dcb; text-decoration: underline;">FORMAL SERVICE</h1>
        <h2 style="color: #02a3a4; border: 3px solid #02a3a4;">Includes :</h2>
        <p style="color: #8b1082; text-decoration: underline; font-weight: bold; font-size: 20px;">Dry and Fold</p>
        <p style="color: #ff9900; text-decoration: underline; font-weight: bold; font-size: 20px;">Press Iron</p>
        <p style="color: #ff1d3a; text-decoration: underline; font-weight: 700; font-size: 20px;">Hang Dry</p>
        <p style="color: #ff00ff; text-decoration: underline; font-weight: bold; font-size: 20px;">With perfume added</p>
        <p style="color: #0048ba; text-decoration: underline; font-weight:bold;">Free Delivery</p>
        <strong style="color: #000080; border: 3px solid #ffffff; font-weight: 800">P90.00</strong>
        <a href="pricing.php" class="card-btn">
          <button type="submit">See Info</button>
        </a>
      </div>
    </div>

    <div class="card">
      <img src="img/hang.jpg" class="card-img">
      <div class="card-body">
        <h1 class="card-title">Hang Dry</h1>
        <p class="card-sub-title">Dry on Sun</p>
        <p class="card-info">Drying to the sun so it will stay fragrant and dry.</p>
        <button class="card-btn">See Info</button>
      </div>
    </div>
  </div>

  <ul class="accordion">
    <li>
      <input type="radio" name="accordion" id="first" checked>
      <label for="first">Casusal Service</label>
      <div class="content">
        <p>lorem</p>
      </div>
    </li>
    <li>
      <input type="radio" name="accordion" id="second">
      <label for="second">Formal Service</label>
      <div class="content">
        <p>lorem</p>
      </div>
    </li>
    <li>
      <input type="radio" name="accordion" id="third">
      <label for="third">Delicates Service</label>
      <div class="content">
        <p>lorem</p>
      </div>
    </li>
  </ul>

  <div class="container-fluid bg-primary text-white mt-5 pt-5 px-sm-3 px-md-5">
    <div class="row pt-5">
      <div class="col-lg-3 col-md-6 mb-5">
        <a href="">
          <h1 class="text-secondary mb-3"><span class="text-white">TORNADO</span><span style="color: yellow;">MIX</span></h1>
        </a>
        <p>Your best laundry provider, located now at Rodriguez Rizal.</p>
        <div class="d-flex justify-content-start mt-4">
          <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0" style="width: 38px; height: 38px;" href="#"><i class="fab fa-twitter"></i></a>
          <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0" style="width: 38px; height: 38px;" href="https://www.facebook.com/profile.php?id=61553523027229"><i class="fab fa-facebook-f"></i></a>
          <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0" style="width: 38px; height: 38px;" href="#"><i class="fab fa-linkedin-in"></i></a>
          <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0" style="width: 38px; height: 38px;" href="#"><i class="fab fa-instagram"></i></a>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 mb-5">
        <h4 class="text-white mb-4">Get In Touch</h4>
        <p>If you have a question don't forget to contact us!</p>
        <p><i class="fa fa-map-marker-alt mr-2"></i>Eastwood San Isidro, Rodriguez Rizal, Philippines</p>
        <p><i class="fa fa-phone-alt mr-2"></i>+012 345 67890</p>
        <p><i class="fa fa-envelope mr-2"></i>tornadomix@gmail.com</p>
      </div>
      <div class="col-lg-3 col-md-6 mb-5">
        <h4 class="text-white mb-4">Quick Links</h4>
        <div class="d-flex flex-column justify-content-start">
          <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Home</a>
          <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>About Us</a>
          <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Services</a>
          <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Pricing</a>
          <a class="text-white" href="#"><i class="fa fa-angle-right mr-2"></i>Contact Us</a>
        </div>
      </div>
    </div>
  </div>
  </div>




  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
  <script src="script.js"></script>

</body>

</html>