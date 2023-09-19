<div class="container">
    <div class="row">
        <div class="col">
            <h1>Crear Contacto</h1>
            <a href="./read" class="btn btn-info">Go back</a>
            <div>
                <div class="mb-3">
                    <label for="nombre" class="form-label">Nombre</label>
                    <input type="text" class="form-control" id="nombre" aria-describedby="textHelp">
                    <div id="textHelp" class="form-text">aqui va el Nombre.</div>
                </div>
                <div class="mb-3">
                    <label for="telefono" class="form-label">Telefono</label>
                    <input type="text" class="form-control" id="telefono" aria-describedby="textHelp">
                    <div id="textHelp" class="form-text">aqui va el telefono.</div>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" aria-describedby="emailHelp">
                    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                </div>
                <select id="categoria" class="form-select">
                    <option selected value="0">Open this select menu</option>
                    <?php
                        foreach($categorias as $categoria): 
                    ?>
                        <option value="<?php echo $categoria['id']?>"><?php echo $categoria['nombre']?></option>
                    <?php
                        endforeach;
                    ?>
                </select>
                <br>
                <button id="crear" class="btn btn-success">Agregar</button>
            </div>
        </div>
        
    </div>
</div>
<?php require "./app/controller/create.controller.php"; ?>