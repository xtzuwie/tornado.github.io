<?php
session_start();

if (isset($_SESSION["user"])) {
    header("Location: profile.php");
}

if (isset($_POST["login"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];

    require_once "database.php";

    $sql = "SELECT * FROM users WHERE username = '$username'";
    $result = mysqli_query($conn, $sql);
    $user = mysqli_fetch_array($result, MYSQLI_ASSOC);

    if ($user) {
        if (password_verify($password, $user["password"])) {
            $_SESSION["user"] = $username; // Set the session variable with the actual username
            header("Location: profile.php");
            exit();
        } else {
            echo "<div class='alert alert-danger'>Password does not match</div>";
        }
    } else {
        echo "<div class='alert alert-danger'>Username does not exist</div>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
    <title>Login</title>
    <style>
        .btn-55,
        .btn-55 *,
        .btn-55 :after,
        .btn-55 :before,
        .btn-55:after,
        .btn-55:before {
            border: 0 solid;
            box-sizing: border-box;
        }

        .btn-55 {
            -webkit-tap-highlight-color: transparent;
            -webkit-appearance: button;
            background-color: #000;
            background-image: none;
            color: #fff;
            cursor: pointer;
            font-family: ui-sans-serif, system-ui, -apple-system, BlinkMacSystemFont,
                Segoe UI, Roboto, Helvetica Neue, Arial, Noto Sans, sans-serif,
                Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji;
            font-size: 100%;
            line-height: 1.5;
            margin: 0;
            -webkit-mask-image: -webkit-radial-gradient(#000, #fff);
            padding: 0;
            justify-content: center;
        }

        .btn-55:disabled {
            cursor: default;
        }

        .btn-55:-moz-focusring {
            outline: auto;
        }

        .btn-55 svg {
            display: block;
            vertical-align: middle;
        }

        .btn-55 [hidden] {
            display: none;
        }

        .btn-55 {
            background: linear-gradient(90deg, blue, red);
            border-radius: 999px;
            box-sizing: border-box;
            color: #000;
            font-weight: 900;
            overflow: hidden;
            padding: 1.8rem 5rem;
            position: relative;
            text-transform: uppercase;
        }

        .btn-55 span {
            background: #1e293b;
            border-radius: 999px;
            color: #fff;
            display: grid;
            inset: 5px;
            place-items: center;
            position: absolute;
            transition: background 0.3s;
        }

        .btn-55:hover span {
            background: none;
        }
    </style>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="../index.php">Tornado Mix</a>
            <div class="navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Log In</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="login-wrapper">
        <h2 class="text-center mb-4">Login</h2>

        <form method="post" action="">
            <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <input type="text" class="form-control" id="username" name="username" placeholder="Enter your username">
            </div>

            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <div class="input-group">
                    <input type="password" class="form-control" id="password" name="password" placeholder="Enter your password">
                    <button type="button" class="btn btn-outline-secondary eye-icon" onclick="toggleLoginPasswordVisibility()">
                        <i class="fas fa-eye eye-icon"></i>
                    </button>
                </div>
            </div>

            <div class="mb-3 text-center">
                <button type="submit" class="btn btn-primary btn-55" name="login">Login</button>
                <a href="register.php" class="btn btn-link">Sign Up</a>
            </div>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://kit.fontawesome.com/your-font-awesome-kit-id.js" crossorigin="anonymous"></script>
    <script src="script.js"></script>

</body>

</html>