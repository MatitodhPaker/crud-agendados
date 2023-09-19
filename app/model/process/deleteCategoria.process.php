<?php
require "../crud.class.php";
    $crud= new Crud();
    $crud -> deleteCategoria(
        $_POST['id']
    );
?>