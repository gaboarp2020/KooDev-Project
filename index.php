<?php 
    include 'Controllers/server.php';
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="Images/favicon.ico" type="image/x-icon">
    <link rel="icon" href="Images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="Styles/layout.css">
    <link rel="stylesheet" href="Styles/font.css">
    <link rel="stylesheet" href="Styles/main.css">
    <link rel="stylesheet" media="screen" href="https://fontlibrary.org/face/bebas" type="text/css">
    <title>Login</title>
</head>

<body>

    <header>
        <div class="header">
            <img class="logo" src="Images/logo.png" alt="Logo">
            <h1>KooDev <span>Developers & Consulting</span></h1>
            <div class="user-info"></div>
        </div>
    </header>

    <main>
        <div class="main">
            <form action="index.php" method="POST">
                <?php include('Controllers/errors.php'); ?>
                <div class="form">
                    <h1>Login</h1>
                    <hr>
                    <label id="uname-label" for="username">Usuario</label>
                    <input name="username" id="uname-input" type="text" required>

                    <label id="pass-label" for="password">Clave</label>
                    <input name="password" id="pass-input" type="password" required>

                    <div class="login-buttons">
                        <button class="primary-btn" type="submit" name="login_user">Iniciar Sesión</button>
                        <button class="secundary-btn" type="reset">Cancelar</button>
                        <p>¿No tienes cuenta?  <a href="Views/register.php">Registrarse</a></p>
                    </div>
                </div>
            </form>
        </div>
    </main>

    <footer>
        <p>KooDev - Developers & Consulting &copy; 2018</p>
    </footer>

</body>

</html>