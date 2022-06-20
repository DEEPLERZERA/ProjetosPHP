<?php

$nota1 = 6;  //Atribuindo variáveis
$nota2 = 9;
$nota3 = 7.5;
$media = ($nota1 + $nota2 + $nota3)/3; //Calculando média
if($media >= 9) {  //Fazendo verificações
	$conceito = "A"; //Atribuindo variáveis de acordo com condicional
}
elseif($media >= 7.5) {
	$conceito = "B";
}
elseif($media >=5) {
	$conceito = "C";
}
else {  //Se não faça por último
	$conceito = "D";
}

echo "Média: " . $media. " -Conceito: " .$conceito;  //Imprima na tela





?>