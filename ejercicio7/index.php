<?php 
/*
Escribir código PHP que inicialice un arreglo con los números del 1 al 365.
Determine a que mes pertenece el día del año. Y luego calcule cuántos días faltan 
para que se acabe el año con cada día del año, y muestre el mensaje “Falta poco para el año nuevo” 
solo si faltan menos de 5 días.
*/

	$arr_num = array();

	for ($i=0; $i <365 ; $i++) { 
		$arr_num[$i]= $i + 1;
	}


	if($_SERVER['REQUEST_METHOD'] == 'POST'){
			$dia = $_POST['num'];

		if ($dia >=1 && $dia <=31) {
			echo "Enero";
		}elseif ($dia >=32 && $dia <=59) {
			echo "Febrero";
		}elseif ($dia >=60 && $dia <=90) {
			echo "Marzo";
		}elseif ($dia >=91 && $dia <=120) {
			echo "Abril";
		}elseif ($dia >=121 && $dia <=151) {
			echo "Mayo";
		}elseif ($dia >=152 && $dia <=181) {
			echo "Junio";
		}elseif ($dia >=182 && $dia <=212) {
			echo "Julio";
		}elseif ($dia >=213 && $dia <=243) {
			echo "Agosto";
		}elseif ($dia >=244 && $dia <=270) {
			echo "Septiembre";
		}elseif ($dia >=271 && $dia <=304) {
			echo "Octubre";
		}elseif ($dia >=305 && $dia <=334) {
			echo "Noviembre";
		}elseif ($dia >=335 && $dia <=365) {
			echo "Diciembre";
			calcular_dias($dia);
		}

	}
	
	
	//print_r($arr_num);

	function calcular_dias($dias) {
		$calcular = 365 - $dias;
		if ($calcular >= 360 && $calcular <= 365) {
			echo "Falta poco para el año nuevo";
		}
	}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Ejercicio 7</title>
</head>
<body>

	<form action="index.php" method="POST">
		<div>
			<input type="text" name="num">
		</div>
		<div>
			<input type="submit" name="btn_enviar" value="enviar">
		</div>

	</form>
	<?php  ?>

</body>
</html>