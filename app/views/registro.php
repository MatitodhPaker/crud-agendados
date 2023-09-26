

<div class="modal fade" id="nuevoUsuarioModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog        ">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Crear Nuevo usuario</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="mb-3">
                    <label for="nombre" class="form-label">nombre de usuario</label>
                    <input type="text" class="form-control" id="nombre" aria-describedby="textHelp">
                    <div id="textHelp" class="form-text">Escribe el nombre de usario que deseas registrar.</div>
                </div>
                <div class="mb-3">
                    <label for="pass" class="form-label">Contraseña</label>
                    <input type="password" class="form-control" id="pass" aria-describedby="textHelp">
                    <div id="textHelp" class="form-text">Escribe la contraseña.</div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" id="registrar">Registar</button>
            </div>
        </div>
    </div>
</div>