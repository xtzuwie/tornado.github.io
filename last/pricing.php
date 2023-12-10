<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
  <title>Pricing</title>
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
  <!-- Favicon-->
  <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
  <!-- Bootstrap icons-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
  <!-- Core theme CSS (includes Bootstrap)-->
  <!-- <link href="css/styles.css" rel="stylesheet" /> -->
</head>

<body class="d-flex flex-column">
  <main class="flex-shrink-0">
    <!-- Navigation-->
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
    <!-- Pricing section-->
    <section class="bg-light py-5">
      <div class="container px-5 my-5">
        <div class="text-center mb-5">
          <h1 class="fw-bolder">Pay as you like</h1>
          <p class="lead fw-normal text-muted mb-0">With our no hassle pricing list</p>
        </div>
        <div class="row gx-5 justify-content-center">
          <!-- Pricing card free-->
          <div class="col-lg-6 col-xl-4">
            <div class="card mb-5 mb-xl-0">
              <div class="card-body p-5">
                <div class="small text-uppercase fw-bold text-muted">Casual</div>
                <div class="mb-3">
                  <span class="display-4 fw-bold">P75</span>
                  <span class="text-muted">/ kg</span>
                </div>
                <ul class="list-unstyled mb-4">
                  <li class="mb-2">
                    <i class="bi bi-check text-primary"></i>
                    <strong>Casual Clothes</strong>
                  </li>
                  <li class="mb-2">
                    <i class="bi bi-check text-primary"></i>
                    Dry and Fold
                  </li>
                  <li class="mb-2">
                    <i class="bi bi-check text-primary"></i>
                    Press iron
                  </li>
                  <li class="mb-2">
                    <i class="bi bi-check text-primary"></i>
                    Free Ecobag
                  </li>
                  <li class="mb-2 text-muted">
                    <i class="bi bi-x"></i>
                    Free Delivery
                  </li>
                  <li class="mb-2 text-muted">
                    <i class="bi bi-x"></i>
                    Fabric Detergent
                  </li>
                  <li class="mb-2 text-muted">
                    <i class="bi bi-x"></i>
                    Hand Wash
                  </li>
                  <li class="text-muted">
                    <i class="bi bi-x"></i>
                    Hang Dry
                  </li>
                </ul>
                <div class="d-grid"><a class="btn btn-outline-primary" href="authentication/login.php">Checkout</a></div>
              </div>
            </div>
          </div>
          <!-- Pricing card pro-->
          <div class="col-lg-6 col-xl-4">
            <div class="card mb-5 mb-xl-0">
              <div class="card-body p-5">
                <div class="small text-uppercase fw-bold">
                  <i class="bi bi-star-fill text-warning"></i>
                  Delicates
                </div>
                <div class="mb-3">
                  <span class="display-4 fw-bold">P100</span>
                  <span class="text-muted">/ kg.</span>
                </div>
                <ul class="list-unstyled mb-4">
                  <li class="mb-2">
                    <i class="bi bi-check text-primary"></i>
                    <strong>Delicates Clothes</strong>
                  </li>
                  <li class="mb-2">
                    <i class="bi bi-check text-primary"></i>
                    Fabric Detergent
                  </li>
                  <li class="mb-2">
                    <i class="bi bi-check text-primary"></i>
                    Hand Wash
                  </li>
                  <li class="mb-2">
                    <i class="bi bi-check text-primary"></i>
                    Hang Dry
                  </li>
                  <li class="mb-2">
                    <i class="bi bi-check text-primary"></i>
                    Folded
                  </li>
                  <li class="mb-2">
                    <i class="bi bi-check text-primary"></i>
                    Hang Dry
                  </li>
                  <li class="mb-2">
                    <i class="bi bi-check text-primary"></i>
                    Free Delivery
                  </li>
                  <li class="text-muted">
                    <i class="bi bi-check text-primary"></i>
                    Free Sticker
                  </li>
                </ul>
                <div class="d-grid"><a class="btn btn-primary" href="authentication/login.php">Checkout</a></div>
              </div>
            </div>
          </div>
          <!-- Pricing card enterprise-->
          <div class="col-lg-6 col-xl-4">
            <div class="card">
              <div class="card-body p-5">
                <div class="small text-uppercase fw-bold text-muted">Formal</div>
                <div class="mb-3">
                  <span class="display-4 fw-bold">P90</span>
                  <span class="text-muted">/ kg.</span>
                </div>
                <ul class="list-unstyled mb-4">
                  <li class="mb-2">
                    <i class="bi bi-check text-primary"></i>
                    <strong>Formal Clothes</strong>
                  </li>
                  <li class="mb-2">
                    <i class="bi bi-check text-primary"></i>
                    Dry and Fold
                  </li>
                  <li class="mb-2">
                    <i class="bi bi-check text-primary"></i>
                    Press Iron
                  </li>
                  <li class="mb-2">
                    <i class="bi bi-check text-primary"></i>
                    Free Ecobag
                  </li>
                  <li class="mb-2">
                    <i class="bi bi-check text-primary"></i>
                    Free Delivery
                  </li>
                  <li class="mb-2">
                    <i class="bi bi-check text-primary"></i>
                    Hang Dry
                  </li>
                  <li class="mb-2">
                    <i class="bi bi-check text-primary"></i>
                    <strong>Downy / Any </strong>
                    Perfume
                  </li>
                  <li class="text-muted">
                    <i class="bi bi-check text-primary"></i>
                    Free Sticker
                  </li>
                </ul>
                <div class="d-grid"><a class="btn btn-outline-primary" href="authentication/login.php">Checkout</a></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>

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


  <!-- Footer-->
  <footer class="bg-dark py-4 mt-auto">
    <div class="container px-5">
      <div class="row align-items-center justify-content-between flex-column flex-sm-row">
        <div class="col-auto">
          <div class="small m-0 text-white">Copyright &copy; Tornado Mix</div>
        </div>
        <div class="col-auto">
          <a class="link-light small" href="#!">Privacy</a>
          <span class="text-white mx-1">&middot;</span>
          <a class="link-light small" href="#!">Terms</a>
          <span class="text-white mx-1">&middot;</span>
          <a class="link-light small" href="#!">Contact</a>
        </div>
      </div>
    </div>
  </footer>
  <!-- Bootstrap core JS-->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  <!-- Core theme JS-->
  <script src="js/scripts.js"></script>
</body>

</html>