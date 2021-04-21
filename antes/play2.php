<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <title>Juego</title>
</head>
<body>
<?php
if($_SERVER['REQUEST_METHOD'] == 'GET'){
    $arrayMatrix = [
        '',
        '',
        '',
        '',
        '',
        '',
        '',
        '',
        '',
    ];
};
$winner =[
    [0, 3, 6],
    [1, 4, 7],
    [2, 5, 8],
    [0, 1, 2],
    [3, 4, 5],
    [6, 7, 8],
    [0, 4, 8],
    [2, 4, 6],
];
$who = '';
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $arrayMatrix = explode(',', $_POST['sec']);
    if($arrayMatrix[$_POST['position']] == ''){
        $arrayMatrix[$_POST['position']] = 'X';
        $index = array_search('', $arrayMatrix);
        $arrayMatrix[$index] = 'O';

        //Analizamos si es ganador o no
        foreach($winner as $win){
            if(($arrayMatrix[$win[0]] == $arrayMatrix[$win[1]]) && ($arrayMatrix[$win[0]] == $arrayMatrix[$win[2]]) && $arrayMatrix[$win[0]] != '' ){
                echo $who = ($win[0] != 'X') ? 'Ganador el Juagador' : 'Ganador la Maquina'; 
                
            }
        }

    }
    
}
?>
<div class="container">
  <div class="row justify-content-md-center">
    <div class="col-6">
    <img src="./triqui.png" width="200" alt="">
    </div>
    <div class="col-6">
    <table class="table table-borderless">
        <tbody>
            <tr class="border-bottom">
                <td class="border-end"><?php echo $arrayMatrix[0]?></td>
                <td class="border-end"><?php echo $arrayMatrix[1]?></td>
                <td><?php echo $arrayMatrix[2]?></td>
            </tr>
            <tr class="border-bottom">
                <td class="border-end"><?php echo $arrayMatrix[3]?></td>
                <td class="border-end"><?php echo $arrayMatrix[4]?></td>
                <td><?php echo $arrayMatrix[5]?></td>
            </tr>
            <tr class="">
                <td class="border-end"><?php echo $arrayMatrix[6]?></td>
                <td class="border-end"><?php echo $arrayMatrix[7]?></td>
                <td><?php echo $arrayMatrix[8]?></td>
            </tr>
        </tbody>
    </table>
    </div>
    <div class="col-12">
    <?php echo $who?>
        <form action="" method="post">
        <input type="hidden" name="sec" value="<?php echo implode(',', $arrayMatrix)?>">
        <input type="number" name="position" min=0 max=8 id="" class="form-control">
        <input type="submit" value="Jugar" class="btn btn-primary">
        </form>
    </div>
  </div>
</div>
</body>
</html>