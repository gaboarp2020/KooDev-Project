<?php 
    include ('../Controllers/server.php');

    if (!isset($_SESSION['username'])) {
        $_SESSION['msg'] = "You must log in first";
        header('location: ../index.php');
    }
    if (isset($_GET['logout'])) {
        session_destroy();
        unset($_SESSION['username']);
        header("location: ../index.php");
    }
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
    <title>Home</title>
</head>

<body>

    <header>
        <div class="header">
            <img class="logo" src="../Images/logo.png" alt="Logo">
            <h1>KooDev <span>Developers & Consulting</span></h1>
        </div>
        <nav>
            <!-- logged in user information -->
            <?php  if (isset($_SESSION['username'])) : ?>
                <p>Bienvenido <strong><?php echo $_SESSION['username']; ?></strong>(user)</p>
                <p> <a href="../index.php?logout='1'" style="color: red;">Cerrar sesión</a> </p>
            <?php endif ?>
        </nav>
    </header>

    <main>
        <div class="main">

            
        </div>
    </main>

    <footer>
        <p>KooDev - Developers & Consulting &copy; 2018</p>
    </footer>

</body>

</html>