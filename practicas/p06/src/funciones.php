<?php
function get_rnum() {
	$end = false;
	$m=0;
	$arreglo;
	while ($end != true) {
		$a = rand(0,500);
		$b = rand(0,500);
		$c = rand(0,500);
		echo $a." ".$b." ".$c;
		echo "<br>";
		$m++;
		$arreglo[] = array($a,$b,$c);
		if ($a%2==0 && $b%2==1 && $c%2==0) {
			echo $m*3, " números obtenidos en $m iteraciones";
			return;
		}
	}
}
function get_multiplo_w($multiplo) {
	while (true) {
		$a= rand(0,500);
		if($a%$multiplo==0) {
			echo "el número encontrado es: $a";
			return;
		}
	}
}
 function get_multiplo_do($multiplo) {
	do {
		$a= rand(0,500);
		if($a%$multiplo==0) {
			echo "el número encontrado es: $a";
			return;
		}
	} while (true);
}

function print_array() {
	$papas = array();
	for ($i=97; $i < 122; $i++) { 
		$papas += array($i => chr($i));

	}
	foreach ($papas as $key => $value) {
		echo $value;
		echo "<br>";
	}
}
echo "<!DOCTYPE html><html lang=\"en\"><head><meta charset=\"UTF-8\"><meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\"><title>Práctica 6</title></head><body>";

if(isset($_POST["edad"]) && isset($_POST["sexo"]))
{
	$edad = $_POST["edad"];
	$sexo = $_POST["sexo"];

	if ($sexo == "femenino" && $edad > 17 && $edad < 35) {
	echo "<h1>¡Bienvenida querida usuaria autorizada!</h1>";
	} else {
		echo "<h1>Acceso denegado</h1>";
	}
}

$registros = array();
for ($i=0; $i < 15; $i++) { 
	$marcas = array(
		 "Toyota",
		 "Ford",
		 "Chevrolet",
		 "Honda",
		 "BMW",
		 "Mercedes-Benz",
		 "Audi",
		 "Nissan",
		 "Volkswagen",
		 "Hyundai",
		 "Kia",
		 "Mazda",
		 "Subaru",
		 "Tesla",
		 "Ferrari"
	);
	$nombresCompletos = array(
		 "Carlos García",
		 "María Fernández",
		 "Juan Martínez",
		 "Sofía López",
		 "Pedro Rodríguez",
		 "Lucía González",
		 "Andrés Pérez",
		 "Ana Sánchez",
		 "Javier Romero",
		 "Elena Torres",
		 "Roberto Jiménez",
		 "Laura Ramírez",
		 "Diego Morales",
		 "Valeria Castillo",
		 "Mateo Herrera"
	);
	$ciudadesMexico = array(
		 "Ciudad de México",
		 "Guadalajara",
		 "Monterrey",
		 "Puebla",
		 "Tijuana",
		 "Mérida",
		 "Cancún",
		 "León",
		 "Querétaro",
		 "Toluca",
		 "Chihuahua",
		 "San Luis Potosí",
		 "Aguascalientes",
		 "Veracruz",
		 "Morelia"
	);
	$matriculas = array(
		 "ABC1234",
		 "DEF5678",
		 "GHI9012",
		 "JKL3456",
		 "MNO7890",
		 "PQR1234",
		 "STU5678",
		 "VWX9012",
		 "YZA3456",
		 "BCD7890",
		 "EFG1234",
		 "HIJ5678",
		 "KLM9012",
		 "NOP3456",
		 "QRS7890"
	);
	$direcciones = array(
		 "Calle Reforma 123, Colonia Centro",
		 "Calle Insurgentes 456, Colonia Roma",
		 "Calle Juárez 789, Colonia Polanco",
		 "Calle Hidalgo 101, Colonia Condesa",
		 "Calle Morelos 234, Colonia Del Valle",
		 "Calle Allende 567, Colonia Narvarte",
		 "Calle Zaragoza 890, Colonia Coyoacán",
		 "Calle Madero 112, Colonia Lindavista",
		 "Calle Iturbide 334, Colonia Escandón",
		 "Calle Matamoros 556, Colonia Anáhuac",
		 "Calle Guerrero 778, Colonia Santa Fe",
		 "Calle Victoria 990, Colonia Tlatelolco",
		 "Calle Pino Suárez 212, Colonia Mixcoac",
		 "Calle Venustiano Carranza 434, Colonia San Ángel",
		 "Calle Independencia 656, Colonia Tacubaya"
	);

	$tipo = array("sedan", "hachback", "camioneta");

	$auto = array('marca' => $marcas[$i], 'modelo' => 2010+$i, 'tipo' => $tipo[$i%3] );
	$propietario = array('nombre' => $nombresCompletos[$i], 'ciudad' => $ciudadesMexico[$i], 'direccion' => $direcciones[$i]);
	$registro = array('matricula' => $matriculas[$i],'auto' => $auto, 'propietario' => $propietario);
	$registros[] = $registro;
}
//print_r($registros);

if(isset($_POST["all"]))
{
	echo "<h1>Todos los registros</h1>";
	foreach ($registros as $a) {
		echo "<b>";
		echo $a['matricula'];
		echo "</b>";
		echo "<br>&emsp;Auto:";
		echo $a['auto']['marca'];
		echo " ";
		echo $a['auto']['modelo'];
		echo "<br>&emsp;Propietario:";
		echo $a['propietario']['nombre'];
		echo " ";
		echo $a['propietario']['ciudad'];
		echo " ";
		echo $a['propietario']['direccion'];
		echo "<br>";
	}
}
if (isset($_POST["matricula"])) {
	$matricula =	$_POST["matricula"];
	foreach ($registros as $a) {
		if ($matricula == $a['matricula']) {
		echo $a['matricula'];
		echo $a['auto']['marca'];
		echo $a['auto']['modelo'];
		echo $a['propietario']['nombre'];
		echo $a['propietario']['ciudad'];
		echo $a['propietario']['direccion'];
		}
	}
}
	echo "</body></html>";
?>
