<?php

	require_once __DIR__ . '/Conta.php';

	// Classe ContaCorrente

	final class ContaCorrente extends Conta{
		private $limite;

		public function __construct($agencia, $conta, $saldo, $limite){
			// chama o método construtor na classe pai (Conta)
			parent::__construct($agencia, $conta, $saldo); 
			$this->limite = $limite;
		}
		

		public function retirar($valor){
			if(($this->saldo + $this->limite) >=  $valor){
				$this->saldo -= $valor;
				return TRUE;
			}else{
				return FALSE;	
			}
		}

		public function getLimite(){
			return $this->limite;
		}
	}