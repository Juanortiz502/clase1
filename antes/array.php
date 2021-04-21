<?php
/*
Indices con valores -- llave valor
Cuando se omite la llave se asigna por defecto su posicion
Cuando es el primer valor se le asigna un cero (0)
*/

$students = array(
    '123' => array(
        'name' => 'Santiago',
        'lastName' => 'Gañan',
        'age' => 20,
        'address' => 'Pereira' 
    ), 
    '345' => [
        'name' => 'Alejandro',
        'lastName' => 'Jimenez',
        'age' => 17 
    ], 
    '789' => [
        'name' => 'Dahiana',
        'lastName' => 'Ospina',
        'age' => 16 
    ], 
);
echo '<pre>';
print_r($students);
echo $students['789']['lastName'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <input type="text" name="" id="">
    <input type="submit" value="Jugar">
</body>
</html>