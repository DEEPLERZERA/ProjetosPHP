<DOCTYPE HTML>
 <html>
   <head>
    <title>BRUUH</title>
   </head>
   <body> 
    <?php 

    $nome = "Daniel"; //Criando variaveis
    $idade = 15;
    $nota = 8.5;
    $status = true;
   
     
          if(is_string($nome)) {
              echo "A variavel é string";
              echo "<br>";

          }
          else {
            echo "A variavel não é String";
          }

          var_dump(is_int($idade));
          echo "<br>";
          var_dump(is_float($nota));
          echo "<br>";
          var_dump(is_bool($status));

     
    
      ?>
    
   </body>
   </html>