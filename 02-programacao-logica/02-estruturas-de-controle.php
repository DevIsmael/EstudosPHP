<?php
//ALTERANDO DOCUMENTO PARA HTML
header('Content-Type: text/html; charset=utf-8');

//SE, SENÃO
$teste = true;
if($teste):
    echo "True";
else:
    echo "False";
endif;
echo "<hr>";

///SE, SENÃO SE, SENÃO
$teste = false;
$result = 1321321;
if($teste && !empty($result)):
    echo "Teste positivo: {$result}";
elseif($teste && empty($result)):
    echo "Teste positivo mas sem resultados!";
else:
     echo "Teste negativo!";
endif;
echo "<hr>";

//BATERIA
$mes = 2;
switch ($mes):
    case 1:
        echo "Janeiro";
        break;
    case 2:
        echo "Fevereiro";
        break;
    default:
        echo "Teste inválido!";
        break;
endswitch;
echo "<hr>";

$mesMais = 7;
switch ($mesMais):
    case($mesMais <= 6):
        echo "Ainda estamos no primeiro semestre";
        break;
    default:
        echo"passamos!";
        break;
endswitch;