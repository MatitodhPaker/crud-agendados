<?php
    require "../crud.class.php";
    $crud= new Crud();
    $crud -> createUser([
        "nombre"=>$_POST['nombre'],
        "pass"=>$_POST['pass']
    ]);
?>