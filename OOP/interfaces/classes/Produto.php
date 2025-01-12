<?php
	require_once __DIR__ . "/OrcavelInterface.php";

	// Classe Produto

	final class Produto implements OrcavelInterface {

		private $descricao;
		private $preco;
		private $quantidadeNoEstoque;

		public function __construct($descricao, $preco, $quantidadeNoEstoque){
			$this->descricao = $descricao;
			$this->preco = $preco;
			$this->quantidadeNoEstoque = $quantidadeNoEstoque;
		}

		public function getPreco(){
			return $this->preco;
		}

		public function getDescricao(){
			return $this->descricao;
		}
	}