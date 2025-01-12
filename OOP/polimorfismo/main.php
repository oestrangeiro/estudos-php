<?php

	require_once __DIR__ . '/classes/ContaPoupanca.php';
	require_once __DIR__ . '/classes/ContaCorrente.php';

	// Estudo sobre sobre polimorfismo

	/*
		Temos uma super classe Conta e em seguida duas classes
		que herdam os métodos e atributos da classe-pai:
		ContaCorrente e ContaPoupanca.
		Veja que cada uma adota comportamentos diferentes.
		Isso é a magia do polimorfismo:
		Duas classes herdam de uma classe comum, mas são
		totalmente diferentes entre sí.
	*/
	
	$contas = array();
	$contas[] = new ContaCorrente('00123-8', 'CC.9991-0', 900, 1000);
	$contas[] = new ContaPoupanca('00123-8', 'CPP.4431-0', 900);
	
	//print_r($contas);

	// Agora vamos fazer uma série de retiradas nas duas contas
	// e observar como as duas contas se comportam de maneiras diferentes

	foreach($contas as $conta){

		echo "\n" . $conta->getInfo();
		echo "Saldo atual: {$conta->getSaldo()}\n\n";
		echo "***DEPOSITANDO R$: 100,00\n";
		$conta->depositar(100);
		echo "Saldo atual: {$conta->getSaldo()}\n\n";

		// Aqui nesse laço tento realizar diversos saques consecutivos
		$i = 7;
		while($i != 0){
			if($conta->retirar(300)){
			echo "***SACANDO R$: 300,00\n\n";
			}else{
				echo "***SACANDO R$: 300,00 (Não permitido)\n";
			}
			echo "Saldo atual: R$: {$conta->getSaldo()}\n";
			$i--;
		}
		
		// Aqui, após as tentativas de saques, printo o saldo da conta
		echo $conta->getInfo();
		echo "Saldo atual: R$: {$conta->getSaldo()}\n";
		echo "--------------------------------------\n";
	}
