<?php

	require_once __DIR__ . "/classes/Produto.php";
	require_once __DIR__ . "/classes/Orcamento.php";

	// Estudo sobre o uso e aplicação de interfaces

	$orcamento1 = new Orcamento();

	$orcamento1->adicionar(new Produto('Barra de Chocolate', 3.73, 100), 2);
	$orcamento1->adicionar(new Produto('Leite em Pó', 12, 100), 4);
	$orcamento1->adicionar(new Servico('Lavagem de moto', 50));
	$orcamento1->adicionar(new Servico('Corte de cabelo', 30), 2);
	$orcamento1->adicionar(new Servico('Faxina', 120));
	$orcamento1->adicionar(new Servico('Pintura da casa', 300));

//	print_r($orcamento1);

	$orcamento1->listar();
	echo "Total a pagar: R$: " . $orcamento1->calcularTotal() ."\n\n";