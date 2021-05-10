<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8"> <!-- Formatação da escrita para aceitar acentos e letras BR -->
        <link rel="stylesheet" href="bootstrap/css/bootstrap.css"> <!-- Importando CSS do bootstrap -->
        <script src="bootstrap/js/bootstrap.js" type="text/javascript"></script> <!-- Importando JS do bootstrap -->
        <link rel="icon" href="#"> <!-- Favicon do site -->
        <title>Warehouse PHP</title> <!-- Titulo do site -->
    </head>
    <body>
        <mai>
            <div style="width: 30rem; margin-top: 3rem" class="container text-center border rounded">
                <!-- img src="#" -->
                <h4>Warehouse PHP</h4>
                
                <div class="dropdown-divider"></div>

                <form action="#" method="POST">
                    <div class="col-sm form-group">
                        <label>Username</label>
                        <input type="text" name="username" class="form-control" placeholder="Username" required>
                    </div>
                    <div class="col-sm form-group">
                        <label>Password</label>
                        <input type="password" name="password" class="form-control" placeholder="password" required>
                    </div>

                    <div class="pt-2">
                        <button type="submit" class="col-3 btn btn-success">LogIn</button>
                    </div>
                </form>

                <div class="dropdown-divider"></div>

                <a class="text-danger" href="#">I forgot my password</a> <br>
                <a class="text-danger" href="#">I don't have a registration</a>
            </div>
        </mai>
    </body>
</html>
