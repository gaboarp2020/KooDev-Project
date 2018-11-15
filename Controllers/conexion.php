<?php
   $db = mysqli_connect('localhost', 'root', '', 'koodev_db');
   $db->set_charset("utf8");

   if(mysqli_connect_errno()){
        echo 'Conexion Fallida : ', mysqli_connect_error();
        exit();
    }
?>