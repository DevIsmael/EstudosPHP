<?php

class AgregacaoCarrinho{

	private $Cliente;
	private $Produtos;
	private $Total;

	function __construct(AssociacaoCliente $Cliente){
		$this->Cliente = $Cliente;
		$this->Produtos = array();
	}

	public function Add(AgregacaoProdutos $Produtos){
		$this->Produtos[$Produtos->getProduto()] = $Produtos;
		$this->Total += $Produtos->getValor();
		$this->VerCarrinho($Produtos, 'adicionou');
	}

	public function Remove(AgregacaoProdutos $Produtos){
		unset($this->Produtos[$Produtos->getProduto()]);
		$this->Total -= $Produtos->getValor();
		$this->VerCarrinho($Produtos, 'removeu');

	}

	public function VerCarrinho(AgregacaoProdutos $Produtos, $Action){
		echo "Você {$Action} um {$Produtos->getNome()} em seu carrinho. Valor R$ {$this->Total} <hr>";
	}

}