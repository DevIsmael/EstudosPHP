<?php
//ALTERANDO DOCUMENTO PARA HTML
header('Content-Type: text/html; charset=utf-8');

$Arr = array('PHP', 'HTML', 'CSS');
$Arr[] = 'JS';
var_dump($Arr);
echo "<br>";

$ArrB = ['PHP', 'HTML', 'CSS'];
$ArrB[] = 'JS';
var_dump($ArrB);
echo "<hr>";

foreach ($ArrB as $Lang):
    echo "{$Lang}<br>";
endforeach;
echo "<hr>";

//ASSOCIATIVO
$ArrC = [
    "cargo" => "Programador", 
    "salario" => 1200
];
$ArrC['empresa'] = "IP Conceito";
$ArrC['cargo'] = "WebMaster";
$ArrC['salario'] += 5000;
$ArrC['cargo'] .= "/Programador";
var_dump($ArrC);

//echo "Eu sou {$ArrC['cargo']} na {$ArrC['empresa']}!";

extract($ArrC);
echo "Eu sou {$cargo} na empresa {$empresa} e ganho R$ ". number_format($salario, 2, ',', '.') ." por mês!";
echo "<hr>";
//Multidimensional

$Colaboradores = [];
$Colaboradores[] = ["nome" => "Ismael P. Madeira", "salario" => 7200, "cargo" => "Webmaster"];
$Colaboradores[] = ["nome" => "Rafael P. Madeira", "aprendiz" => 1800, "cargo" => "Aprendiz"];
$Colaboradores[] = ["nome" => "Daniel P. Madeira", "aprendiz" => 1800, "cargo" => "Aprendiz"];

foreach ($Colaboradores as $Cargo):
    extract($Cargo);
echo "{$nome} e {$cargo} e recebe " . number_format($salario, 2, ',', '.') . " por mês!<br>";
endforeach;

var_dump($Colaboradores);