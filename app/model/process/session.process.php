<?php
    require "../crud.class.php";
    $crud= new Crud();
    $login=$crud->login([
        "nombre"=>$_POST['nombre'],
        "pass"=>$_POST['pass']
    ]);
?>