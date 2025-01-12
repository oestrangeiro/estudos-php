<?php
	
	require_once __DIR__ . "/Produto.php";
	require_once __DIR__ . "/Servico.php";
	// Classe Orcamento

	final class Orcamento {
		private $itens = array();

		public function adicionar(OrcavelInterface $prod, $quantidade = 1){
			$this->itens[] = array($prod, $quantidade);
		}

		public function calcularTotal(){
			$total = 0;

			foreach($this->itens as $item){
				$total += ($item[1] * $item[0]->getPreco());
			}

			return $total;
		}

		public function listar(){
			echo "**Itens:\n";
			foreach ($this->itens as $key => $item) {
				echo "Decrição:\t". $item[0]->getDescricao();
				echo "(R$: " . $item[0]->getPreco() .")"."\n";
			}
		}
	}