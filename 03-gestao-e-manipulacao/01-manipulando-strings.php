<?php
//ALTERANDO DOCUMENTO PARA HTML
header('Content-Type: text/html; charset=utf-8');

$nome = "Ismael Paiva <br>";
echo strtoupper($nome);
echo strtolower($nome);
echo ucwords($nome);
echo ucfirst(strtolower($nome));
echo "<hr>";

//TRATAR UMA IMAGEM
$img = "Nome da Imagem.jpg";

$imagem = strtolower(str_replace(' ', '-', $img));

echo $imagem;
echo "<hr>";

for($i = 1; $i <= 10; $i++):
    echo str_pad($i, 2, 0, STR_PAD_LEFT). "<br>";
endfor;
echo "<hr>";

$escreva = "Desculpa, ";
echo str_repeat($escreva, 100);
echo "<hr>";

//PRIMEIRO NOME
$NovoNome = "Ismael P. Madeira";
echo substr($NovoNome, 0, 9);
echo "<br>";

echo substr($NovoNome, 0, strpos($NovoNome, ' '));
echo substr($NovoNome, strpos($NovoNome, ' '));
echo "<br>";
echo substr($NovoNome, 0, strpos($NovoNome, ' '));
echo substr($NovoNome, strrpos($NovoNome, ' '));

$ext = substr($img, strrpos($img, '.') + 1);
echo "<hr>{$ext}";


echo str_repeat("<br>", 20);