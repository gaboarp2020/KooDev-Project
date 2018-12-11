<?php
    //Conexión a la base de datos
    require('conexion.php');

    session_start();

    $username = "";
    $email    = "";
    $errors = array();

    // Registro de usuario
    include 'sigin.php';

    // Inicio de sesión
    include 'login.php';

    // Registro de producto
    include 'crear_producto.php';

    // Registro de sucursal
    include 'reg_sucursal.php';
?>