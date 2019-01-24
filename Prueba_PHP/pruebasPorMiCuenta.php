<html>
<head>
    <meta charset="utf-8"/>

    <title>Prueba por mi cuenta</title>
</head>
<body>
<h1>FUNCIONA</h1>

<?php

	$ropa = array();

	function calcularPrecioTienda($precioCompra)
	{
		$precioTotal = 0;
		if ($precioCompra < 30) {
			echo "<p>Compra más o te cobraremos los abusivos 30 euros de gastos de envío</p>";

		} else if (30 < $precioCompra && $precioCompra < 90) {
			$precioCompra = 90 - $precioCompra;
			echo "<p>Te falta " . $precioCompra . " € para llegar a 90€</p>";
		} else {
			echo "<p>Gracias por realizar una compra superior a 90€</p>";
		}
	}

	calcularPrecioTienda(150);

?>


<?php
	function contar()
	{

		for ($i = 1; $i <= 100; $i++) {
			echo $i;
			echo "<br>";
		}
	}

	function contarHastaValorAleatorio()
	{
		$valor = rand(1, 100);
		$inicio = 1;
		while ($inicio <= $valor) {
			echo $inicio;
			echo "<br>";
			$inicio++;
		}
	}

	//contarHastaValorAleatorio();

	function tablaMultiplicar()
	{

		for ($i = 0; $i < 10; $i++) {
			echo "<table>";
			echo "<td>";
			echo "<h3> Tabla del ".$i."</h3>";
			for ($j = 0; $j < 10; $j++) {
                echo "<tr><td>";
				echo $i . "x" . $j . "=" . ($i * $j);
				echo "</td></tr>";

			}

			echo "</td>";

		}
		echo "</table>";

	}

	tablaMultiplicar();

?>


</body>

</html>