<?php

$n=5; //Cria variável

$i = $fat = 1;  //Atribui 1 a fat e passa isso a i

do {  //faça

$fat *= $i++;  //Multiplicação de fat com i que sempre está incrementando a cada passo do loop

} while ($i <= $n); //Enquanto i menor igual a n

echo "O fatorial do número $n é $fat."; //Imprima na tela

?>