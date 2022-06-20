<!DOCTYPE html>
<head>
	<title>Script 17</title>
</head>
<body>
<?php
	$ds = array("domingo" , "segunda" , "terça" , "quarta" , "quinta" , "sexta" , "sábado");

	echo $ds[1];
	echo "</br>";
	echo $ds[date("w")];
	

?>
</body>