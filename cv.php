<?php 
 require_once('./php/ReadJson.php');
 $redJson = new Read('lan.json');
 $languages = $redJson->read();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <title>Perfil Profesional</title>
    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
      .container {
        max-width: 960px;
    }
    </style>
</head>
<body class="bg-light">
    
<div class="container">
  <main>
    <div class="py-3 text-center">
      <img class="d-block mx-auto mb-4" src="./img/logo_sena.png" alt="" width="72" height="72">
      <h2>Perfil Profesional</h2>
    </div>

    <div class="row g-3">
      <div class="col-md-12">
        <h4 class="mb-2">Datos Personales</h4>
        <form class="needs-validation" novalidate action="showCv.php" method="post" enctype="multipart/form-data">
          <div class="row g-3">
            <div class="col-sm-6">
              <label for="name" class="form-label">Nombre</label>
              <input type="text" class="form-control" name="name" id="name" placeholder="" value="" required>
              <div class="invalid-feedback">
               Nombre es Obligatorio.
              </div>
            </div>

            <div class="col-sm-6">
              <label for="last_name" class="form-label">Apellidos</label>
              <input type="text" class="form-control" name="last_name" id="last_name" placeholder="" value="" required>
              <div class="invalid-feedback">
                Apellidos Requeridos.
              </div>
            </div>

            <div class="col-sm-6">
              <label for="birthday" class="form-label">Fecha de Nacimiento</label>
              <input type="date" class="form-control" name="birthday" id="birthday" placeholder="" value="" required>
              <div class="invalid-feedback">
                Fecha de Nacimiento Obligatoria.
              </div>
            </div>

            <div class="col-sm-6">
              <label for="ide" class="form-label">IDE's de Trabajo</label>
              <input type="text" class="form-control" name="ide" id="ide" placeholder="" value="" required>
              <div class="invalid-feedback">
                Apellidos Requeridos.
              </div>
            </div>

          <hr class="my-4">
          <div class="col-sm-6">
            <label for="photo" class="form-label">Foto de Perfil</label>
            <input type="file" name="photo" id="photo" class="form-control">
          </div>
        <div class="col-sm-6">
        <?php foreach($languages as $language):?>
          <div class="form-check">
            <input type="checkbox" class="form-check-input" name="<?php echo $language->language?>" value="<?php echo $language->language?>">
            <label class="form-check-label" for="same-address"> <?php echo "$language->language - Version: $language->version"?> </label>
          </div>
        <?php endforeach?>
        </div>
          <hr class="my-4">

          <button class="w-100 btn btn-primary btn-lg" type="submit">Guardar</button>
        </form>
      </div>
    </div>
  </main>
</div>
    <script src="https://getbootstrap.com/docs/5.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    <script src="view-source:https://getbootstrap.com/docs/5.0/examples/checkout/form-validation.js"></script>
  </body>
</html>