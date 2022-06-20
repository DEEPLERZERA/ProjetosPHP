<?php

$fruta = "limão";  //Declarando a variável

switch ($fruta) {   //Criando switch

case "maçã":  //Caso seja maça faça

echo "A fruta é maça";  //Imprima

break;  //Sai do loop com break

case "abacate":   //Caso seja abacate faça

echo "A fruta é abacate";  //Imprima

break;  //Quebre o loop e saia

case "limão":

echo "A fruta é limão";

break;

default: //Caso  não seja nenhum destes faça
	echo "Variável inexistente";  //Imprime na tela e só alegrias


}