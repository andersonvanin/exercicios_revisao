<?php

	/*
	Chico tem 1,50m (150cm) e cresce 2 centímetros por ano, enquanto Juca tem 1,10m (110cm) e cresce 3 centímetros por ano. Construir um programa em php que calcule e imprima quantos anos serão necessários para que Juca seja maior que Chico.
	
	As alturas de Chico e Juca não precisam ser passadas via url. Podem ser atribuídas diretamente à duas varáveis no programa. Simplesmente rodar o programa e fazer com que seja exibida na tela quantos anos levará até que Juca seja maior que Chico.

	localhost/revisao/exe_02.php

	Nesse exemplo teremos algo como um sistema de equações. Veja:

	C => 150 + 2 * t
	J => 110 + 3 * t

	Onde C representa Chico, J representa Juca e t representa o tempo.

	A idéia é saber quando J será maior que C ( repetir até que J>C).

	Resolvendo matematicamente teremos:
	J > C
	110+3t > 150+2t
	3t-2t > 150 - 110
	t > 40
	ou seja, Juca será maior que Chico depois de 40 anos, ou seja, com 41 anos. 

	No primeiro ano Juca terá 113 cm e Chico terá 152 cm
	No segundo ano Juca terá 116 cm e Chico terá 154 cm
	No terceiro ano Juca terá 119 cm e Chico terá 156 cm
	No quarto ano Juca terá 121 cm e Chico terá 156 cm
	Até que após 41 anos:
	No segundo ano Juca terá 233 cm e Chico terá 232 cm

	*/

  	$juca = 110;
  	$chico = 150;
  	$tempo = 0;

  	while ($juca <= $chico) {
  	    $juca += 3;
  	    $chico += 2;
  	    $tempo += 1;
  	    echo "Tempo decorrido: " . $tempo . "<br>";
  	    echo "Altura do Juca: " .$juca . "<br>";
  	    echo "Altura do Chico: " .$chico . "<br>";
  	}

  	echo "O tempo necessário para que Juca seja maior que Chico é de: <br>";
  	echo $tempo . " anos";

?>