<?php
    $sql = "SELECT * FROM branch_offices";
    $sth = $db->query($sql);
    $result=mysqli_fetch_array($sth);
    for ($i=0; $i < $result; $i++) { 
        echo '<article class="branch_office">';
            echo "<p>";
            echo "Pais: ".$result['country'];
            echo "</p>";
            echo "<p>";
            echo "Estado: ".$result['state'];
            echo "</p>";
            echo "<p>";
            echo "Ciudad: ".$result['city'];
            echo "</p>";
            echo "<p>";
            echo "Dirección: ".$result['address'];
            echo "</p>";
            echo "<p>";
            echo "Teléfono: ".$result['phone'];
            echo "</p>";
            echo "<p>";
            echo "E-mail: ".$result['email'];
            echo "</p>";
        echo '</article>';

        $result=mysqli_fetch_array($sth);
    }
    
?>