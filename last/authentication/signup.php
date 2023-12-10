<?php include('server.php') ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
    <title>Sign Up</title>
</head>
<body>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header text-center">
                    <h2>Sign Up</h2>
                </div>
                <div class="card-body">
                    <form method="POST" action="signup.php"> <!-- Add method and action attributes -->
                        <div class="mb-3">
                            <label for="username" class="form-label">Username</label>
                            <input type="text" name="username" class="form-control" id="username" placeholder="Enter your username">
                        </div>
                        
                        <form method="POST" action="signup.php" onsubmit="return validatePasswords()">
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <div class="input-group">
                                <input type="password" class="form-control" id="password" placeholder="Enter your password">
                                <button type="button" class="btn btn-outline-secondary eye-icon" onclick="togglePasswordVisibility('password', 'eye-icon-password')">
                                <i class="fas fa-eye" id="eye-icon-password"></i>
                        </button>
                    </div>
                </div>

                    <div class="mb-3">
                        <label for="confirmPassword" class="form-label">Confirm Password</label>
                        <div class="input-group">
                            <input type="password" class="form-control" id="confirmPassword" placeholder="Re-enter your password">
                                <button type="button" class="btn btn-outline-secondary eye-icon" onclick="togglePasswordVisibility('confirmPassword', 'eye-icon-confirmPassword')">
                                <i class="fas fa-eye" id="eye-icon-confirmPassword"></i>
                        </button>
                    </div>
                </div>

                        <div class="mb-3">
                            <label for="phoneNumber" class="form-label">Phone Number</label>
                            <input type="tel" name="phoneNumber" class="form-control" id="phoneNumber" placeholder="Enter your phone number">
                        </div>

                        <div class="mb-3">
                            <label for="email" class="form-label">Email (optional)</label>
                            <input type="email" name="email" class="form-control" id="email" placeholder="Enter your email">
                        </div>
                        <input type="hidden" name="reg_user" value="1">
                        <div class="mb-3 text-center">
                            <button type="submit" class="btn btn-primary btn-block">Register</button>
                        </div>
                    </form>
                </div>
                <div class="card-footer text-center">
                    <p>Already have an account? <a href="login.php">Login</a></p>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-MCzAd1o6DM3Z+qx5OTSNlqL3Yx81+yZhA5YYZtZ9vYUEzMy+utTteGrFQj8Hmlto" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.min.js" integrity="sha384-dZlRRXKnQFlw2z3BoNbG5cf5xWiEIABCsMBddBIc6XnEJSYHdiunVGsKsoxCIz9F" crossorigin="anonymous"></script>
<script src="script.js"></script>
    
</body>
</html>