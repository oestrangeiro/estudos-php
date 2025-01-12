<?php
	/*
		8) Escreva uma classe Pessoa que representa uma pessoa numa árvore
	genealógica. A pessoa possui um nome, um pai e uma mãe (que também
	são pessoas). Forneça os seguintes membros para a classe:

		a) Construtores sobrecarregados que:
		i) inicialize o nome da pessoa, bem como seus antecessores (pai e mãe);
		ii)inicialize o nome da pessoa, e coloque seus antecessores para null;

		b) Um método que verifique a igualdade semântica entre duas pessoas (as pessoas são iguais se possuem o mesmo nome e a mesma mãe);

		c) Um método que verifique se duas pessoas são irmãs;

		d) Um método que verifique se uma pessoa é antecessora da pessoa que recebeu a mensagem (é seu pai ou sua mãe, ou antecessor do pai ou antecessor da mãe).
		
	*/

	require_once 'classes/Pessoa.php';

	$p1 = new Pessoa('Mateus', 'Joelson', 'Luiza');
	$p2 = new Pessoa('Maria', 'Carlos', 'Luiza');

	$status = Pessoa::mesmasPessoas($p1, $p2);

	if(!$status){
		echo "As pessoas {$p1->getName()} e {$p2->getName()} não sofrem de igualdade semântica!\n";
	}else{
		echo "As pessoas {$p1->getName()} e {$p2->getName()} sofrem de igualdade semântica!\n";	
	}
	


