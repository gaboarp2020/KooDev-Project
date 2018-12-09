<?php

    if (isset($_POST['reg_product'])) {
        $foto = addSlashes(file_get_contents($_FILES['foto']['tmp_name']));
        $producto = $_POST['producto'];
        $descripcion = $_POST['descripcion'];
        $precio = $_POST['precio'];

        if (empty($foto)) { array_push($errors, "Inserte la dirección de la imagen"); }
        if (empty($producto)) { array_push($errors, "Ingrese nombre del producto"); }
        if (empty($descripcion)) { array_push($errors, "Ingrese una descripción del producto"); }
        if (empty($precio)) { array_push($errors, "Ingrese el precio del producto"); }

        

        if (count($errors) == 0) {

            $query = "INSERT INTO products(photo, name, descrption, price) VALUES ('$foto', '$producto', '$descripcion', '$precio')";
            $result = $db->query($query);

            if($result){
                $mensaje = "¡Se registro un nuevo producto!";
            } else {
                $mensaje = "¡Error al registrar el producto!";
            }
            echo "<script type='text/javascript'>alert('$mensaje');</script>";
        }
    }
    
?>