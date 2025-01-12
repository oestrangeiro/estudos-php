<?php

	// Estudo sobre a criação e manipulação de arrays

	// Array com nome de frutas distintas
	$frutas = array(
		'Maçã', 'Abacate', 'Uva',
		'Melancia', 'Banana', 'Laranja'
	);

	// Array com dados referentes a UM jogo
	$jogo = array(
		'nome' => 'Super Mario 64',
		'lancamento' => '1996',
		'plataforma' => 'Nintendo 64'
	);


	// Exibindo dados:
	echo "Frutas disponivéis na loja:\n";
	
	foreach($frutas as $fruta){
		echo "{$fruta}, ";
	}
	
	echo "\n\nJogo disponivel na prateleira:\n";
	foreach($jogo as $caracteristicas => $dados){
		echo strtoupper($caracteristicas) . ": " . strtoupper($dados) . "\n";
	}
