<div class="container mt-5">
    <div class="row">
        <div class="col">
            <a href="./createCategoria" class="btn btn-outline-success">Agregar Categoria</a>
            <a href="./read" class="btn btn-info">Go back</a>
            <a href="./close" class="btn btn-danger">close</a>
            <hr>
            <table class="table table-primary table-striped table-hover table-bordered table-sm table-responsive-sm">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Actualizar</th>
                        <th>Eliminar</th>
                    </tr>
                
                </thead>
                <tbody>
                <?php
                    foreach($categorias as $categoria):
                ?>
                <tr>
                    <td>
                        <?php echo $categoria['nombre']; ?>
                    </td>
                    <td>
                        <a href="./updateCategoria&id=<?php echo $categoria["id"]?>" class="btn btn-outline-warning">Actualizar</a>
                    </td>
                    <td>
                        <button class="btn btn-outline-danger" onclick="borrar(<?php echo $categoria['id']?>)">Eliminar</button>
                    </td>
                </tr>
                <?php
                    endforeach;
                ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?php require "./app/controller/deleteCategoria.controller.php"; ?>