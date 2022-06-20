<?php
    for($num = 0; $num <= 50; $num++) {  //Criando laço de repetição

        if($num % 2 == 0) {  //Agora se resto da divisão por 2 for 0 faça
          continue;  //Ignora esse loop e inicia nova iteração
        }
       echo($num. "". "<br>");  //Vai imprimindo na tela
      
    }
?>
