<html>
 <head>
 </head>
 <body>
 	<form method="post">  
 			Número: <br/>
			<input type="text" name="x" /><br/> <br/>
			<input type="submit" value="Enviar" /> 
 	</form>
 	<?php 
	
	
	if ($_POST['x'] % 2 == 0) {
		echo "<b><i><font color=\"#0000ff \">É par" . " e o número é: ". $_POST['x'] . "</b></i></font>";
	} else {
		echo "<b><i><font color=\"#FF0000\">É impar" . " e o número é: " . $_POST['x'] . "</b></i></font>";
	}

?>
 </body>
 </html>

