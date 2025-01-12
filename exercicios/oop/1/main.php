<?php

	require 'Classes/Contador.php';

	/*
		1) Escreva em Java uma classe Contador, que encapsule um valor usado
		para contagem de itens ou eventos. A classe deve oferecer métodos
		que devem:
			a) Zerar;
			b) Incrementar;
			c) Retornar o valor do contador.
	*/

	echo "Deseja instanciar o objeto com algum valor?\n";
	echo "Digite qualquer valor ou tecle [ENTER] para um valor padrão (10)\n";
	
	$value = readline();

	$cont = new Contador($value);

	$running = 1;
	$escolha = 0;
	// main loop do programa
	while($running){
		
		echo "O que você deseja fazer?:\n";
		echo "\t[0] Zerar contador\n";
		echo "\t[1] Incrementar\n";
		echo "\t[2] Obter valor atual\n\n";
		echo "\t[q] Encerrar Programa\n";

		$escolha = readline();

		if($escolha === 'q'){
			echo "bye!\n";
			break;
		}

		$escolha = (int)$escolha;
		switch($escolha){
			case 0:
				$cont->zerar();
				echo "Contador zerado!\n";
				break;
			case 1:
				$cont->incrementar();
				echo "Contador incrementado!\n";
				break;
			case 2:
				echo "Valor atual {$cont->getValue()}\n";
				break;
			default:
				echo "Por favor, informe um valor válido!\n";
				break;
		}

	}