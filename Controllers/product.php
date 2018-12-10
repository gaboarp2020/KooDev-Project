<?php
    $sql = "SELECT * FROM products";
    $sth = $db->query($sql);
    $result=mysqli_fetch_array($sth);

    for ($i=0; $i < $result; $i++) { 
        
        $id = $result['pk_product'];
        echo '<article class="product-card">';
        echo '<img src="data:image/jpeg;base64,'.base64_encode( $result['photo'] ).'"/>';
        echo "<h2>";
        echo $result['name'];
        echo "</h2>";
        echo "<p>";
        echo $result['descrption'];
        echo "</p>";
        echo "<p>";
        echo "Precio: desde ".$result['price']."$";
        echo "</p>";

        echo '<div class="product-mod">';
        echo '<form action="../Controllers/modificar_producto.php" method="POST" enctype="multipart/form-data">';
        include('../Controllers/errors.php');
        echo '<label>Foto</label>';
        echo '<input type="file" name="foto" value="" required>';
        echo '<label>Producto</label>';
        echo '<input type="text" name="producto" value="" required>';
        echo '<label>Descripción</label>';
        echo '<textarea type="text" name="descripcion" required></textarea>';
        echo '<label>Precio</label>';
        echo '<input type="text" name="precio" required>';
        echo '<div class="register-buttons">';
        echo '<button type="submit" class="primary-btn" name="mod_product" value="' . $id . '">Registrar</button>';
        echo '<button class="secundary-btn" type="reset">Cancelar</button>';
        echo '</div>';
        echo '</form>';
        echo '</div>';

        if ($tipoUsuario == "admin") {
            $modifyMsg = "¿Quiere modificar el producto?";
            $deleteMsg = 'Are you sure to delete?';
            echo '<span>Edit</span>';
            //href="../Controllers/modificar_producto.php?action=modify&id=' . $id . '" onclick="return confirm('.$modifyMsg.')"
            echo '<a class="deleteProduct" href="../Controllers/borrar_producto.php?action=delete&id=' . $id . '" onclick="return confirm('.$deleteMsg.')">Delete</a>';
    
        }
        echo '</article>';

        $result=mysqli_fetch_array($sth);
    }

    

?>