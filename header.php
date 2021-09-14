<?php
require_once 'check-login.php';
$id_user = $_SESSION['id_user'];
$username = $_SESSION['username'];
$first_name = $_SESSION['first_name'];
$last_name = $_SESSION['last_name'];
$fullName = $first_name . ' ' . $last_name;
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
        <link rel="icon" href="img/favicon1.png">
        <script type="text/javascript" src="bootstrap/js/bootstrap.js"></script>
        <title>System ERP</title>
    </head>
    <body>
        <main>
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark border-bottom border-danger">
                <div class="container-fluid">
                    <a class="navbar-brand" href="dashboard.php"><img src="img/CompanyLogo1.png" alt="Company Logo"></a>
                    <div class="collapse navbar-collapse">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="#">Inventory</a>
                            </li>
                        </ul>
                    </div>
                    <div class="dropdown">
                        <button class="btn btn-danger dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="img/profile_picture.png" alt="Profile Picture">
                            <?php echo $fullName ?>
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                            <li><a class="dropdown-item" href="#">Edit User</a></li>
                            <li><a class="dropdown-item" href="#">Change Password</a></li>
                            <hr class="dropdown-divider">
                            <li><a class="dropdown-item bg-danger" href="logout.php">Log Out</a></li>
                        </ul>
                    </div>
                </div>
            </nav>