<?php require_once '../app/views/includes/head.php'; ?>
<form action="/ITM/home" method="post">
<div>
    <div class="container mt-5 modal-content">
        <div class="modal-header">
            <h1 class="modal-title">Registrar Usuario</h1>
            <i class="fas fa-user-plus fa-5x"></i>
        </div>
        <div class="modal-body">
            <div class="form-row">
                <div class="col-5">
                    <input name="nombres" type="text" class="form-control border" placeholder="nombres">
                </div>
                <div class="col-5">
                    <input name="apellidos" type="text" class="form-control border" placeholder="apellidos">
                </div>
                <div class="col-2">
                    <input name="edad" type="number" class="form-control border" placeholder="edad">
                </div>
            </div>
            <br>
            <div class="form-row">
                <div class="col-5">
                    <input name="direccion" type="text" class="form-control border" placeholder="direccion">
                </div>
                <div class="col-5">
                    <input name="email" type="email" class="form-control border" placeholder="email@example.com">
                </div>
                <div class="col-2">
                <input class="form-control" type="text" placeholder="Cedula">
                </div>
            </div>
            <br>
            <div class="form-row">
                <div class="col-1"></div>
                <div class="col-5">
                    <input name="contraseña" type="password" class="form-control border" placeholder="contraseña">
                </div>
                <div class="col-5">
                    <input name="contraseña" type="password" class="form-control border" placeholder="contraseña">
                </div>
            </div>
        </div>
        <div class="modal-footer">
        
            <input type="submit" class="btn btn-outline-primary " value="Registrar">
        </div>
    </div>
</div>
</form>
<?php require_once '../app/views/includes/footer.php'; ?>



