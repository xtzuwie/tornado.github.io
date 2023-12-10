<?php
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <title>Tornado Mix</title>
    <style>
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
        #carouselExampleIndicators {
            height: 70vh;
            overflow: hidden;
        }
        .carousel-item img {
            filter: blur(5px);
            transition: filter 3s ease-in-out;
            object-fit: cover;
            /* Add a smooth transition effect */
        }

        /* Remove the blur effect from the active carousel item */
        .carousel-item.active img {
            filter: blur(4px);
        }

        .gradient-text {
            background: linear-gradient(45deg, #020A0F, #2932CB, #020A0F);
            -webkit-background-clip: text;
            color: transparent;
            font-weight: bold;
            font-size: 40px;
        }

        .carousel-caption {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            opacity: 0;
            transition: opacity 0.5s ease-in-out, transform 0.5s ease-in-out;
            text-transform: capitalize;
        }

        .carousel-item.active .carousel-caption {
            opacity: 1;
            transform: translate(-50%, -50%) scale(1);
        }

        .animate-popup {
            animation: popupAnimation 0.5s ease-in-out;
        }

        @keyframes popupAnimation {
            0% {
                transform: translate(-50%, -50%) scale(0);
            }

            100% {
                transform: translate(-50%, -50%) scale(1);
            }
        }

        .slider {
            width: 100%;
            height: 100%;
            border-radius: 10px;
            overflow: hidden;
            margin: 0 auto;
            /* Center the slider horizontally */
            position: relative;
            /* Use relative positioning */
        }


        .slides {
            width: 800%;
            height: 100%;
            display: flex;
            overflow: hidden;
        }

        .slides input {
            display: none;
        }

        .slide {
            flex: 1;
            width: 100%;
            transition: 2s;
        }

        .slide img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            border-radius: 10px;
        }

        .navigation-manual {
            position: absolute;
            width: 800px;
            margin-top: -40px;
            display: flex;
            justify-content: center;
        }

        .manual-btn {
            border: 2px solid #40d3dc;
            padding: 5px;
            border-radius: 10px;
            cursor: pointer;
            transition: 1s;
        }

        .manual-btn:not(:last-child) {
            margin-right: 40px;
        }

        .manual-btn:hover {
            background: #40d3dc;
        }

        #radio1:checked~.first {
            margin-left: 0;
        }

        #radio2:checked~.first {
            margin-left: -20%;
        }

        #radio3:checked~.first {
            margin-left: -40%;
        }

        #radio4:checked~.first {
            margin-left: -60%;
        }

        .navigation-auto {
            position: absolute;
            display: flex;
            width: 800px;
            justify-content: center;
            margin-top: 460px;
        }

        .navigation-auto div {
            border: 2px solid #40d3dc;
            padding: 5px;
            border-radius: 10px;
            transition: 1s;
        }

        .navigation-auto div:not(:last-child) {
            margin-right: 40px;
        }

        #radio1:checked~.navigation-auto .auto-btn1 {
            background: #40d3dc;
        }

        #radio2:checked~.navigation-auto .auto-btn2 {
            background: #40d3dc;
        }

        #radio3:checked~.navigation-auto .auto-btn3 {
            background: #40d3dc;
        }

        #radio4:checked~.navigation-auto .auto-btn4 {
            background: #40d3dc;
        }

        footer {
            width: 100%;
            position: relative;
            bottom: 0;
            background: linear-gradient(to right, #21B1C1, #5756CB, #080F5B);
            color: white;
            padding: 40px 0;
            /* Adjusted padding for better proportions */
            border-top-left-radius: 125px;
            font-size: 13px;
            line-height: 20px;
            z-index: 100;
        }

        .row {
            width: 90%;
            margin: auto;
            display: flex;
            flex-wrap: wrap;
            align-items: flex-start;
            justify-content: space-between;
        }

        .col {
            flex-basis: 25%;
            padding: 10px;
        }

        .col:nth-child(2),
        .col:nth-child(3) {
            flex-basis: 15px;
        }

        .logo {
            width: 80px;
            margin-bottom: 30px;
        }

        .col h3 {
            width: fit-content;
            margin-bottom: 40px;
            position: relative;
        }

        .email-id {
            width: fit-content;
            border-bottom: 1px solid #ccc;
            margin: 20px 0;
        }

        ul li {
            list-style: none;
            margin-bottom: 12px;
        }

        ul li a {
            text-decoration: none;
            color: #fff;
        }

        form {
            padding-bottom: 15px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            border-bottom: 1px solid #ccc;
            margin-bottom: 50px;
        }

        form .fas {
            font-size: 18px;
            margin-right: 10px;
        }

        form input {
            width: 100%;
            background: transparent;
            color: #ccc;
            border: 0;
            outline: none;
        }

        form button {
            background: transparent;
            border: 0;
            outline: none;
            cursor: pointer;
        }

        form button .fas {
            font-size: 16px;
            color: #ccc;
        }

        .social-icons .fab {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            text-align: center;
            line-height: 40px;
            font-size: 20px;
            color: #000;
            background: #fff;
            margin-right: 15px;
            cursor: pointer;
        }

        hr {
            width: 90%;
            border: 0;
            border-bottom: 1px solid #ccc;
            margin: 20px auto;
        }

        .copyright {
            text-align: center;
        }

        .underline {
            width: 100%;
            height: 5px;
            background: #fff;
            border-radius: 3px;
            position: relative;
            top: 5px;
            left: 0;
            overflow: hidden;
        }

        .underline span {
            width: 15px;
            height: 100%;
            background: #41d5bc;
            border-radius: 3px;
            position: absolute;
            top: 0;
            left: 10px;
            animation: moving 2s linear infinite;
        }

        @keyframes moving {
            0% {
                left: -20px;
            }

            100% {
                left: 100px;
            }
        }
    </style>
</head>

<body>

    <header>
        <a href="index.php" class="logo"><img src="img/tm1.png"></a>

        <ul class="navmenu">
            <li><a href="index.php">Home</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="services.php">Services</a></li>
            <li><a href="pricing.php">Pricing</a></li>
        </ul>

        <div class="nav-icon">
            <a href="#"><i class="fas fa-user"></i></a>
            <div class="dropdown-content">
                <a href="authentication/register.php">Sign Up</a>
                <a href="authentication/login.php">Login</a>
            </div>
        </div>
    </header>

    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="img/torna.png" class="d-block w-100" alt="..." style="height: 1100px;">
                <div class="carousel-caption animate-popup caption1">
                    <h5 class="gradient-text">Welcome to our laundry</h5>
                    <p class="gradient-text">Browse for More!</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="img/shien.png" class="d-block w-100" alt="..." style="height: 1100px;">
                <div class="carousel-caption animate-popup caption2">
                    <h5 class="gradient-text">Make your laundry cool, and clean</h5>
                    <p class="gradient-text">VISIT US SOON!</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="img/yuri.jpeg" class="d-block w-100" alt="..." style="height: 1100px;">
                <div class="carousel-caption animate-popup caption3">
                    <h5 class="gradient-text">It's good to be part of our local</h5>
                    <p class="gradient-text">VISIT US SOON!</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="img/exterior.jpg" class="d-block w-100" alt="..." style="height: 1100px;">
                <div class="carousel-caption animate-popup caption4">
                    <h5 class="gradient-text">It's good to be part of our local</h5>
                    <p class="gradient-text">VISIT US SOON!</p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <!-- <div class="slider">
        <div class="slides">
            <input type="radio" name="radio-btn" id="radio1">
            <input type="radio" name="radio-btn" id="radio2">
            <input type="radio" name="radio-btn" id="radio3">
            <input type="radio" name="radio-btn" id="radio4">
            <div class="slide first">
                <img src="img/torna.png">
            </div>
            <div class="slide">
                <img src="img/shien.png">
            </div>
            <div class="slide">
                <img src="img/yuri.jpeg">
            </div>
            <div class="slide">
                <img src="img/exterior.jpg">
            </div>
            <div class="navigation-auto">
                <div class="auto-btn1"></div>
                <div class="auto-btn2"></div>
                <div class="auto-btn3"></div>
                <div class="auto-btn4"></div>
            </div>
        </div>
        <div class="navigation-manual">
            <label for="radio1" class="manual-btn"></label>
            <label for="radio2" class="manual-btn"></label>
            <label for="radio3" class="manual-btn"></label>
            <label for="radio4" class="manual-btn"></label>
        </div>
    </div> -->

    <div class="container-fluid pt-5 pb-3">
        <div class="container">
            <h6 class="text-gradient text-uppercase text-center font-weight-bold mb-3" style="font-size: 1.5rem; background: linear-gradient(45deg, #ff8a00, #e52e71); -webkit-background-clip: text; color: transparent;">Our Services</h6>
            <h1 class="display-4 text-center mb-5">What We Offer</h1>
            <div class="row">
                <!-- Service Item 1 -->
                <div class="col-lg-3 col-md-6 pb-1">
                    <div class="d-flex flex-column align-items-center justify-content-center text-center bg-light mb-4 px-4" style="height: 300px;">
                        <div class="d-inline-flex align-items-center justify-content-center bg-white shadow rounded-circle mb-4" style="width: 100px; height: 100px;">
                            <i class="fas fa-cloud-sun" style="color: #eed21b; font-size: 50px;"></i>
                        </div>
                        <h4 class="font-weight-bold m-0">Dry Cleaning</h4>
                    </div>
                </div>

                <!-- Service Item 2 -->
                <div class="col-lg-3 col-md-6 pb-1">
                    <div class="d-flex flex-column align-items-center justify-content-center text-center bg-light mb-4 px-4" style="height: 300px;">
                        <div class="d-inline-flex align-items-center justify-content-center bg-white shadow rounded-circle mb-4" style="width: 100px; height: 100px;">
                            <i class="fas fa-hands-wash" style="color: #075ef2; font-size: 50px;"></i>
                        </div>
                        <h4 class="font-weight-bold m-0">Wash and Laundry</h4>
                    </div>
                </div>

                <!-- Service Item 3 -->
                <div class="col-lg-3 col-md-6 pb-1">
                    <div class="d-flex flex-column align-items-center justify-content-center text-center bg-light mb-4 px-4" style="height: 300px;">
                        <div class="d-inline-flex align-items-center justify-content-center bg-white shadow rounded-circle mb-4" style="width: 100px; height: 100px;">
                            <i class="fas fa-tint" style="color: #205ecb; font-size: 50px;"></i>
                        </div>
                        <h4 class="font-weight-bold m-0">Curtain Laundry</h4>
                    </div>
                </div>

                <!-- Service Item 4 -->
                <div class="col-lg-3 col-md-6 pb-1">
                    <div class="d-flex flex-column align-items-center justify-content-center text-center bg-light mb-4 px-4" style="height: 300px;">
                        <div class="d-inline-flex align-items-center justify-content-center bg-white shadow rounded-circle mb-4" style="width: 100px; height: 100px;">
                            <i class="fas fa-tshirt" style="color: #ecf000; font-size: 50px;"></i>
                        </div>
                        <h4 class="font-weight-bold m-0">Suits Cleaning</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container py-5">
        <div class="row">
            <div class="col-lg-6 mb-4 mb-lg-0">
                <img class="img-fluid rounded" src="img/about.jpg" alt="About Us Image">
            </div>
            <div class="col-lg-6">
                <h2 class="text-primary mb-4">About Our Laundry Services</h2>
                <p class="lead">We are a dedicated team of professionals committed to providing top-notch laundry and dry cleaning services. Our mission is to make your laundry experience hassle-free and convenient.</p>
                <p>We pride ourselves on using the latest technologies and eco-friendly cleaning methods to ensure the best results for your garments. Our highly skilled and professional staff is here to meet your laundry needs with precision and care.</p>
                <ul class="list-unstyled">
                    <li><i class="fas fa-check text-success me-2"></i> Quality Laundry Service</li>
                    <li><i class="fas fa-check text-success me-2"></i> Fast and Reliable Delivery</li>
                    <li><i class="fas fa-check text-success me-2"></i> Experienced and Friendly Staff</li>
                    <li><i class="fas fa-check text-success me-2"></i> 100% Customer Satisfaction Guarantee</li>
                </ul>
            </div>
        </div>
    </div>

    <div class="container-fluid pt-5">
        <div class="container">
            <h6 class="text-uppercase text-center font-weight-bold mb-3" style="font-size: 1.5rem; letter-spacing: 2px; text-shadow: 2px 2px 2px rgba(0, 0, 0, 0.2); background: linear-gradient(to right, #ff7e5f, #feb47b); -webkit-background-clip: text; color: transparent;">Working Process</h6>
            <h1 class="display-4 text-center mb-5">How We Work</h1>
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="d-flex flex-column align-items-center justify-content-center text-center mb-5">
                        <div class="d-inline-flex align-items-center justify-content-center bg-white border border-light shadow rounded-circle mb-4" style="width: 150px; height: 150px; border-width: 15px !important;">
                            <h2 class="display-2 text-secondary m-0"><span style="color: blue;">1</span></h2>
                        </div>
                        <h3 class="font-weight-bold m-0 mt-2">Order Place</h3>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="d-flex flex-column align-items-center justify-content-center text-center mb-5">
                        <div class="d-inline-flex align-items-center justify-content-center bg-white border border-light shadow rounded-circle mb-4" style="width: 150px; height: 150px; border-width: 15px !important;">
                            <h2 class="display-2 text-secondary m-0"><span style="color: red;">2</h2>
                        </div>
                        <h3 class="font-weight-bold m-0 mt-2">Free Pick Up</h3>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="d-flex flex-column align-items-center justify-content-center text-center mb-5">
                        <div class="d-inline-flex align-items-center justify-content-center bg-white border border-light shadow rounded-circle mb-4" style="width: 150px; height: 150px; border-width: 15px !important;">
                            <h2 class="display-2 text-secondary m-0"><span style="color: yellow;">3</h2>
                        </div>
                        <h3 class="font-weight-bold m-0 mt-2">Dry Cleaning</h3>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="d-flex flex-column align-items-center justify-content-center text-center mb-5">
                        <div class="d-inline-flex align-items-center justify-content-center bg-white border border-light shadow rounded-circle mb-4" style="width: 150px; height: 150px; border-width: 15px !important;">
                            <h2 class="display-2 text-secondary m-0"><span style="color: orange;">4</h2>
                        </div>
                        <h3 class="font-weight-bold m-0 mt-2">Free Delivery</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid py-5 bg-light">
        <div class="container">
            <h6 class="text-uppercase text-center font-weight-bold mb-3" style="font-size: 1.5rem; letter-spacing: 2px; text-shadow: 2px 2px 2px rgba(0, 0, 0, 0.2); background: linear-gradient(to right, #a44f1e, #2388cb, #751746); -webkit-background-clip: text; color: transparent;">Best Offers</h6>
            <h1 class="display-4 text-center mb-5">Pricing </h1>
            <div class="row">
                <div class="col-lg-4 mb-4">
                    <div class="card h-100">
                        <img src="img/service1.jpg" class="card-img-top" alt="Service 1">
                        <div class="card-body text-center">
                            <h5 class="card-title">Casuals</h5>
                            <p class="card-text">We offer high-quality dry cleaning services to keep your clothes fresh and clean.</p>
                            <a href="pricing.php" class="btn btn-primary">Learn More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-4">
                    <div class="card h-100">
                        <img src="img/service2.jpg" class="card-img-top" alt="Service 2">
                        <div class="card-body text-center">
                            <h5 class="card-title">Formals </h5>
                            <p class="card-text">Enjoy the convenience of free laundry pickup and delivery services at your doorstep.</p>
                            <a href="pricing.php" class="btn btn-primary">Learn More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-4">
                    <div class="card h-100">
                        <img src="img/service3.jpg" class="card-img-top" alt="Service 3">
                        <div class="card-body text-center">
                            <h5 class="card-title">Delicates</h5>
                            <p class="card-text">Need your clothes in a hurry? Try our express service for fast and reliable delivery.</p>
                            <a href="pricing.php" class="btn btn-primary">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer>
        <div class="container">
            <div class="row">
                <img src="img/tm1.png" class="logo" alt="Logo">
                <p>Welcome to Tornado Mix. We are ready to serve you.</p>
                <div class="col">
                    <h3>Shop <div class="underline"><span></span></div>
                    </h3>
                    <p>Eastwood San Isidro</p>
                    <p>Rodriguez, Rizal</p>
                    <p>1860, Philippines</p>
                    <p class="email-id">anastacio.joshr@gmail.com</p>
                    <h4>+639 516150615</h4>
                </div>
                <div class="col">
                    <h3>Links <div class="underline"><span></span></div>
                    </h3>
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li><a href="about.php">About</a></li>
                        <li><a href="services.php">Services</a></li>
                        <li><a href="pricing.php">Pricing</a></li>
                    </ul>
                </div>
                <div class="col">
                    <h3>Newsletter <div class="underline"><span></span></div>
                    </h3>
                    <form>
                        <i class="fas fa-envelope"></i>
                        <input type="email" placeholder="Enter your email" required>
                        <button type="submit"><i class="fas fa-arrow-right"></i></button>
                    </form>
                    <div class="social-icons">
                        <i class="fab fa-facebook"></i>
                        <i class="fab fa-twitter"></i>
                        <i class="fab fa-google"></i>
                        <i class="fab fa-github"></i>
                    </div>
                </div>
                <hr>
                <p class="copyright">Tornado Mix 2023 - All rights reserved</p>
    </footer>



    <!--<div class="container-fluid bg-primary text-white mt-5 pt-5 px-sm-3 px-md-5">
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
    </div> -->


    <script type="text/javascript">
        var counter = 1;
        setInterval(function() {
            document.getElementById('radio' + counter).checked = true;
            counter++;
            if (counter > 4) {
                counter = 1;
            }
        }, 5000);
    </script>
    <!-- Include Bootstrap JS and Popper.js (Bootstrap 5 no longer requires jQuery or Popper.js) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>


</body>

</html>