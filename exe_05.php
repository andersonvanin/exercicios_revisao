<?php

	/*
	Criar um programa em php que receba um número inteiro maior que 0 e informe se esse número é primo ou não. Um número é considerado primo quando o mesmo é divisível por 1 e por ele mesmo sendo o resto da divisão 0.
	Exemplo:
	Número digitado: 17
	
	17/1 = 17 com resto 0
	17/17 = 1 com resto 0

	se dividirmos 17/2 = 8 com resto 1
	se dividirmos 17/3 = 5 com resto 2
	se dividirmos 17/4 = 4 com resto 1
	e assim por diante, verificamos que para obter resto 0, o número 17 só é divisível por 1 ou por ele mesmo, portanto 17 é um número primo.
	Todos os números primos são divisíveis sempre por dois números: por 1 e por ele mesmo.
	
	localhost/revisao/exe_05.php?num=17
	
	*/

  	$numero = $_GET['num'];
  	$qtde = 0; //essa variavel vai receber a quantidade de números em que o resto da divisão foi igual a 0

  	for ($i = 1; $i <= $numero; $i++) {
  	/*a variável $i representa o divisor. A cada incremento do $i será feita a divisão de $num / $i e será verificado se o resto dessa divisão é igual a 0, se for, a variavel $qtde é incrementada de 1 
	*/
  		if ($numero % $i == 0) {
  		$qtde++;  			
  		}
  	}	
  	/*
	O próximo passo é verificar se o valor da variável $qtde é igual a 2, pois segundo a regra números primos são divisíveis sempre por dois números: por 1 e por ele mesmo.
  	*/	

	if ($qtde == 2) {
		echo "O número $numero É PRIMO <br>";
	}
	else {
		echo "O número $numero NÃO É PRIMO <br>";
	}
?>