<?php require_once '../app/views/includes/head.php'; ?>
<?php require_once '../app/views/includes/nav.php'; ?>
<form action="/ITM/LOGIN/iniciarSeccion" method="post">
    <div class="modal-dialog" role="document">
        <div class="container modal-content">

            <div class="modal-header">
            <h1 class="modal-title">Entrar</h1>
            <i class="far fa-user-circle fa-3x"></i>
            </div>
            
            <div class="modal-body">
                <input class="form-control" type="text" name="cedula" placeholder="cedula usuario" required>
                <br>
                <input class="form-control" type="password" name="contraseña" placeholder="contraseña" required>
                <br>
            </div>

            <div class="modal-footer text-center">
                <input type="submit" class="btn btn-outline-primary btn-block" value="Ingresar">
                <div>
                    <p class="text-center"> Aun no te has registrado ? ingresa <a href="/ITM/CHECKIN">aqui</a> y llena el formulario.</p>
                </div>
            </div>
        </div>
    </div>
</form>
<?php require_once '../app/views/includes/footer.php'; ?>

