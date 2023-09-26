<div class="container mt-5 bg-secondary text-center py-5 bg-gradient">
    <div class="row">
        <div class="col">
            <div>
                <h1 class="display-1">CRUD PHP</h1>
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#nuevoUsuarioModal">Registrate</button>
            </div>
            <p class="fs-4 text-light">Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia aliquam cupiditate enim omnis labore ipsam earum, atque, commodi libero ea maxime exercitationem minima! Aliquid natus nisi assumenda vero ipsa voluptates!</p>
            <button data-bs-toggle="modal" data-bs-target="#inicioModal" type="button" class="btn btn-success">Acceder al CRUD</button>
        </div>
    </div>
</div>
<?php
    require "./app/controller/session.controller.php";
    require "./app/views/registro.php";
    require "./app/controller/createUser.controller.php";
    require "./app/views/login.php"
?>