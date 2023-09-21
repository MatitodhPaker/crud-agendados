<?php
    $crudU= new Crud();
    $categorias=$crudU->readCategoria();
?>
<div class="container">
    <div class="row">
        <div class="col">
            <h1>Actualizar Contacto</h1>
            <a href="./read" class="btn btn-info">Go back</a>
            <a href="./close" class="btn btn-danger">close</a>
            <div>
                <input type="text" hidden value="<?php echo $contacto['id']?>" id="id">
                <div class="mb-3">
                    <label for="nombre" class="form-label">Nombre</label>
                    <input type="text" class="form-control" id="nombre" aria-describedby="textHelp" value="<?php echo $contacto['nombre']?>">
                    <div id="textHelp" class="form-text">aqui va el Nombre.</div>
                </div>
                <div class="mb-3">
                    <label for="telefono" class="form-label">Telefono</label>
                    <input type="text" class="form-control" id="telefono" aria-describedby="textHelp" value="<?php echo $contacto['telefono'];?>">
                    <div id="textHelp" class="form-text">aqui va el telefono.</div>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" aria-describedby="emailHelp" value="<?php echo $contacto['email'];?>">
                    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                </div>
                <select id="categoria" class="form-select">
                    <option value="<?php echo $contacto['idCategoria']?>"><?php echo $contacto['nombreCategoria']?></option>
                    <?php
                        foreach($categorias as $categoria):
                            if ($contacto['idCategoria']!=$categoria['id']):
                    ?>
                                <option value="<?php echo $categoria['id']?>"><?php echo $categoria['nombre']?></option>
                    <?php
                            endif;
                        endforeach;
                    ?>
                </select>
                <br>
                <button class="btn btn-warning" id="update">Actualizar</button>
            </div>
        </div>
        
    </div>
</div>
<?php require "./app/controller/update.controller.php"; ?>