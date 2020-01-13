<?php 
	
	$numeros =  array(11,12,54,67,49,100,99,63,24);

	echo $numeros[1]."<br><br>";


	echo "<br><br>"."Mostrar el arreglo"."<br><br>";

	foreach ($numeros as $numero) {
		

		echo $numero.'</br>';
	}

	echo "<br><br>"."Ordenar el arreglo"."<br><br>";

	asort($numeros);

	foreach ($numeros as $numer) {
	

		echo $numer.'</br>';

	}

	echo "<br><br>"."tamaño del arreglo"."<br><br>";

	echo count($numeros);

	echo "<br><br>"."Busqueda de un elemento en el array"."<br><br>";

	$buscado = 54;

	$search = array_search($buscado, $numeros);

	if( $search != false){

		echo "El numero: ".$buscado." , SI existe en el array<br>";

	}else{

		echo "El numero: ".$buscado." , NO existe en el arreglo<br>";
	}

	echo "<br><br>"."Busqueda de un elemento suministrado por la URL en el array"."<br><br>";

	$valor = $_GET['valor'];	

	var_dump(intval($valor));

	$search2 = array_search(intval($valor), $numeros);

	var_dump($search2);

	if( !is_bool($search2)){

		echo "El numero: ".intval($valor)." , SI existe en el array";

	}else{

		echo "El numero: ".intval($valor)." , NO existe en el arreglo";
	}




 ?>