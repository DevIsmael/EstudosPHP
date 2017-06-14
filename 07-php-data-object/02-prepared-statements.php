<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>WS PHP - Prepared Statements</title>
</head>
<body>
	<?php
	require('./_app/Config.inc.php');

	$PDO = new Conn;
	$name = 'Firefox';
	$views = '128';

	try {

		$QRCreate = "INSERT INTO ws_siteviews_agent (agent_name, agent_views) VALUES (?, ?)";
		$Create = $PDO->getConn()->prepare($QRCreate);

		$Create->bindValue(1, 'Chrome', PDO::PARAM_STR);
		$Create->bindValue(2, '122', PDO::PARAM_INT);

		$Create->execute();

		if ($Create->rowCount()):
			echo "{$PDO->getConn()->lastInsertId()} - Cadastro com sucesso! <hr>";
		endif;
		
	} catch (PDOException $e) {
		PHPErro($e->getCode(), $e->getMessage(), $e->getFile(), $e->getFile());
	}

	?>
</body>
</html>