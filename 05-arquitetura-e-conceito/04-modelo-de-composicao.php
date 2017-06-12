<!DOCTYPE html> 

<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>WS PHP - Modelo de Assossiação</title>
</head>
<body>
	<?php 
	require('./inc/Config.inc.php');

	$ismael = new ComposicaoUsuario('Ismael Paiva', 'contato@ipconceito.com.br');
	$ismael->CadastrarEndereco('Rua Velha', 'Rio de Janeiro');


	echo "O email de {$ismael->Nome} é {$ismael->Email} <br>";
	echo "{$ismael->Nome} mora em {$ismael->getEndereco()->getCidade()}/{$ismael->getEndereco()->getEstado()}";
	
	echo "<hr>";
	
	var_dump($ismael);

	?>
</body>
</html>