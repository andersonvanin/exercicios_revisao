<?php

	/*
	Criar um programa em php que receba dois números inteiros via url e informe quantos pares existem no intervalo entre esses dois números. Considere que o primeiro número sempre será menor que o segundo número.
	Exemplo:
	Primeiro número digitado: 5
	Segundo número digitado: 10
	5  = ímpar
	6 = par
	7 = ímpar
	8 = par
	9 = ímpar
	10 = par
	
	total de ímpares = 3
	total de pares = 3

	localhost/revisao/exe_04.php?num1=5&num2=10
	
	*/

  	$numero1 = $_GET['num1'];
  	$numero2 = $_GET['num2'];
  	$pares = 0;
  	$impares = 0;
  	
  	for ($i = $numero1; $i <= $numero2; $i++) {
  		
  		if ($i%2 == 0) {
  			$pares += 1;  			
  		}
  		else{
  			$impares += 1;
  		}
  	}

  	echo "O primeiro número digitado é: $numero1 <br>";
  	echo "O segundo número digitado é: $numero2 <br>";
  	echo 'Total de números pares = '.$pares."<br>";
  	echo 'Total de números ímpares = '.$impares."<br>";

?>