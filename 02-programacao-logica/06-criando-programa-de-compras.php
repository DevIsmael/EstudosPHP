<?php
//ALTERANDO DOCUMENTO PARA HTML
header('Content-Type: text/html; charset=utf-8');

//Lógica Ismael
//$bolsaPreta = "";
//$bolsaVermelha = "bolsa vermelha";
//
//if(!empty($bolsaPreta) && !empty($bolsaVermelha)):
//    echo"Tem as bolsas";
//elseif(empty($bolsaPreta) && empty($bolsaVemelha)):
//    echo"Não tem as bolsas";
//elseif(!empty($bolsaPreta)):
//    echo"Só tem a bolsa preta";
//else(empty($bolsaPreta)):
//    echo"Só tem bolsa vermelha";
//endif;


//Lógica Robson

$Bolsa = "Marrom";

if(!empty($Bolsa)):
    if($Bolsa == "Vermelha"):
        echo "Amor, comprei a bolsa que você queria";
    elseif($Bolsa == "Preta"):
        echo "Amor, comprei a preta pois não tinha a vermelha";
    else:
        echo "Alô amor, não tem as cores. Posso levar a outra?<br>";
        $Amor = true;
        if($Amor):
            echo "Pode sim amor. Traga qualquer uma";
        else:
            echo "O sofá te espera";
        endif;
    endif;
else:
    echo"Amor. Não tem mais a bolsa :/";
endif;