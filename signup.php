<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <script type="text/javascript" src="bootstrap/js/bootstrap.js"></script>
        <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
        <link rel="icon" href="img/favicon1.png">
        <title>System ERP</title>
    </head>
    <body>
        <main>
            <div style="width: 30rem; margin-top: 3rem" class="container border border-danger bg-dark rounded text-light pb-2">
                <img src="img/CompanyLogo1.png" class="w-100 m-sm-1" alt="Company Logo">
                <div class="dropdown-divider"></div>

                <div class="text-center">
                    <h4>Sign Up</h4>
                </div>

                <form class="px-4 py-3" action="#" method="POST">
                    <div  class="col-sm-9 form-group">
                        <label>Enter your Username</label>
                        <input type="text" class="form-control" name="username" placeholder="Enter your Username" required>
                    </div>
                    <div  class="col-sm-9 form-group">
                        <label>Enter your Password</label>
                        <input type="password" class="form-control" name="password" placeholder="Enter Your Password" required>
                    </div>
                    <div  class="col-sm-9 form-group">
                        <label>Fisrt Name</label>
                        <input type="text" class="form-control" name="first_name" placeholder="Enter your first name" required>
                    </div>
                    <div  class="col-sm-9 form-group">
                        <label>Last Name</label>
                        <input type="text" class="form-control" name="last_name" placeholder="Enter your last name" required>
                    </div>
                    <div>
                        <button type="submit" class="col-5 mt-3 btn btn-success">Create account</button>
                    </div>
                </form>

                <div class="dropdown-divider"></div>

                <h6>Already have an account? <a class="text-success ml-3" href="index.php">Sign In.</a></h6>
            </div>

            <footer class="card-footer fixed-bottom bg-dark border-top border-danger text-light">
                &copy; Copyright - System made by <a href="#" target="_blank" class="text-danger strong">Lucas Casagrande</a> 
            </footer>
        </main>
    </body>
</html>