<?php

	const DEFAULT_VALUE = 10;

	final Class Contador{
		protected int $value;

		public function __construct($value){
			// Se o caba teclar ENTER, o valor padrão vai ser 10
			if($value === ""){
				$this->value = DEFAULT_VALUE;	
			}else{
				$value = (int)$value;
				$this->value = $value;	
			}
			
		}

		public function incrementar(){
			$this->value++;
		}

		public function zerar(){
			$this->value = 0;
		}

		public function getValue(){
			return $this->value;
		}
	}