<!DOCTYPE html> 

<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>WS PHP - Modelo de Assossiação</title>
</head>
<body>
	<?php 
	require('./inc/Config.inc.php');

	$ismael = new AssociacaoCliente("Ismael Paiva", 'contato@ipconceito.com.br');
	$Login = new AssociacaoLogin($ismael);


	if ($Login->getLogin()):

		echo "Gerenciando o cliente id: {$Login->getCliente()->getCliente()}<br>";
		echo "{$Login->getCliente()->getNome()} logou com sucesso usando o e-mail {$Login->getCliente()->getEmail()}<hr>";

	else:
		echo 'Error ao Logar!';
	endif;


	var_dump($ismael, $Login);


	?>
</body>
</html>