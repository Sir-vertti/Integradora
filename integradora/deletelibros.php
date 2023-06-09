<?php
    //Llamar el archivo php de configuracion 
    require_once("configuracion2.php");

    //crear una variable para identiicar el registro a eliminar, siempre se usara la llave primaria de la tabla
    $id = $_GET['id'];

    //Crear una variable para insertar el codigo sql que eliminara el registro
    $result= mysqli_query($mysqli, "DELETE FROM libros WHERE Idlibro=$id");

    header("Location:librosadmin.php");