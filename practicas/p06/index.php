<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Práctica 6</title>
</head>
<body>
    <h2>Ejercicio 1</h2>
    <p>Escribir programa para comprobar si un número es un múltiplo de 5 y 7</p>
    <?php 
        if(isset($_GET['numero']))
        {
            $num = $_GET['numero'];
            if ($num%5==0 && $num%7==0)
            {
                echo '<h3>R= El número '.$num.' SÍ es múltiplo de 5 y 7.</h3>';
            }
            else
            {
                echo '<h3>R= El número '.$num.' NO es múltiplo de 5 y 7.</h3>';
            }
        }
    ?> 
<h2>Ejercicio 2</h2>
<p>Crear un programa para la generación repetitiva de tres números aleatorios.</p>
<?php
require 'src/funciones.php';
	get_rnum();

?>

<h2>Ejercicio 3</h2>
<p>Utiliza un ciclo while para encontrar el primer número entero obtenido aleatoriamente, pero que además sea múltiplo de un número dado.</p>
<?php
	if(isset($_GET['multiplo']))
        {
				$num = $_GET['multiplo'];
				get_multiplo_w($num);
				echo "<p>do example</p><br>";
				get_multiplo_do($num);

		  }
	else {
		echo "<p>sin número dado</p>";
	}

?>
<h2>Ejercicio 4</h2>
<p>Crear un arreglo cuyos índices van de 97 a 122 y cuyos valores son las letras de la ‘a’ a la ‘z’. Usa la función chr(n) que devuelve el caracter cuyo código ASCII es n para poner el valor en cada índice.</p>
<?php
	 print_array();
?>
<h2>Ejercicio 5</h2>
<p>Usar las variables $edad y $sexo en una instrucción if para identificar una persona de sexo “femenino”, cuya edad oscile entre los 18 y 35 años y mostrar un mensaje de bienvenida apropiado.</p>
	 <form action="http://localhost/tecweb/practicas/p06/src/funciones.php" method="post">
			<p>Sexo</p>
			<input type="radio" id="fem" name="sexo" value="femenino">
			<label for="fem">Femenino</label>
			<input type="radio" id="mas" name="sexo" value="masculino">
			<label for="mas">Masculino</label><br>
			<label for="edad">Edad</label>
			<input type="number" id="edad" name="edad" min="0" max="100">
			<input type="submit">
    </form>
    <br>
    <?php
        if(isset($_POST["sexo"]) && isset($_POST["edad"]))
        {
            echo $_POST["sexo"];
            echo '<br>';
            echo $_POST["edad"];
		  }
	 ?>
<h2>Ejercicio 6</h2>
<p>Crea en código duro un arreglo asociativo que sirva para registrar el parque vehicular de una ciudad.Finalmente crea un formulario simple donde puedas consultar la información.</p>
<ul>
<li>Por matricula de auto.</li>
<li>De todos los autos registrados.</li>
</ul>

	 <form action="http://localhost/tecweb/practicas/p06/src/funciones.php" method="post">
			<label for="edad">Ingrese matricula</label>
			<input type="text" id="matricula" name="matricula" >
			<label for="all">Todos los autos?</label>
			<input type="checkbox" id="all" name="all" value="all">
			<input type="submit">
    </form>
</body>
</html>
