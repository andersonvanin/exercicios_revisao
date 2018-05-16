<?php

	/*
	Na usina de Angra dos Reis, os técnicos analisam a perda de massa de um material
 	radioativo. Sabendo-se que este perde 25% de sua massa a cada 30 segundos. 
 	Criar um programa em php que calcule iterativamente e imprima o tempo
  necessário para que a massa deste material se torne menor que 0.10 gramas.
	
  O peso passado via url deve ser em gramas. Para esse exemplo passar o valor assim:

	localhost/revisao/exe_03.php?peso=10

	Nesse exemplo estamos passando um peso referente à 10 gramas.

	Se o material pesa 10g e perde 25% a cada 30 segundos, nos primeiros 30 segundos ele terá: 7,5g. Nos próximos 30 segundos terá: 5.625g. Nos próximos 30 segundos terá: 4.21875g. Nos próximos 30 segundos terá: 3.1641g. E assim por diante. Se pegarmos todos os incrementos de 30 segundos que foram aplicados teremos um tempo total de 510 segundos até que a massa desse produto seja menor que 0.1g.

	*/

  	$massa = $_GET['peso'];
  	$tempo = 0;

  	while ($massa >= 0.1) {
  	    $tempo += 30;
  	    $massa -= $massa * 0.25;
  	    echo "Tempo decorrido: " . $tempo . "<br>";
  	    echo $massa . "<br>";
  	}

  	echo "O tempo em segundos necessários para que a massa seja menor que 0.10 gramas é: <br>";
  	echo $tempo . " segundos";

?>