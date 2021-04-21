<?php
$a = 10;//Int
$b = '10';//string

//$a == $b;//comparacion de == compara los valores de las variables
//$a === $b; // Comparacion identica, compara valores y tipo de datos 
// Operador Diferente
//var_dump($a <> $b);
//Operador no Identico
//var_dump($a !== $b); // ! = =

//$a = 10;
//$b = 11;
//var_dump($a <=> $b);
/*
Cero (0) cuando son iguales;
1 cuando el primer parametro es mayor
-1 cuando el segundo parametro es mayor
*/ 
$title = 'SENA';
var_dump($title ?? 'Pagina del SENA');
var_dump(0 == "a"); // 0 == 0 -> true var_dump("1" == "01"); // 1 == 1 -> true var_dump("10" == "1e1"); // 10 == 10 -> true var_dump(100 == "1e2"); // 100 == 100 -> true
switch ("a") { case 0:
echo "0";
break;
case "a": // nunca alcanzado debido a que "a" ya ha coincidido con 0
echo "a";
break; }