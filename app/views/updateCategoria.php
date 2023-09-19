<div class="container">
    <div class="row">
        <div class="col">
            <h1>Actualizar Categoria</h1>
            <a href="./home" class="btn btn-info">Go back</a>
            <div>
                <input type="text" hidden value="<?php echo $categoria['id']?>" id="id">
                <div class="mb-3">
                    <label for="nombre" class="form-label">Nombre</label>
                    <input type="text" class="form-control" id="nombre" aria-describedby="textHelp" value="<?php echo $categoria['nombre']?>">
                    <div id="textHelp" class="form-text">aqui va el Nombre.</div>
                </div>
                <button class="btn btn-warning" id="update">Actualizar</button>
            </div>
        </div>
        
    </div>
</div>
<?php require "./app/controller/updateCategoria.controller.php"; ?>