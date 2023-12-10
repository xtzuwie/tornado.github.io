<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-xxx" crossorigin="anonymous" /> -->
    <title>About Us</title>
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

    <header class="py-5">
        <div class="container px-5">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-xxl-6">
                    <div class="text-center my-5">
                        <h1 class="fw-bolder mb-3">Our mission is to clean clothes and other things for everyone.</h1>
                        <p class="lead fw-normal text-muted mb-4">We Tornado Mix is making sure that no one will leave unhappy, every customer will make a joy in their eyes when the laundry is finished making sure that everyone will laugh and start to celebrate.</p>
                        <a class="btn btn-primary btn-lg" href="#scroll-target">Read our story</a>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <section class="py-5 bg-light" id="scroll-target">
        <div class="container px-5 my-5">
            <div class="row gx-5 align-items-center">
                <div class="col-lg-6"><img class="img-fluid rounded mb-5 mb-lg-0" src="img/yuri.jpg" alt="..." /></div>
                <div class="col-lg-6">
                    <h2 class="fw-bolder">Our Endorser</h2>
                    <p class="lead fw-normal text-muted mb-0">Our promoter is keeping the heat up and make us tears in joy that heart can be out loud even tho your sad, in tornado mix we will making everyone will stay happy when they leave.</p>
                </div>
            </div>
        </div>
    </section>
    <section class="py-5">
        <div class="container px-5 my-5">
            <div class="row gx-5 align-items-center">
                <div class="col-lg-6 order-first order-lg-last"><img class="img-fluid rounded mb-5 mb-lg-0" src="img/trip.jpg" alt="..." /></div>
                <div class="col-lg-6">
                    <h2 class="fw-bolder">Enjoy Every Moments</h2>
                    <p class="lead fw-normal text-muted mb-0">The owner of this laundry shop is making the employees happy and make a bonding on their co-workers so they keep the treasure in their hearts, making sure that they are happy and make them taste every sweet memories that come to their heart.</p>
                </div>
            </div>
        </div>
    </section>

    <div class="b-example-divider"></div>

    <div class="container px-4 py-5" id="icon-grid">
        <h2 class="pb-2 border-bottom">About our Services</h2>

        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-4 py-5">
            <div class="col d-flex align-items-start">
                <!-- FontAwesome solid lightbulb icon with custom color -->
                <i class="fas fa-lightbulb" style="color: #e8ba11; font-size: 1.75em;"></i>
                <div>
                    <h4 class="fw-bold mb-0">Client Experience</h4>
                    <p>You can always relies on our experienced workers that your clothes will be cleaned and amuzingly.</p>
                </div>
            </div>
            <div class="col d-flex align-items-start">
                <i class="fas fa-tags" style="color: #3170dd; font-size: 1.75em;"></i>
                <div>
                    <h4 class="fw-bold mb-0">Price Affordable</h4>
                    <p>Our laundry prices is not expensive so it's easy to settle an appointment even you don't have much money.</p>
                </div>
            </div>
            <div class="col d-flex align-items-start">
                <i class="fas fa-user-shield" style="color: #0b357f; font-size: 1.75em"></i>
                <div>
                    <h4 class="fw-bold mb-0">Client Satisfaction</h4>
                    <p>We're making sure that no one will hurt and give you the best satisfaction on this laundry.</p>
                </div>
            </div>
            <div class="col d-flex align-items-start">
                <i class="fas fa-medal" style="color: #ffd700; font-size: 1.75em"></i>
                <div>
                    <h4 class="fw-bold mb-0">Quality</h4>
                    <p>We making sure that your clothes is not a single inch damage and we will making sure it's on the goodhands.</p>
                </div>
            </div>
            <div class="col d-flex align-items-start">
                <i class="fas fa-truck fa-bounce" style="color: #e62914; font-size: 1.75em"></i>
                <div>
                    <h4 class="fw-bold mb-0">Free Deliver</h4>
                    <p>On some prices there are free delivery so make sure to grab this opportunity to make you less hassle.</p>
                </div>
            </div>
            <div class="col d-flex align-items-start">
                <i class="fas fa-business-time" style="color: #1b1c1d; font-size: 1.75em"></i>
                <div>
                    <h4 class="fw-bold mb-0">Track</h4>
                    <p>We always to make a update surveillance to your laundry so no one will make mistake.</p>
                </div>
            </div>
            <div class="col d-flex align-items-start">
                <svg xmlns="http://www.w3.org/2000/svg" height="30" width="100" viewBox="0 0 384 512"><!--!Font Awesome Free 6.5.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.-->
                    <path d="M384 312.7c-55.1 136.7-187.1 54-187.1 54-40.5 81.8-107.4 134.4-184.6 134.7-16.1 0-16.6-24.4 0-24.4 64.4-.3 120.5-42.7 157.2-110.1-41.1 15.9-118.6 27.9-161.6-82.2 109-44.9 159.1 11.2 178.3 45.5 9.9-24.4 17-50.9 21.6-79.7 0 0-139.7 21.9-149.5-98.1 119.1-47.9 152.6 76.7 152.6 76.7 1.6-16.7 3.3-52.6 3.3-53.4 0 0-106.3-73.7-38.1-165.2 124.6 43 61.4 162.4 61.4 162.4 .5 1.6 .5 23.8 0 33.4 0 0 45.2-89 136.4-57.5-4.2 134-141.9 106.4-141.9 106.4-4.4 27.4-11.2 53.4-20 77.5 0 0 83-91.8 172-20z" />
                </svg>
                <div>
                    <h4 class="fw-bold mb-0">Free Ecobag</h4>
                    <p>On all services we have a free ecobag so you cannot to take a plastic or any things, we will provide this for your convenience. </p>
                </div>
            </div>
            <div class="col d-flex align-items-start">
                <i class="fas fa-home" style="color: #3f78d9; font-size: 1.75em"></i>
                <div>
                    <h4 class="fw-bold mb-0">Home Secured</h4>
                    <p>The laundry is well dried and not a single inch tangled on, and free iron on limited package that we have.</p>
                </div>
            </div>
        </div>
    </div>

    <section class="py-5 bg-light">
        <div class="container px-5 my-5">
            <div class="text-center">
                <h2 class="fw-bolder">Our team</h2>
                <p class="lead fw-normal text-muted mb-5">Dedicated to quality and your success</p>
            </div>
            <div class="row gx-5 row-cols-1 row-cols-sm-2 row-cols-xl-4 justify-content-center">
                <div class="col mb-5 mb-5 mb-xl-0">
                    <div class="text-center">
                        <img class="img-fluid rounded-circle mb-4 px-4" src="img/owner.jpg" alt="..." />
                        <h5 class="fw-bolder">Josh Anastacio</h5>
                        <div class="fst-italic text-muted">Founder &amp; Owner</div>
                    </div>
                </div>
                <div class="col mb-5 mb-5 mb-xl-0">
                    <div class="text-center">
                        <img class="img-fluid rounded-circle mb-4 px-4" src="img/owner2.jpg" alt="..." />
                        <h5 class="fw-bolder">John Bautista</h5>
                        <div class="fst-italic text-muted">Manager</div>
                    </div>
                </div>
                <div class="col mb-5 mb-5 mb-sm-0">
                    <div class="text-center">
                        <img class="img-fluid rounded-circle mb-4 px-4" src="img/owner3.jpg" alt="..." />
                        <h5 class="fw-bolder">Patrick Laplano</h5>
                        <div class="fst-italic text-muted">Operations Manager</div>
                    </div>
                </div>
                <div class="col mb-5">
                    <div class="text-center">
                        <img class="img-fluid rounded-circle mb-4 px-4" src="img/owner4.jpg" alt="..." />
                        <h5 class="fw-bolder">Kenneth Sangre</h5>
                        <div class="fst-italic text-muted">Laundry Secretary</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

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