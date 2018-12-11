<?php

    if (isset($_POST['reg_sucursal'])) {
        $nombre = $_POST['nombre'];
        $descripcion = $_POST['descripcion'];
        $telefono = $_POST['telefono'];
        $latitud = $_POST['latitud'];
        $longitud = $_POST['longitud'];
        

        if (count($errors) == 0) {

            $query = "INSERT INTO sucursales(nombre, descripcion, telefono, latitud, longitud) VALUES ('$nombre', '$descripcion', '$telefono', '$latitud', '$longitud')";
            $result = $db->query($query);

            if($result){
                $mensaje = "¡Se registro una nueva sucursal!";
            } else {
                $mensaje = "¡Error al registrar la sucursal!";
            }
            echo "<script type='text/javascript'>alert('$mensaje');</script>";
        }
    }
?>