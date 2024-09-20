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
?>
