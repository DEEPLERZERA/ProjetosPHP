<!DOCTYPE html>
<html>
<title>SLA</title>
<body>

<h1>Tabela funcionários e os seus departamentos</h1>



<table border = 8 align = center style = "HEIGHT:70%;WIDTH:50%;"> 
	<tr align="center" bottom="middle"><td>
		<table border = "1">


		<tr>
			<td>Nome </td>
			<td>Departamentos</td>
			<td>Salários</td>
			<td>Nivel</td>
			</tr>


			
  <?php
			$funcionarios = array(

	array(1, "João Paulo", "RH", 12000, "Iniciante"),
	array(2, "Ana Beatriz", "TI", 18000, "Avançado"),
	array(3, "Pedro Paulo", "PCP", 10000, "Intermediário"),
	array(4, "Maria Rosa", "RH", 8000, "Iniciante"),
	array(5, "Carlos Silva", "COMPRAS", 16000, "Deus"),
	array(6, "Rosana Alves", "DIRETORIA", 22000, "Avançado"),
	array(7, "João Mattos", "FINANCEIRO", 18000, "Iniciante"),
	array(8, "Andrey Pichuti", "TI", 500000, "DEUS")

);

	foreach ($funcionarios as $key => $valor) {
		echo "<tr><td>{$valor[1]}</td> <td>{$valor[2]}</td> <td>{$valor[3]}</td> <td>{$valor[4]}</td>";
	}




?>







	</table>

<br>
<br>
	<table border = 0 align = center style = "HEIGHT:50%;WIDTH:50%;"> 
	<tr align="center" bottom="middle"><td>
		<table border = "1">


		<tr>
			<td>Produto </td>
			<td>Tipo</td>
			<td>Preco</td>
			<td>estilo</td>
			</tr>


			
  <?php
			$produtos = array(

	array(1, "Coca-cola", "Bebida", 3, "Refrescante"),
	array(2, "Calça do Andrey", "Roupa", 5500, "Andrey"),
	array(3, "Farofa", "Diversos", 10000, "Baiano"),
	array(4, "Aula do luis", "Chato", 160000, "Sua mãe"),
	array(5, "Carlos Silva", "COMPRAS", 16000, "Deus"),
	array(6, "Rosana Alves", "DIRETORIA", 22000, "Avançado"),
	array(7, "João Mattos", "FINANCEIRO", 18000, "Iniciante"),
	array(8, "Andrey Pichuti", "TI", 500000, "DEUS")

);

	foreach ($produtos as $key => $valor) {
		echo "<tr><td>{$valor[1]}</td> <td>{$valor[2]}</td> <td>{$valor[3]}</td> <td>{$valor[4]}</td>";
	}




?>







	</table>







</body>
</html>


