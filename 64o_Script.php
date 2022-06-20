<?php

  for($num = 0; $num < 10; $num++) {  //Cria laço de repetição

      if($num % 2 == 0) {  //Verifica se é par
          continue;  //Quebra laço de repetição 
      }
        echo $num."<br>";  //Imprime na tela
    
  }

?>