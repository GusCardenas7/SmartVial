<?php
    //banners_elimina.php
    require "funciones/conecta.php";
    $con = conecta();

    //Recibe variables
    $id = $_REQUEST['id'];

    //Solo nombre SELECT id, nombre FROM banners ....
 
    $sql = "UPDATE banners 
            SET eliminado = 1
            WHERE id = $id";
    $res = $con->query($sql);

    echo $res;
?>