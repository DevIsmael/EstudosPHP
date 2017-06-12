<?php

header('Content-Type: text/html; charset=utf-8');

//Comentário de Código

/*
 * Comentário Recursivo
 */

/*
    Comentário de Várias Linhas
 */

$ola = "Olá Mundo";
$nome = "Ismael";

echo $ola;
echo "<hr>";

echo '$ola';
echo "<br>";
echo "$ola";
echo "<br>";
echo $ola;
echo "<br>";
echo "{$ola}s";
echo "<br>";
echo "{$ola}, meu nome é {$nome}!";
echo "<hr>";

print("{$ola}<br>");

$Arr = array(
    "ola" => "Olá Mundo!",
    "nome" => "Ismael"
);

print_r ($Arr);

$idade = 29;
echo $idade;
echo "<hr>";
var_dump($idade);
var_dump($Arr);
var_dump($idade);
echo "<hr>";
?>

<article>
    <h1><?= $ola; ?></h1>
    <p>Meu nome é <?= $nome ;?> e eu tenho <?= $idade ;?> anos!</p>
</article>