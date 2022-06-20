<?php
    for($num = 2; $num <= 100; $num+= 2) {  //Criando laço de repetição

        echo($num. "". "<br>");  //Vai imprimindo na tela
        if($num % 10 == 0) {  //Agora se resto da divisão por 10 por 0 faça
          break;  //Saia do loop
        }
      
    }
?>

