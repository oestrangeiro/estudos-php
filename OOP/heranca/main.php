<?php

	require_once __DIR__ . '/classes/ContaPoupanca.php';
	require_once __DIR__ . '/classes/ContaCorrente.php';

	// Estudo sobre herança

	$contaP1 = new ContaPoupanca('1234', '004-1', 1500);

	echo $contaP1->getInfo();

	if(!$contaP1->depositar(600)){
		echo "ERRO AO REALIZAR DEPÓSITO!\n";
	}else{
		echo "DEPOSITO REALIZADO COM SUCESSO!\n";
	}

	echo "SALDO DA CONTA POUPANÇA R$: " . $contaP1->getSaldo() ."\n";

	if(!$contaP1->retirar(100)){
		echo "NÃO FOI POSSÍVEL REALIZAR A RETIRADA!\n";
	}else{
		echo "RETIRADA REALIZADA COM SUCESSO!\n";
	}
	echo "SALDO DA CONTA POUPANÇA R$: " . $contaP1->getSaldo() ."\n\n";

	$contaC1 = new ContaCorrente('666', '003-2', 1000, 2500);
	echo $contaC1->getInfo();
	echo "SALDO R$: " . $contaC1->getSaldo() . " - LIMITE: R$: " . $contaC1->getLimite() .  "\n";
	if(!$contaC1->depositar(900)){
		echo "ERRO AO REALIZAR DEPÓSITO!\n";
	}else{
		echo "DEPOSITO REALIZADO COM SUCESSO!\n";
	}
	echo "SALDO DA CONTA CORRENTE R$: " . $contaC1->getSaldo() . "\n";
	if(!$contaC1->retirar(700)){
		echo "NÃO FOI POSSÍVEL REALIZAR A RETIRADA!\n";
	}else{
		echo "RETIRADA REALIZADA COM SUCESSO!\n";
	}
	echo "SALDO DA CONTA CORRENTE R$: " . $contaC1->getSaldo() . "\n";