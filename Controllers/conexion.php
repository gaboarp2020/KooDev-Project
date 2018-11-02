<?php
   $db = mysqli_connect('localhost', 'root', '', 'koodev_db');

   if(mysqli_connect_errno()){
        echo 'Conexion Fallida : ', mysqli_connect_error();
        exit();
    }
?>