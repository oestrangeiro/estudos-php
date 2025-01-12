<?php

	// Classe Conta

	class Conta{
		protected string $agencia;
		protected string $conta;
		protected $saldo;

		public function __construct($agencia, $conta, $saldo){
			$this->agencia = $agencia;
			$this->conta = $conta;

			if($saldo >= 0){
				$this->saldo = $saldo;
			}
			
		}

		public function getInfo(){
			return "Agência: {$this->agencia}, Conta: {$this->conta}\n";
		}

		public function depositar($valor){
			if($valor > 0){
				$this->saldo += $valor;
				return TRUE;
			}else{
				return FALSE;
			}
		}

		public function getSaldo(){
			return $this->saldo;
		}
	}