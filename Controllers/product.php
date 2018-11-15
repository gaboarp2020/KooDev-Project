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
        echo '</article>';

        $result=mysqli_fetch_array($sth);
    }
    
?>