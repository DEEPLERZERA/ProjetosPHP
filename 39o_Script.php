<!DOCTYPE html>
<html>
<head>
<title>Média</title>
</head>
<body>

<h1>Armazenar dados nas variáveis, tirar a média e
testar situação do aluno!</h1>  

<?php 

    $notaprova = 5.9;  //Atribuindo variaveis
    $notatrab = 6.1;
    $media = ($notaprova + $notatrab)/2;  //Calculando média

    echo "A nota da prova foi: " .$notaprova. "</br>";  //Imprimindo na tela

    echo "A nota do trabalho foi: " .$notatrab. "</br>";
    
    if($media >= 6.0) {  //Fazendo verificadores

      echo "A média do aluno é: " .$media. " Foi aprovado!!!";  //Imprimindo!

    }

    else {

      echo "A média do aluno é: " .$media. " Foi reprovado!!!";
    }


    
    
     
    
      ?>
    

</body>
</html>





