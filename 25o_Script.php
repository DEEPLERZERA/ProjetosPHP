<?php 

	$funcionarios = array(   //Cria array

		array("Alex", 21, 1285.27,true),     //Atribuição de valores
		array("Emerson", 35, 3885.27,false),
		array("Osvaldo", 54, 5285.27,true),

			);

		echo $funcionarios[1][0] ."<br>";   //Imprimindo na tela valores de acordo com especificação de posição na matriz
		echo $funcionarios[2][3] ."<br>";
		echo $funcionarios[0][1] ."<br>";
		echo $funcionarios[0][0] ."<br>";






?>
