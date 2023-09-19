<?php
    require "../crud.class.php";
    $crud= new Crud();
    $crud -> createCategoria($_POST['nombre']);
?>