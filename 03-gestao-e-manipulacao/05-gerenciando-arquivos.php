<?php
//ALTERANDO DOCUMENTO PARA HTML
header('Content-Type: text/html; charset=utf-8');



$BaseDir = getcwd() . "/05";
echo $BaseDir;
echo "<hr>";

//r = lear
//w = escrever
//a = anexar/adicionar

$File = fopen("{$BaseDir}/05.txt", 'w');
$Txt = "Ismael Paiva Madeira\r\nIP coneito Marketin Digital\r\nwww.ipconceito.com.br";
fwrite($File, $Txt);
fclose($File);

$Add = "\r\nCursos em Desenvolvimento Web!";
$FileTrue = fopen("{$BaseDir}/05.txt", 'a');
fwrite($FileTrue, $Add);
fclose($FileTrue);

$FileRead = fopen("{$BaseDir}/05.txt", 'r');
while (!feof($FileRead)):
    $Dado = fgets($FileRead);
    echo "{$Dado}<br>";
endwhile;
fclose($FileRead);
echo "<hr>";


//file_put_contents("{$BaseDir}/05.txt", "Mais um teste");

$File = "{$BaseDir}/05.txt";
//$FileContent = file_get_contents($File);
//file_put_contents($File, $FileContent . $Add);

copy($File, getcwd() . '/05/teste.txt');
unlink($File);












































