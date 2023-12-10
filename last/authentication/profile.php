<?php
session_start();

// Debugging statement
// var_dump($_SESSION["user"]);

// Initialize user variable
$user = null;

// Check if the user is logged in
if (isset($_SESSION["user"])) {
    // Fetch user information from the database based on the logged-in user
    require_once "database.php";
    $username = $_SESSION["user"];
    $sql = "SELECT * FROM users WHERE username = '$username'";
    $result = mysqli_query($conn, $sql);

    // Check if the user exists
    if ($result) {
        $user = mysqli_fetch_array($result, MYSQLI_ASSOC);
    } else {
        // Handle database error
        die("Database error: " . mysqli_error($conn));
    }
}

// Debugging statement
// echo "After fetching user data";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <title>Profile Dashboard</title>
</head>

<body>

    <div class="container mt-5">
        <?php if ($user) : ?>
            <!-- User is logged in, display profile information -->
            <div class="row">
                <!-- Sidebar -->
                <div class="col-md-3">
                    <div class="card">
                        <div class="card-body text-center">
                            <i class="fab fa-github fa-5x mb-3"></i>
                            <!-- Display the logged-in user's name -->
                            <h4><?php echo $user["username"]; ?></h4>
                            <p><?php echo $user["email"]; ?></p>
                        </div>
                    </div>
                </div>

                <!-- Main Content -->
                <div class="col-md-9">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h1>Welcome to Your Dashboard</h1>
                        </button>
                    </div>
                    <p>This is your profile dashboard where you can manage your laundry.</p>
                    <a href="logout.php" class="btn btn-warning">Logout</a>
                </div>
            </div>
        <?php else : ?>
            <!-- User is not logged in, display login form or redirect to login page -->
            <h2>Login Required</h2>
            <p>Please log in to view your profile dashboard.</p>
            <a href="login.php" class="btn btn-primary">Login</a>
        <?php endif; ?>
    </div>

    <div class="container mt-5">
        <h2>Laundry Order Form</h2>
        <form action="process_order.php" method="post">
            <!-- Category Dropdown -->
            <div class="mb-3">
                <label for="category" class="form-label">Select Category</label>
                <select class="form-select" name="category">
                    <option value="casual">Casual Laundry</option>
                    <option value="formal">Formals Laundry</option>
                    <option value="express">Delicates Laundry</option>
                </select>
            </div>

            <!-- User Information Fields -->
            <div class="mb-3">
                <label for="name" class="form-label">Full Name</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Email Address</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>

            <div class="mb-3">
                <label for="address" class="form-label">Delivery Address</label>
                <textarea class="form-control" id="address" name="address" rows="3" required></textarea>
            </div>

            <!-- Total Display -->
            <div class="mb-3">
                <label for="total" class="form-label">Total Cost</label>
                <?php
                // Check if the category is set and calculate the total
                $categoryCosts = [
                    'casual' => 75,
                    'formal' => 90,
                    'express' => 100
                ];
                $selectedCategory = isset($_POST['category']) ? $_POST['category'] : null;
                $total = isset($categoryCosts[$selectedCategory]) ? $categoryCosts[$selectedCategory] : 0;
                ?>
                <input type="text" class="form-control" value="$<?php echo $total; ?>" readonly>
            </div>

            <button type="submit" class="btn btn-primary">Submit Order</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
    <script src="script.js"></script>

</body>

</html>
