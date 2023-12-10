<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <!-- Font Awesome Cdn link -->
    <link rel=" stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
            color: black;
            font-family: sans-serif;
            font-size: 15px;
            text-align: center;
        }

        table,
        th,
        td {
            border: 1px solid #ddd;
        }

        th,
        td {
            padding: 8px;
            text-align: left;
        }

        td {
            text-decoration: underline;
            font-size: 15px;
        }

        th {
            background-color: #f2f2f2;
            color: #333;
            font-size: 15px;
        }
    </style>
</head>

<body>
    <div class="sidebar">
        <div class="logo"></div>
        <ul class="menu">
            <li class="active">
                <a href="#">
                    <i class="fas fa-gauge-high"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            <li>
                <a href="user.php">
                    <i class="fas fa-users"></i>
                    <span>User Accounts</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="fas fa-chart-line"></i>
                    <span>Statistics</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="fas fa-gears"></i>
                    <span>Careers</span>
                </a>
            </li>
            <li class="logout">
                <a href="#">
                    <i class="fas fa-right-from-bracket"></i>
                    <span>Logout</span>
                </a>
            </li>
        </ul>
    </div>

    <div class="main--content">
        <div class="header--wrapper">
            <div class="header--title">
                <span>Laundry</span>
                <h2>Order Dashboard</h2>
            </div>
            <div class="user--info">
                <a class="btn btn-primary" href="create.php" role="button">New Laundry</a>
                <div class="search--box">
                    <i class="fas fa-magnifying-glass"></i>
                    <input type="text" placeholder="Search">
                </div>
                <img src="admin.jpg">
            </div>
        </div>
        <div class="table-container">
            <table>
                <thead>
                    <tr>
                        <th>id</th>
                        <th>fullname</th>
                        <th>email</th>
                        <th>address</th>
                        <th>total</th>
                        <th>status</th>
                        <th>Action</th>
                    </tr>
                </thead>

                <tbody>
                    <?php
                    $servername = "localhost";
                    $username = "root";
                    $password = "";
                    $database = "login_register";

                    $connection = new mysqli($servername, $username, $password, $database);
                    if ($conn->connect_error) {
                        die("connection failed:" . $connection->connect_error);
                    }

                    $sql = "SELECT * FROM orders";
                    $result = $connection->query($sql);

                    if (!$result) {
                        die("invalid query: " . $connection->error);
                    }

                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>
                            <td>" . $row["id"] . "</td>
                            <td>" . $row["fullname"] . "</td>
                            <td>" . $row["email"] . "</td>
                            <td>" . $row["address"] . "</td>
                            <td>" . $row["total"] . "</td>
                            <td>" . $row["status"] . "</td>
                            <td>
                                <a class='btn btn-primary btn-sm' href='update.php?id=" . $row["id"] . "'>Update</a>
                                <a class='btn btn-warning btn-sm' href='delete.php?id=" . $row["id"] . "'>Delete</a>
                            </td>
                        </tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>