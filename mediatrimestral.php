<?php
	$nome = $_POST['nome'];
	$n1 = $_POST['n1'];
	$n2 = $_POST['n2'];
	$n3 = $_POST['n3'];
	$media = ($n1 + $n2 + $n3)/3;
	echo "<b><font size = 14><center>Apresentação dos dados	 </b><br></font></center>";
	echo "<center><b><font color=\"#6ca672\">Nome: $nome<br><br>Nota1: $n1<br><br>Nota2: $n2<br><br>Nota3: $n3<br><br>Média do aluno: $media</b></font></center>";




	?>