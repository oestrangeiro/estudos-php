<?php

	// Classe Produto

	Class Produto{
		private $descricao;
		private $estoque;
		private $preco;
		private $fabricante;

		public function __construct($descricao, $estoque, $preco){
			$this->descricao = $descricao;
			$this->estoque = $estoque;
			$this->preco = $preco;
		}

		public function getDescricao(){
			return $this->descricao;
		}

		// Aqui que acontece a agregação
		public function setFabricante(Fabricante $fab){
			$this->fabricante = $fab;
		}

		public function getFabricante(){
			return $this->fabricante;
		}

		
	}
