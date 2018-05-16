<?php

	/*
	Criar um programa em php que imprima a tabuada de um número digitado via url. A impressão do resultado deve ficar conforme o modelo apresentado abaixo:

	Número digitado: 5
	5 x 1 = 5
	5 x 2 = 10
	5 x 3 = 15
	...
	5 x 10 = 50

	localhost/revisao/exe_01.php?num=5
	
	*/

  	$numero = $_GET['num'];
  	
  	for ($i = 1; $i <= 10; $i++) {
  		
  		$resultado = $i * $numero;

  		echo "$numero * $i = $resultado <br>";
  	}

?>