<?php

	/*
		Estudo sobre o conceito de agregação no paradigma orientado a objetos.
		@author: mateus "o estrangeiro" almeida
		@date: 01/2025
	*/

	require_once __DIR__ . '/classes/Fabricante.php';
	require_once __DIR__ . '/classes/Produto.php';


	// A criação dos objetos

	$prod1 = new Produto('Pendrive', 256, 30);
	$fab1 = new Fabricante('MultiTech', 'Rua Lá Aculá', '00-0011');

	$prod1->setFabricante($fab1);

	echo "Descrição do produto: ". $prod1->getDescricao() . "\n";
	//Através de um metodo, eu consigo acessar um outro método em outra classe
	//Simplesmente lindo e sucinto
	echo "Fabricante: ". $prod1->getFabricante()->getNome() . "\n";
	echo "Endereço do fabricante: ". $prod1->getFabricante()->getEndereco() . "\n";
