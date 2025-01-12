<?php
	// Script que lê o conteudo de um diretorio e retona isso em um array

	$diretorio = '/';

	if(is_dir($diretorio)){
		echo "Listando os diretorios e arquivos:\n";
		$linhas = scandir($diretorio);
		foreach($linhas as $linha){
			echo "$linha\n";
		}
	}else{
		echo "'$diretorio' não é um diretório válido!\n";
	}
