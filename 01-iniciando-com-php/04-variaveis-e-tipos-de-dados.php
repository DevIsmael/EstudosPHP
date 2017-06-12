<?php
//ALTERANDO DOCUMENTO PARA HTML
header('Content-Type: text/html; charset=utf-8');

//STR = string
$str = "Olá mundo!";
var_dump($str);

echo "<br>";

//ARR = Array
$arr = array();
$arr['nome'] = "Ismael";
$arr['idade'] = 29;
var_dump($arr);

echo "<br>";

//bool = boleano
$bool = false;
var_dump($bool);
//if($bool):
//    echo "TRUE";
//else:
//    echo "FALSE";
//endif;

$opa = null;
$int = 0;
$str = "";
$arr = array();

echo "<br>";

//INT = Inteiro
$int = 29;
var_dump($int);

echo "<br>";

//FLT = Flutuante
$flt = 0.8;
var_dump($flt);

//NUMÉRICAS
$numInt = 123465;
var_dump($numInt);

$numFlt = 0.8;
var_dump($numFlt);

$numNegativo = -340;
var_dump($numNegativo);

$numCalc = 2*2.86;
var_dump($numCalc);

echo "<hr>";

//OBJ = objeto
$obj = new stdClass();
$obj->Nome = "Robson";
$obj->Idade = 29;
var_dump($obj);