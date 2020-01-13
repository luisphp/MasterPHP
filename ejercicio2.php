<?php 
	
	$arreglo = array();

	while ( count($arreglo) < 121 ) {

		$valor = random_int(1, 500);
		
		array_push($arreglo, $valor);

	}

	foreach ($arreglo as $value) {
	
		echo $value."<br>";

	}

	





 ?>