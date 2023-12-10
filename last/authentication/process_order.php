<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve form data
    $category = $_POST['category'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $address = $_POST['address'];

    // Define category costs
    $categoryCosts = [
        'casual' => 75,
        'formal' => 90,
        'express' => 100
    ];

    // Calculate total cost based on the selected category
    $total = $categoryCosts[$category] ?? 0;

    $paymentLink = '';

    if ($total == 75) {
        $paymentLink = 'https://pm.link/org-6YNJHLcwjsx3ozuXnaHAzvBK/test/XdvumFN';
    } elseif ($total == 100) {
        $paymentLink = 'https://pm.link/org-6YNJHLcwjsx3ozuXnaHAzvBK/test/tSoUQdC';
    } elseif ($total == 90) {
        $paymentLink = 'https://pm.link/org-6YNJHLcwjsx3ozuXnaHAzvBK/test/nh6FXup';
    } else {
        // Handle the case where the total doesn't match any predefined values
        // You might want to set a default link or handle this case based on your requirements
        $paymentLink = 'https://pm.link/default-link';
    }

    // Generate a styled HTML receipt with video background
    $receipt = "
        <!DOCTYPE html>
        <html lang='en'>
        <head>
            <meta charset='UTF-8'>
            <meta name='viewport' content='width=device-width, initial-scale=1.0'>
            <title>Laundry Order Receipt</title>
            <style>
                body {
                    display: flex;
                    align-items: center;
                    justify-content: center;
                    height: 100vh;
                    margin: 0;
                    overflow: hidden; /* Hide scroll bars */
                }
                video {
                    position: fixed;
                    top: 0;
                    left: 0;
                    min-width: 100%;
                    min-height: 100%;
                    z-index: -1; /* Place the video behind other elements */
                    object-fit: cover; /* Ensure the video covers the entire screen */
                    animation: gradientAnimation 10s infinite;
                }
                @keyframes gradientAnimation {
                    0% {
                        background-position: 0% 50%;
                    }
                    50% {
                        background-position: 100% 50%;
                    }
                    100% {
                        background-position: 0% 50%;
                    }
                }
                .receipt-container {
                    width: 50%; /* Adjust the width as needed */
                    max-width: 400px; /* Set a maximum width to prevent it from being too wide */
                    margin: 0 auto; /* Center the box horizontally */
                    padding: 20px;
                    background: transparent;
                    box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
                    border: 10px solid transparent;
                    border-image: linear-gradient(to right, violet, indigo, blue, green, yellow, orange, red) 1;
                    border-image-slice: 1;
                    z-index: 1;
                    font-size: 18px;
                }
                .receipt-container h2, p{
                    font-size: 24px;
                    text-decoration: none;
                }
                .button-container {
                    margin-top: 20px;
                    display: flex;
                    justify-content: space-between;
                    text-color: white;
                }
                .logout-button, .profile-button {
                    width: 48%;
                    font-weight: 800;
                    color: white;
                }
            </style>
        </head>
        <body>
         <video autoplay loop muted>
                <source src='http://localhost/lastry/img/water1.mp4' type='video/mp4'>
                Your browser does not support the video tag.
            </video>

            <div class='receipt-container'>
                <h2>Laundry Order Receipt</h2>
                <p><strong>Name:</strong> $name</p>
                <p><strong>Email:</strong> $email</p>
                <p><strong>Delivery Address:</strong> $address</p>
                <p><strong>Total Cost:</strong> $$total</p>
                <div class='button-container'>
                    <a href='logout.php' class='btn btn-warning logout-button'>Logout</a>
                    <a href='$paymentLink' class='btn btn-success proceed-to-payment'>Proceed to Payment</a>
                    <a href='profile.php' class='btn btn-primary profile-button'>Pay Later</a>
                </div>
            </div>
        </body>
        </html>
    ";

    // Respond with the styled receipt
    echo $receipt;

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "login_register"; // Change to your actual database name

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Escape user inputs to prevent SQL injection
    $name = $conn->real_escape_string($name);
    $email = $conn->real_escape_string($email);
    $address = $conn->real_escape_string($address);
    $category = $conn->real_escape_string($category);
    $total = $conn->real_escape_string($total);

    // Insert order details into the database
    $sql = "INSERT INTO orders (fullname, email, address, total) VALUES ('$name', '$email', '$address', '$total')";

    if ($conn->query($sql) === TRUE) {
        // Order details inserted successfully
        // You can include additional logic or redirects here
    } else {
        // Handle database error
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close database connection
    $conn->close();

} else {
    // Redirect or handle invalid access
    header('Location: index.php');
    exit();
}
