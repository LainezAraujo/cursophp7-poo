<?php 

	class Pessoa{

		public $nome;//Atributo

		public function falar(){//Método

			return "O meu nome é ". $this-> nome;

		}

	}
$lainez = new Pessoa();
$lainez -> nome = "Lainêz Araujo";
echo $lainez-> falar();


 ?>