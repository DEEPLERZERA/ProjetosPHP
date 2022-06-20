<?php 

	$myArrays = array(  //Criação de arrays
			'item_1',   //Atribuindo valores
			'item_2',   
			'item_3',
			'item_4',
			'item_5',
			'item_6',

		
			);
	
		
			foreach($myArrays as $keyItem => $ValueItem) {  //Percorre cada item da MyArrays e atribui a keyItem e depois passa os valores ao ValueItem

					echo "Item índice: " . $keyItem . ", Valor: ". $ValueItem;  //Imprime valores de keyItem e ValueItem
					echo "<br>";

			}




?>
