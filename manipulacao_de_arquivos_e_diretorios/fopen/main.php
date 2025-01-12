<?php

	// Exemplo de script que lê o conteúdo de uma arquivo

	// A constante __FILE__ refere-se ao próprio código fonte
	$fd = fopen(__FILE__, "r");
	$linha = 1;

	while (!feof($fd)){
		$buffer = fgets($fd, 256); // Lê uma linha do arquivo
		if($linha > 1){
			echo $buffer;
		}
		$linha++;
	}

	// desaloca o ponteiro
	fclose($fd);
