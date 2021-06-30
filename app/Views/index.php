<div class="container">

<?php if($this->args[0]  == 'e01'):?>
    <div class="alert alert-danger text-center">
        Usuario o Clave Erronea
    </div>
<?php endif?>

<?php if($this->args[0]  == 'e02'):?>
    <div class="alert alert-danger text-center">
        Usuario Sin Autorizacion - Inicie Sesión
    </div>
<?php endif?>

<?php if($this->args[0]  == 's01'):?>
    <div class="alert alert-info text-center">
        Cerró Sesión
    </div>
<?php endif?>

    <div class="row">
        <form action="/index/login" method="post">
            <div class="col-sm-12">
                <label for="email" class="label">Correo Electronico</label>
                    <input type="text" name="email" id="email" required>
            </div>
            <div class="col-sm-12">
                <label for="password" class="label">Contraseña</label>
                    <input type="password" name="password" id="password">
            </div>
            <div class="cols-sm-12">
                <button type="submit" class="btn btn-primary">Ingresar</button>
            </div>
        </form>
    </div>
</div>