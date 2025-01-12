<?php
	
	final class Pessoa{
		protected $antecessores;
		protected string $nome;

		public function __construct(string $nome, ...$antecessores){
			
			$this->nome = $nome;

			if(!isset($antecessores)){

				$this->antecessores = NULL;

			}else{

				$this->antecessores = array();
				// Aqui eu coloco os pais da pessoas em um array
				// de objetos do tipo Pessoa
				foreach($antecessores as $antecessor){

					$this->antecessores[] = new Pessoa ($antecessor);

				}
			}
		}

		public function getName(){
			return $this->nome;
		}

		public static function mesmasPessoas(Pessoa ...$pessoas){
			/*
				Para cada objeto do tipo Pessoa, eu vou iterar e armazenar o
				nome dos pais (que são cada qual um objeto do tipo Pessoa também).
				Logo em seguida, vou verificar se o nome da pessoa[0] e os nomes dos pais da pessoa[0] são iguais
			*/

			
			$nomesDasPessoas = array();
			foreach ($pessoas as $pessoa){
				$nomesDasPessoas[] = $pessoa->getName();
			}
			

			/*
				Verificando se as duas pessoas, primeiramente, possuem os mesmo nome.
				Caso não, encerra a rotina aqui mesmo.
			*/

			if($nomesDasPessoas[0] !== $nomesDasPessoas[1]){
				return false;
				die();
			}

			$paisDasPessoas = array();

			// Pegando os pais de cada objeto e colocando em um array
			foreach($pessoas as $pessoa){
				foreach($pessoa->antecessores as $pais){
					$paisDasPessoas[] = $pais->getName();
				}
			}

			/*
				Como cada pessoa tem um pai e uma mãe, vamos criar
				uma matriz onde cada index terá dois valores (pai e mãe).
				Basicamente eu vou pegar o array $paisDasPessoas e dividir
				em chunks de 2, depois colocar em um novo array
			*/ 

			$paisDasPessoas = array_chunk($paisDasPessoas, 2);

			/*
				Agora verificando se possuem a mesma mãe. Por convenção:
				O primeiro elemento é sempre o nome do pai e o segundo o nome
				da mãe
			*/
				
			if($paisDasPessoas[0][1] !== $paisDasPessoas[1][1]){
				
				return false;
			}
			// retorna true se tiverem o mesmo nome da mãe
			return true;
		}
	}