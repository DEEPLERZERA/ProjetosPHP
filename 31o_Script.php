<?php

	$funcionarios = array (

		array("nome" => "Ana Paula", "Idade" => 21, "Salario" => 1285.20, "Ativo" => true),
		array("nome" => "Rodolfo", "Idade" => 35, "Salario" => 3885.50, "Ativo" => false),
		array("nome" => "Pedro Paulo", "Idade" => 54, "Salario" => 5285.80, "Ativo" => true),


	);

	$bonificacao = 10;

	foreach($funcionarios as $funcionario) {

		if($funcionario["Ativo"]) {

			$funcionario["Salario"] += $funcionario["Salario"] * ($bonificacao/100);

			echo "Funcionario: {$funcionario["nome"]} - {$funcionario["Salario"]} </br>";

		} else {

			echo "Funcionario: {$funcionario["nome"]} - <b><i> inativo </b> </i> </br>";
		}


	}
	

?>