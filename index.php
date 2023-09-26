<!DOCTYPE html>
<html lang="es">
<head>
    <?php
        require './app/views/includes/metatags.php';
    ?>
</head>
<body>
    <?php
        require "./app/model/crud.class.php";
        session_start();
        $crud=new Crud();
        if (isset($_GET["vista"])) {
            switch ($_GET["vista"]) {
                case 'home':
                    include './app/views/home.php';
                    break;
                case 'create':
                    if (isset($_SESSION['id_session'])) {
                        $categorias=$crud->readCategoria();
                        include './app/views/create.php';
                    }else{
                        header("location: ./home");
                    }
                    break;
                case 'read':
                    if (isset($_SESSION['id_session'])) {
                        $contactos=$crud->read($_SESSION['id_session']);
                        include './app/views/read.php';
                    }else{
                        header("location: ./home");
                    }
                    break;
                case 'readCategoria':
                    if (isset($_SESSION['id_session'])) {
                        $categorias=$crud->readCategoria();
                    include './app/views/readCategoria.php';
                    }else{
                        header("location: ./home");
                    }
                    break;
                case 'update':
                    if (isset($_SESSION['id_session'])) {
                        $contacto=$crud->show($_GET["id"]);
                        include './app/views/update.php';
                    }else{
                        header("location: ./home");
                    }
                    break;
                case 'updateCategoria':
                    if (isset($_SESSION['id_session'])) {
                        $categoria=$crud->showCategoria($_GET["id"]);
                        include './app/views/updateCategoria.php';
                    }else{
                        header("location: ./home");
                    }
                    break;
                case 'createCategoria':
                    if (isset($_SESSION['id_session'])) {
                        include './app/views/createCategoria.php';
                    }else{
                        header("location: ./home");
                    }
                    break;
                case 'close':
                    include './app/views/cerrarsession.php';
                    break;
                default:
                    header("location: ./read");
                    break;
            }
        }else{
            header("location: ./home");
        }
    ?>
    <?php
        require './app/views/includes/scripts.php';
    ?>
</body>
</html>