<?php

	$funcionario = array(  //Criando array funcionario
		array(1, "João Paulo", "RH", 12000),  //Declarando atributos dos funcionarios
		array(2, "Ana Beatriz", "TI", 18000),
		array(3, "Pedro Paulo", "PCP", 10000),
		array(4, "Maria Rosa", "RH", 8000),
		array(5, "Carlos Silva", "Compras", 16000),
		array(6, "Rosana Alves", "DIRETORIA", 22000),
		array(7, "João Mattos", "FINANCEIRO", 18000)
		);
			
	
	foreach($funcionario as $chave => $valor) {   //Percorre cada pedaço do array e atribui valor de cada passo do loop na variável $valor
		echo "funcionario {$valor[0]}: &nbsp {$valor[1]} &nbsp <b> {$valor[2]} </b>";  //Imprime na tela funcionario e seus respectivo valor de acordo com passo do loop
		echo "<br>"; //quebra de linha

	}

	
?>