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

	// $p1 = new Pessoa('Mateus', 'Joelson', 'Luiza');
	// $p2 = new Pessoa('Maria', 'Carlos', 'Luiza');

	$p = new Pessoa('Mateus Almeida da Silva', 'Antonio José Pereira', 'Maria da Silva Almeida');

	$p2 = new Pessoa('Mateus Torres Pereira', 'Antonio José', 'Marcia Torres da Costa');

	$status = Pessoa::igualdadeSemeantica($p, $p2);

	if(!$status){
		echo "As pessoas {$p->getName()} e {$p2->getName()} não sofrem de igualdade semântica!\n";
	}else{
		echo "As pessoas {$p->getName()} e {$p2->getName()} sofrem de igualdade semântica!\n";	
	}
	
	$saoIrmas = Pessoa::saoIrmas($p, $p2);

	if(!$saoIrmas){
		echo "As pessoas {$p->getName()} e {$p2->getName()} não são irmãs!\n";
	}else{
		echo "As pessoas {$p->getName()} e {$p2->getName()} são irmãs!\n";
	}


