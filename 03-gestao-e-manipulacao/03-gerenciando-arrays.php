<?php
//ALTERANDO DOCUMENTO PARA HTML
header('Content-Type: text/html; charset=utf-8');

$Pessoa = [];
$Pessoa['nome'] = "Ismael Paiva Madeira <script><?=";
$Pessoa = array_pad($Pessoa, 5, null);

$Pessoa = array_filter($Pessoa);
$Pessoa = array_map('strip_tags', $Pessoa);
$Pessoa = array_map('trim', $Pessoa);

array_push($Pessoa, 29);
array_pop($Pessoa);
array_unshift($Pessoa, 29);
array_shift($Pessoa);

$Pessoa['idade'] = 28;
$Pessoa['job'] = "Webmaster";
$Pessoa = array_reverse($Pessoa);

$Empresa['empresa'] = "IP Conceito";
$Empresa['atuacao'] = "Marketing Digital";

$Casa['cidade'] = "Rio de Janeiro";

$Pessoa = array_merge($Pessoa, $Empresa, $Casa);
var_dump($Pessoa);

var_dump(array_keys($Pessoa));
var_dump(array_values($Pessoa));
var_dump(array_slice($Pessoa, 2));
var_dump("O array tem " . count($Pessoa) . " indices!");

if(in_array("IP", $Pessoa)):
    echo "Existe!";
else:
    echo "Não existe";
endif;

asort($Pessoa);
arsort($Pessoa);
ksort($Pessoa);
krsort($Pessoa);

sort($Pessoa);
rsort($Pessoa);

var_dump($Pessoa);

$Nomes = "Ismael, Rafael, Daniel";
$Nomes = explode(', ', $Nomes);
$Nomes = implode($Nomes, "<br> ");





var_dump($Nomes);