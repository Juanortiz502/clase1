<?php
$winner =[
    [0, 3, 6],
    [1, 4, 7],
    [2, 5, 6],
    [0, 1, 2],
    [3, 4, 5],
    [6, 7, 8],
];
if(!isset($_POST['exist'])){
    $allPosition = [
        0 => ' ',
        1 => ' ',
        2 => ' ',
        3 => ' ',
        4 => ' ',
        5 => ' ',
        6 => ' ',
        7 => ' ',
        8 => ' ',
    ];
    $_SESSION['play'] = $allPosition;
}
if(isset($_POST['position'])){
    $newPosition = explode(',',$_POST['exist']);
    $_SESSION['play'] = $newPosition;
    if($newPosition[$_POST['position']] == ' '){
        $_SESSION['play'][$_POST['position']] = 'X';
        //Procedemos a jugar la maquina
        $index = array_search(' ', $_SESSION['play']);
        $_SESSION['play'][$index] = 'O';
    }
        
    
}

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
    <table border="1">
        <tbody>
            <tr>
                <td><?php echo $_SESSION['play'][0]?></td>
                <td><?php echo $_SESSION['play'][1]?></td>
                <td><?php echo $_SESSION['play'][2]?></td>
            </tr>
            <tr>
                <td><?php echo $_SESSION['play'][3]?></td>
                <td><?php echo $_SESSION['play'][4]?></td>
                <td><?php echo $_SESSION['play'][5]?></td>
            </tr>
            <tr>
                <td><?php echo $_SESSION['play'][6]?></td>
                <td><?php echo $_SESSION['play'][7]?></td>
                <td><?php echo $_SESSION['play'][8]?></td>
            </tr>
        </tbody>
    </table>
    <?php echo implode(',', $_SESSION['play']) ?>
    <form action="" method="post">
    <input type="number" name="position" id="" min=0 max=9 require>
    <input type="hidden" name="exist" value="<?php echo implode(',', $_SESSION['play']) ?>">
    <input type="submit" value="Enviar y Jugar">
    </form>
</body>
</html>