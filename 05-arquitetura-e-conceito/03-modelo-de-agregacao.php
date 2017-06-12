<!DOCTYPE html> 

<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>WS PHP - Modelo de Assossiação</title>
</head>
<body>
	<?php 
	require('./inc/Config.inc.php');

	$ismael = new AssociacaoCliente('Ismael Paiva', 'contato@ipconceito.com.br');
	$prophp = new AgregacaoProdutos('20', 'Pro PHP', 334.90);
	$wsphp  = new AgregacaoProdutos('21', 'WS PHP', 289.90);
	$wshtml = new AgregacaoProdutos('22', 'WS HTML5', 289.90);

	$outrocurso = new stdClass();
	$outrocurso->Produto = '23';
	$outrocurso->Nome = 'Curso de jQuery';
	$outrocurso->Valor = 400;

	$carrinho = new AgregacaoCarrinho($ismael);

	$carrinho->Add($prophp);
	$carrinho->Add($wsphp);
	$carrinho->Add($wshtml);

	$carrinho->Remove($wsphp);

	//$carrinho->Add($outrocurso);

	var_dump($carrinho);
	echo "<hr>";
	var_dump($ismael, $prophp, $outrocurso);

	?>
</body>
</html>