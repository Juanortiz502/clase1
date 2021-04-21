<?php
require_once './Db.php';

if(isset($_POST['name'])){
    $name = $_POST['name'];
    $last_name = $_POST['last_name'];
    $age = $_POST['birthday'];// Y-m-d // Y 2021 - y 21
    $ide = $_POST['ide'];
    
    array_shift($_POST);
    array_shift($_POST);
    array_shift($_POST);
    array_shift($_POST);

    if(!file_exists('cv.txt')){
        //Si No Existe lo crea
        $fp = fopen('cv.txt', 'w+');
    }else{
        $fp = fopen('cv.txt', 'w');
    }
    
    $today = new DateTime(date('Y-m-d'));
    $birthday = new DateTime($age);
    $age = $today->diff($birthday)->y;
    
   

    $line = "Nombre: $name\nApellido: $last_name\nEdad: $age\nLengaujes de Programación\nIDE:$ide";
    $lang = '';
    foreach($_POST as $lan){
        $line .= "$lan\n";
        $lang .= "$lan,";
    }
    fputs($fp, $line);
    fclose($fp);

    //Subir el Archivo - Foto image/png
    //Relativa
    $path = './upload/';
    $pathFile = $path . basename($_FILES['photo']['name']);
    
    //Ruta Absoluta
    //echo $path = getcwd() . DIRECTORY_SEPARATOR . 'upload/';
    
    if(!file_exists($pathFile)){
      move_uploaded_file($_FILES['photo']['tmp_name'], $pathFile);
    }else{
      $errorExist = 1;
    }
      

    //Creo la conexion a DB e inserto la informacion
    $db = new Db();
    $db->insertData('summary', [
      [
        ':name' => $name, 
        ':last_name' => $last_name, 
        ':age' => $age, 
        ':ide' => $ide, 
        ':lan' => $lang]
      ]);
      $db->insertData('email', [
        [
          ':name' => 'Carlos', 
          ':email' => 'sena@awna', 
        ],
        [
          ':name' => 'Wilson', 
          ':email' => 'wramirez@sena.edu.co', 
        ]
        ]);

}
else{
    header('location: /cv.php');
}?>
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
      <?php if(isset($errorExist)):?>
        <div class="alert alert-warning">
          El Archivo a Subir ya Existe
        </div>
      <?php endif?>
      <img class="d-block mx-auto mb-4" src="<?php echo $pathFile?>" alt="" width="72" height="72">
      <h2>Perfil Profesional</h2>
    </div>

    <div class="row g-3">
      <div class="col-md-12">
        <h4 class="mb-2">Datos Personales</h4>
        <form class="needs-validation" novalidate action="showCv.php" method="post">
          <div class="row g-3">
            <div class="col-sm-6">
              <label for="name" class="form-label fw-bold">Nombre:</label>
              <span class=""><?php echo $name ?></span>
            </div>

            <div class="col-sm-6">
              <label for="last_name" class="form-label fw-bold">Apellidos:</label>
              <span class=""><?php echo $last_name ?></span>
            </div>

            <div class="col-sm-6">
              <label for="birthday" class="form-label fw-bold">Edad</label>
              <?php echo $age ?>
            </div>

            <div class="col-sm-6">
              <label for="ide" class="form-label fw-bold">IDE's de Trabajo</label>
              <span class=""><?php echo $ide ?></span>
            </div>

          <hr class="my-4">
          <div class="fw-bold">Lenguajes de Programación</div>
        <?php foreach($_POST as $language):?>
          <div class="form-check">
           <?php echo $language?>
          </div>
        <?php endforeach?>
          <hr class="my-4">

        </form>
      </div>
    </div>
  </main>
</div>
    <script src="https://getbootstrap.com/docs/5.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    <script src="view-source:https://getbootstrap.com/docs/5.0/examples/checkout/form-validation.js"></script>
  </body>
</html>