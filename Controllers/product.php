<?php
    $sql = "SELECT * FROM products";
    $sth = $db->query($sql);
    $result=mysqli_fetch_array($sth);
    for ($i=0; $i < $result; $i++) { 
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
            echo "<p>";
            echo $result['pk_product'];
            echo "</p>";

            if ($tipoUsuario == "admin") {
                $id = $result['pk_product'];
                echo "<a href='#'>Edit</a>";
                // echo '<a id="deleteProduct" href="../Controllers/borrar_producto.php?delid=$id">Delete</a>';
                if ($id==1){
                    echo '<a id="deleteProduct" href="admin.php?action=delete&id=1">Delete</a>';
                } else if ($id==2){
                    echo '<a id="deleteProduct" href="admin.php?action=delete&id=2">Delete</a>';
                } else if ($id==3){
                    echo '<a id="deleteProduct" href="admin.php?action=delete&id=3">Delete</a>';
                } else if ($id==4){
                    echo '<a id="deleteProduct" href="admin.php?action=delete&id=4">Delete</a>';
                } else if ($id==5){
                    echo '<a id="deleteProduct" href="admin.php?action=delete&id=5">Delete</a>';
                }
                

                
        echo '</article>';

        $result=mysqli_fetch_array($sth);
        
    }
}

    
?>