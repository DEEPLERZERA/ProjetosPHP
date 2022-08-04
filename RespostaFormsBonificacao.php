<?php
	$meses = $_POST['meses'];
	$salario = $_POST['salario'];
	$bonus = $_POST['bonus'];
	echo "Mês &nbsp &nbsp &nbsp  Salário &nbsp &nbsp &nbsp SálarioComBonus";
	for ($x = 0; $x <= $meses; $x++) {
		$calc = $salario + $bonus;
		echo $x . "<br>";
		echo "&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  " . $salario . "<br>";
		echo "&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp" . $calc . "<br>";
		$salario = $calc;

	}



?>