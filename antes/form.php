<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <title>Documento de Formulario</title>
</head>
<body>

    <section class="container">
        <div class="card">
            <div class="card-herader">
                <div class="card-text">
                    Formulario de Contacto
                </div>
            </div>
            <div class="card-body">
                <form action="" method="POST" name="" id="">
                    <div class="col-md-12">
                        <label for="name" class="form-label">Nombre Completo</label>
                        <input type="text" class="form-control" name="name" id="name">
                    </div>
                    <div class="col-md-12">
                        <label for="age" class="form-label">Edad</label>
                        <input type="number" class="form-control" name="age" id="age">
                    </div>
                    <div class="col-md-12">
                        <label for="captcha" class="form-label">Ingrese el valor de la Suma de 5 + 3</label>
                        <input type="number" class="form-control" name="captcha" id="captcha">
                    </div>
                    <div class="col-sm-12">
                        <input type="submit" value="Enviar" class="btn btn-primary col-sm-12">
                    </div>
                </form>
            </div>
        </div>
        <div class="alert alert-info">
        <?php 
            if(isset($_POST['name'])){
                if($_POST['captcha'] == 8){
                    echo "Su nombre es: " . $_POST['name'] . "<br> Su edad es: " . $_POST['age'] . " Años";
                }else{
                    echo "captcha no superado";
                }
            }
            ;
            ?>
        </div>
    </section>
</body>
</html>