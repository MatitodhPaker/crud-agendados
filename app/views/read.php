<div class="container mt-5">
    <div class="row">
        <div class="col">
            <a href="./create" class="btn btn-outline-success">Agregar Contacto</a>
            <a href="./readCategoria" class="btn btn-outline-dark">Categorias</a>
            <a href="./home" class="btn btn-info">Go back</a>
            <hr>
            <table class="table table-primary table-striped table-hover table-bordered table-sm table-responsive-sm">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Telefono</th>
                        <th>Categoria</th>
                        <th>Email</th>
                        <th>Actualizar</th>
                        <th>Eliminar</th>
                    </tr>
                
                </thead>
                <tbody>
                <?php
                    foreach($contactos as $contacto):
                ?>
                <tr>
                    <td>
                        <?php echo $contacto['nombre']; ?>
                    </td>
                    <td>
                        <?php echo $contacto['telefono']; ?>
                    </td>
                    <td>
                        <?php echo $contacto['nombreCategoria']; ?>
                    </td>
                    <td>
                        <?php echo $contacto['email'];?>
                    </td>
                    <td>
                        <a href="./update&id=<?php echo $contacto["id"]?>" class="btn btn-outline-warning">Actualizar</a>
                    </td>
                    <td>
                        <button class="btn btn-outline-danger" onclick="borrar(<?php echo $contacto['id']?>)">Eliminar</button>
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
<?php require "./app/controller/delete.controller.php"; ?>