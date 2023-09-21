<div class="container">
    <div class="row">
        <div class="col">
            <h1>Crear Categoria</h1>
            <a href="./readCategoria" class="btn btn-info">Go back</a>
            <a href="./close" class="btn btn-danger">close</a>
            <div>
                <div class="mb-3">
                    <label for="nombre" class="form-label">Nombre de categoria</label>
                    <input type="text" class="form-control" id="nombre" aria-describedby="textHelp">
                    <div id="textHelp" class="form-text">aqui va el Nombre de la categoria.</div>
                </div>
                <button id="crear" class="btn btn-success">Agregar</button>
            </div>
        </div>
        
    </div>
</div>
<?php require "./app/controller/createCategoria.controller.php"; ?>