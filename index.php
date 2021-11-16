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

                <?php if(isset($_SESSION['errorLogin'])): ?>
                    <div class="border border-danger text-center rounded" h4 class="text-danger text-center">
                        <h4 class="text-danger">Incorrect username or password!</h4>
                    </div>
                <?php endif; unset($_SESSION['errorLogin']); ?>

                <div class="text-center">
                    <h4>Sign In</h4>
                </div>

                <form class="px-4 py-3" action="signin-post.php" method="POST">
                    <div  class="col-sm-9 form-group">
                        <label>Username</label>
                        <input type="text" class="form-control" name="username" placeholder="Your Username" required>
                    </div>
                    <div  class="col-sm-9 form-group">
                        <label>Password</label>
                        <input type="password" class="form-control" name="password_user" placeholder="Enter Your Password" required>
                    </div>
                    <div>
                        <button type="submit" class="col-4 mt-3 btn btn-success">Sign In</button>
                    </div>
                </form>

                <div class="dropdown-divider"></div>

                <a class="text-danger ml-3" href="#">Forgot password?</a>
                <h6>New to System ERP? <a class="text-success ml-3" href="signup.php">Create an account.</a></h6>
            </div>

            <footer class="card-footer fixed-bottom bg-dark border-top border-danger text-light">
                &copy; Copyright - System made by <a href="#" target="_blank" class="text-danger strong">Lucas Casagrande</a> 
            </footer>
        </main>
    </body>
</html>