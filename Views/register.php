
<?php
    include '../Controllers/server.php';
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="../Images/favicon.ico" type="image/x-icon">
    <link rel="icon" href="../Images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="../Styles/layout.css">
    <link rel="stylesheet" href="../Styles/font.css">
    <link rel="stylesheet" href="../Styles/main.css">
    <link rel="stylesheet" media="screen" href="https://fontlibrary.org/face/bebas" type="text/css">
    <title>Registro</title>
</head>

<body>

    <header>
        <div class="header">
            <img class="logo" src="../Images/logo.png" alt="Logo">
            <h1>KooDev <span>Developers & Consulting</span></h1>
        </div>
    </header>

    <main>
        <div class="main">
            <form action="register.php" method="POST">
                <?php include('../Controllers/errors.php'); ?>
                <div class="form">
                    <h1>Registro</h1>
                    <hr>

                    <h2>Cuenta</h2>
                    <label>Username</label>
                    <input type="text" name="username" value="">
                    <label>Email</label><br>
                    <input type="email" name="email" value="">
                    <label>Password</label>
                    <input type="password" name="password_1">
                    <label>Confirm password</label>
                    <input type="password" name="password_2">

                    <h2>Datos Personales</h2>
                    <label>Nombre</label>
                    <input type="text" name="name" value="">
                    <label>Apellido</label>
                    <input type="text" name="last_name" value="">

                    <div class="register-buttons">
                        <button type="submit" class="primary-btn" name="reg_user">Registrarse</button>
                        <button class="secundary-btn" type="reset">Cancelar</button>
                        <p>¿Ya tienes cuenta?  <a href="../index.php">Iniciar sesión</a></p>
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
