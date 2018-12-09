<?php

    if(($_GET['action'] == 'delete') && isset($_GET['id'])) {

        $sql = "DELETE FROM products WHERE pk_product = '".$_GET['id']."'";
        $results = mysqli_query($db, $sql);
    
        if($results) {

            $mensaje ="¡El producto fué eliminado!";
        
        }
        $mensaje ="¡Error al eliminar el producto!".$_GET['action'].$_GET['id'];
        echo "<script type='text/javascript'>alert('$mensaje');</script>";
    }
?>