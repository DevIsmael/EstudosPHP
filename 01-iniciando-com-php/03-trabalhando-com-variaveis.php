<?php
//ALTERANDO DOCUMENTO PARA HTML
header('Content-Type: text/html; charset=utf-8');

$meuNome = "Ismael Paiva Madeira";
$minha_empresa = "IP Conceito";

$idadeDoCliente = 29;
$idade_do_cliente = 29;

echo "Meu nome é {$meuNome}. Eu trabalho na {$minha_empresa} e tenho {$idadeDoCliente} anos!<hr>";

//VAR de referência!
$var = "empresa";
$$var = "IP Conceito";
echo "Minha {$var} é a {$empresa}<hr>";

//Reescrita
$Nome = "Marcos";
echo "{$Nome}<br>";

$Nome = "Ismael";

//Concatenação
$Nome .= " Paiva";
echo "{$Nome}<br>";

$Nome .= $meuNome;
echo "{$Nome}<br>";
