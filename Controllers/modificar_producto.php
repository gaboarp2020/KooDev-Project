<?php

    if (isset($_POST['mod_product'])) {
        $foto = addSlashes(file_get_contents($_FILES['foto']['tmp_name']));
        $producto = $_POST['producto'];
        $descripcion = $_POST['descripcion'];
        $precio = $_POST['precio'];

        if (empty($foto)) { array_push($errors, "Inserte la dirección de la imagen"); }
        if (empty($producto)) { array_push($errors, "Ingrese nombre del producto"); }
        if (empty($descripcion)) { array_push($errors, "Ingrese una descripción del producto"); }
        if (empty($precio)) { array_push($errors, "Ingrese el precio del producto"); }

        if (count($errors) == 0) {

            require('conexion.php');

            $id = $_POST['mod_product'];
            //INSERT INTO products(photo, name, descrption, price) VALUES ('$foto', '$producto', '$descripcion', '$precio')
            $sql = 
                "UPDATE products
                SET photo = '$foto', name = '$producto', descrption = '$descripcion', price = '$precio'
                WHERE pk_product = '".$id."'";

            $results = mysqli_query($db, $sql);
        
            if($results) {

                $mensaje ="¡El producto fué eliminado!";
            
            } else {
                $mensaje ="¡Error al eliminar el producto!".$_GET['action'].$_GET['id'];
            }
            echo "<script type='text/javascript'>alert('$mensaje');</script>";
            header('location: ../Views/admin.php');
        }
    }
?>