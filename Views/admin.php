<?php 
    include ('../Controllers/server.php');

    if (!isset($_SESSION['username'])) {
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
    <link rel="shortcut icon" href="../Images/favicon.png" type="image/x-icon">
    <link rel="icon" href="../Images/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="../Styles/layout.css">
    <link rel="stylesheet" href="../Styles/font.css">
    <link rel="stylesheet" href="../Styles/main.css">
    <link rel="stylesheet" media="screen" href="https://fontlibrary.org/face/bebas" type="text/css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <title>Home</title>
</head>

<body>

    <header>
        <div class="header">
            <img class="logo" src="../Images/logo.png" alt="Logo">
            <h1>KooDev <span>Developers & Consulting</span></h1>
            <div class="user-info">
                <!-- logged in user information -->
                <?php  if (isset($_SESSION['username'])) : ?>
                    <p>Bienvenido <strong><?php echo $_SESSION['username']; ?></strong> (admin)</p>
                    <p> <a href="../Controllers/logout.php" style="color: red;">Cerrar sesión</a> </p>
                <?php endif ?>
            </div>
        </div>
        <nav>
            <ul class="menu">
                <a href="#home"><li>Home</li></a>
                <a href="#productos"><li>Productos</li></a>
                <a href="#sucursales"><li>Sucursales</li></a>
                <a href="#contacto"><li>Contacto</li></a>
            </ul>     
        </nav>
    </header>

    <main>
        <section id="home">
            <p>Plataformas Web <br><span>Desarrolladas a tu medida</span> <br> con tecnologia puntera, lideres en el mercado</p>
        </section>
        <section id="productos">
            <h1>Productos</h1>
            
            <div class="product-edit">
                <span id="addProduct">
                    <i class="fas fa-plus-circle"></i> Crear producto
                </span>
                <form action="admin.php" method="POST" enctype="multipart/form-data">
                    <?php include('../Controllers/errors.php'); ?>
                    <label>Foto</label>
                    <input type="file" name="foto" value="" required>
                    <label>Producto</label>
                    <input type="text" name="producto" value="" required>
                    <label>Descripción</label>
                    <textarea type="text" name="descripcion" required></textarea>
                    <label>Precio</label>
                    <input type="text" name="precio" required>

                    <div class="register-buttons">
                        <button type="submit" class="primary-btn" name="reg_product">Registrar</button>
                        <button class="secundary-btn" type="reset">Cancelar</button>
                    </div>
                </form>
            </div>

            <div class="area-productos">
                <br>
                <?php
                    $tipoUsuario = "admin";
                    include ('../Controllers/product.php');
                ?>
            </div>
        </section>
        <section id="sucursales">
            <div class="container">
                <h1>Sucursales</h1>
                <form action="register.php" method="POST">
                    <?php include('../Controllers/errors.php'); ?>
                    <div class="form">
                        <h2>Registro</h2>
                        <h3>Sucursal</h3>
                        <label>Nombre</label>
                        <input type="text" name="name" value="" required>
                        <label>Descripción</label>
                        <textarea type="text" name="descripcion" required></textarea>
                        <label>Teléfono</label>
                        <input type="text" name="phone" value="" required>
                        

                        <div class="register-buttons">
                            <button type="submit" class="primary-btn" name="reg_user">Registrarse</button>
                            <button class="secundary-btn" type="reset">Cancelar</button>
                        </div>
                    </div>
                </form>
            </div>
        </section>
        <section id="contacto">
            <h1>Contacto</h1>
            <div class="area-sucursales">
                <br>
                <?php
                    include ('../Controllers/branch_office.php');
                ?>
            </div>
        </section>
    </main>

    <footer>
        <p>KooDev - Developers & Consulting &copy; 2018</p>
    </footer>

    <script type="text/javascript " src="../Scripts/script.js "></script>
</body>

</html>