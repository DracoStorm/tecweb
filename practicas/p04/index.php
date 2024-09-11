
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title>Práctica 3</title>
</head>
<body>
	<h2>Ejercicio 1</h2>
	<p>Determina cuál de las siguientes variables son válidas y explica por qué:</p>
	<p>$_myvar,  $_7var,  myvar,  $myvar,  $var7,  $_element1, $house*5</p>
	<?php
		//AQUI VA MI CÓDIGO PHP
		$_myvar;
		$_7var;
		//myvar;       // Inválida
		$myvar;
		$var7;
		$_element1;
		//$house*5;     // Invalida

		echo '<h4>Respuesta:</h4>';   

		echo '<ul>';
		echo '<li>$_myvar es válida porque inicia con guión bajo.</li>';
		echo '<li>$_7var es válida porque inicia con guión bajo.</li>';
		echo '<li>myvar es inválida porque no tiene el signo de dolar ($).</li>';
		echo '<li>$myvar es válida porque inicia con una letra.</li>';
		echo '<li>$var7 es válida porque inicia con una letra.</li>';
		echo '<li>$_element1 es válida porque inicia con guión bajo.</li>';
		echo '<li>$house*5 es inválida porque el símbolo * no está permitido.</li>';
		echo '</ul>';
	?>
	<h2>Ejercicio 2</h2>
	<p>Proporcionar los valores de $a, $b, $c</p>
	<ul>
	<li>a. Ahora muestra el contenido de cada variable</li>
	<li>b. Agrega al código actual las siguientes asignaciones:</li>
	<li>c. Vuelve a mostrar el contenido de cada uno</li>
	</ul>
<?php
	echo "<p>a)</p>";
	$a = "ManejadorSQL";
	$b = 'MySQL';
	$c = &$a;
	echo "<p>$a</p>";
	echo "<p>$b</p>";
	echo "<p>$c</p>";
	//b)
	$a = "PHP server";
	$b = &$a;
	echo "<p>c)</p>";
	echo "<p>$a</p>";
	echo "<p>$b</p>";
	echo "<p>$c</p>";
?>
	<p>Modificamos la variable <b>$a</b> de <i>ManejadorSQL</i> a <i>PHP server</i>. Dado que <b>$c</b> es una referencia a <b>$a</b>, esta refleja este cambio. Lo siguiente q hicimos fue convertir <b>$b</b> en otra referencia de <b>$a</b>, por consigiente muestra el mismo texto.</p>
<h2>Ejercicio 3</h2>
<p>Muestra el contenido de cada variable inmediatamente después de cada asignación, verificar la evolución del tipo de estas variables (imprime todos los componentes de los arreglo):</p>
<?php
	$a = "PHP5";
	echo "<p>$a</p>";
	echo "<p>".var_dump($a)."</p>";
	$z[] = &$a;
	echo "<p>$z</p>";
	echo "<p>".var_dump($z)."</p>";
	$b = "5a version de PHP";
	echo "<p>$b</p>";
	echo "<p>".var_dump($b)."</p>";
	$c = $b*10;
	echo "<p>$c</p>";
	echo "<p>".var_dump($c)."</p>";
	$a .= $b;
	echo "<p>$a</p>";
	echo "<p>".var_dump($a)."</p>";
	$b *= $c;
	echo "<p>$b</p>";
	echo "<p>".var_dump($b)."</p>";
	$z[0] = "MySQL";
	echo "<p>$z</p>";
	echo "<p>".var_dump($z)."</p>";
?>
</body>
</html>
