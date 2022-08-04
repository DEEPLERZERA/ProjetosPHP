<html>
 <head>
 </head>
 <body>
 	<form method="post">  
 			Nome 1: 
			<input type="text" name="nome1" /><br/> 
			Nome 2:
			<input type="text" name="nome2" /><br/>
			<input type="submit" value="OK" >

 	</form>
 	<?php 
	
	$nome1 = $_POST['nome1'];
	$nome2 = $_POST['nome2'];
	echo "O conteúdo de NOME1 é: " . $nome1 . "<br/>";
	echo "O conteúdo de NOME2 é: " . $nome2;

?>
 </body>
 </html>

