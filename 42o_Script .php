<?php
/**
 * XOR
 */

var_dump(7 == 7 XOR 9 > 7);  //Retorna false todas as expressões são verdadeiras
var_dump(7 == 7 XOR 9 < 7); //Retorna TRUE a primeira expressão é verdadeira

var_dump(7 < 7 XOR 9 > 7); // Retorna true a segunda é verdadeira
/**
 * !
 */
var_dump(!9 < 7);  //Retorna TRUE 9  não é menor do que 7
var_dump(!9 > 7);  //Retorna false 9 é maior do que 7

?>