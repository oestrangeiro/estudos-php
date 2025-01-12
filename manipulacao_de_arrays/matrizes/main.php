<?php

	function listar_jogos(array $jogos): void{
		// Acessando os elementos:
		foreach($jogos as $jogo => $caracteristicas){
			echo "JOGO: " . $jogo . "\n";

			foreach($caracteristicas as $k => $v){
				echo "{$k}: {$v}\n";
			}
			echo "-----------------------\n";
		}

	}

	// Estudo sobre matrizes


	// Declarando uma matriz
	$jogos = array(
	
		'Mario And Luigi Supe Star Saga' => array(
			'lancamento' => '2004',
			'plataforma' => 'GameBoy Advance',
			'preco' => 65.99
		),

		'Doom II' => array(
			'lancamento' => '1996',
			'plataforma' => 'PC',
			'preco' => 100
		),

		'Mineirinho Adventures' => array(
			'lancamento' => '2015',
			'plataforma' => 'PC',
			'preco' => 'Nem de graça'
		),
	);

//	print_r($jogos);



	echo "\n\n";

	// Uso da função array_merge(): Adiciona array no inicio do array
	$novoJogo = array(
		"The Legend Of Zelda: Minish Cap" => array(
			'lancamento' => '2005',
			'plataforma' => 'GameBoy Advance',
			'preco' => 40	
		)
	);

	$jogos = array_merge($novoJogo, $jogos);

	listar_jogos($jogos);
