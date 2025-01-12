<?php

	// Script que grava linhas em um arquivo
	$filePath = '/tmp/log.txt';
	
	$fp = fopen($filePath, "w");

	fwrite($fp, "Avião sem asa\n");
	
	// O 8 é o argumento do tamanho da string,
	// logo, só será gravado 8 bytes da string passada
	fwrite($fp, 'Fogueira sem brasa', 8);
	fwrite($fp, PHP_EOL);
	fwrite($fp, 'Sou eu assim sem você', 10);
	fwrite($fp, PHP_EOL);

	// file_get_contents lê o conteudo de um arquivo
	// e retorna o conteudo em uma string

	$result = file_get_contents($filePath);
	
	echo "Caminho do arquivo '$filePath'\n";
	echo "Uso da função file_gets_contents():";
	echo "Conteúdo do arquivo:\n";
	echo $result;
	echo "\n";

	// gambiarra pra olha o conteudo do arquivo
	//system('more /tmp/log.txt');
	
	//file retorna o conteudo de um arquvo
	$arr = file($filePath);
	echo "Uso da função file():\n";
	print_r($arr);

	echo "Uso da função file_exists():\n";
	if(file_exists($filePath)){
		echo "Arquivo existe\n";
	}else{
		echo "Arquivo não existe\n";
	}

	fclose($fp);
