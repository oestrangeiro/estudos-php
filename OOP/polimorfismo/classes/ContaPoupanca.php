<?php
	// Classe ContaPoupanca

	require_once __DIR__ . '/Conta.php';

	// A classe ContaPoupanca terá uma implementação
	// própria do método retirar()

	final class ContaPoupanca extends Conta{

		public function retirar($valor){
			if(($valor > 0) && ($this->saldo >= $valor)){
				$this->saldo -= $valor;
				return TRUE;
			}else{
				return FALSE;
			}
		}
	}