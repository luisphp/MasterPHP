
<?php 

/*
	Programa que compruebe si una variable esta vacia  y en caso de que este vacia rellenarla con texto en minuscula, y mostrarlo en mayuscula y negrita 
*/

/*
	4- Crear un script en PHP que tenga 4 variables, array, otra tipo string, otra int y otra boolean y que imprima un mensaje segun el tipo de variable que sea.
*/
/*
	5- Crear un array que simule el contenido de la siguiente tabla

	ACCION - AVENTURA - DEPORTE

	GTA - ASSASING CREED - FIFA19

	CALL OF DUTY - CRASH BANDICOOT -  PES 19

	PUG - PRINCE OF PERSIA - MOTOgp19
*/	

	$tabla = array(
		"ACCION" => array("GTA 5", "CALL of DUTY", "PUGB"),

		"AVENTURA" => array("ASSASING CREED" , "CRASH", "PES19"),

		"DEPORTE" => array("FIFA19", "PES19", "MOTOgp19")

	);

	//echo var_dump($tabla);

	$categorias = array_keys($tabla);






 ?>

 	<table>
 		
 		<thead>
 			<tr>
 				<?php foreach ($categorias as $categoria) {
 					echo $categoria." - ";
 				} ?>
 			</tr>
 		</thead>
 		<tbody>
 			<tr>
 				<td>data</td>
 			</tr>
 		</tbody>
 	</table>



