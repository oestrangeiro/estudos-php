<?php
	require_once __DIR__ . "/OrcavelInterface.php";

	// Classe Servico que fornece a implementacao
	// do metodo getPreco() para a classe Orcamento

	class Servico implements OrcavelInterface{

		private $descricao;
		private $preco;

		public function __construct($descricao, $preco){
			$this->descricao = $descricao;
			$this->preco = $preco;
		}

		public function getPreco(){
			return $this->preco;
		}

		public function getDescricao(){
			return $this->descricao;
		}
	}