<?php 

    $a = 2021;  //Atribuindo variaveis
    $b = '2021';
 


    if($a == $b) {   //Criando verificador
        echo " Foi feito uma comparação entre as duas variáveis e: " .$a.  " é igual a " .$b. "</br>";   //Imprimindo na tela
        echo "O que o PHP interpretou foi que : " .$a. " é igual a " .$b. " , mesmo que
        o segundo esteja entre aspas.";
            
    }
    elseif( $a != $b) {  //Se não for faça

      echo $a. " É diferente de " .$b;  //Imprime na tela
    }
    
     
    
      ?>
    