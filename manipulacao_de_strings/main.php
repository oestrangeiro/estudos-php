<?php

	// manipulação de strings

	// Uso das funções strtoupper e strtolower
	$msg = 'Ola! Esse eh um mero exemplo de texto!';

	echo "Mensagem: '{$msg}'\n";
	echo "Uso da função strtoupper():\n>>: " . strtoupper($msg) . "\n";
	echo "Uso da função strtolower():\n>>: " . strtolower($msg) . "\n";

	echo "\n\n";

	// Uso da função substr: Retorna uma parte da string,
	// onde o primeiro argumento é a própria string,
	// o segundo é o INICIO do corte,
	// e o terceiro, se passado, será o TAMANHO do corte

	$dado = "Estofados";
	echo "Dado: {$dado}\n";
	echo "Uso da função substr($dado, 3):\n>>: " . substr($dado, 3) . "\n";
	echo "Uso da função substr($dado, 3, -2):\n>>: " . substr($dado, 3, -2) . "\n";
	echo "Uso da função substr($dado, 3, 2):\n>>: " . substr($dado, 3, 2) . "\n";

	echo "\n\n";

	// Uso da função str_repeat: repete uma string por um numero
	// determinado de vezes

	$texto = ' (ô_0) ';
	echo "Texto a ser repetido: {$texto}\n";
	echo "Uso da função str_repeat($texto, 5):\n>>: " . str_repeat($texto, 5) . "\n";
	
	echo "\n\n";


	// Uso da função str_replace: Substitui uma string (primeiro parametro),
	// por uma outra (segundo parametro), em um dado contexto (terceiro parametro)

	$umaRumaDeTexto = "
		Em minha terra tem palmeiras,
		Onde canta o sabiá,
		E os pássaros que aqui gorjeiam,
		Não gorjeiam com lá.";

	echo "String a ser subtituida: {$umaRumaDeTexto}\n";
	echo "Uso da função str_replace('o', 'x', \$umaRumaDeTexto)\n>>: " . str_replace('o', 'x', $umaRumaDeTexto) . "\n";
