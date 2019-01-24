<html>
<head>
    <style>
        h1 {
            font-size: 3em;
            text-decoration: underline;
        }
    </style>
    <title>Prueba PHP</title>
</head>

<body>
<?php

function holaMundo($nombre)


{
    echo "Buenos dias " . $nombre . "(TAMAÑO DEL NOMBRE => " . strlen($nombre) . ")";
}

holaMundo("Pepe");

// Recorrer una matriz
$matriz = array(
    array(3, 6, 1, 9),
    array(6, 8, 1, 2),
    array(5, 4, 2, 7)
);
//Recorrer por filas.


function recorrerPorFilas($array)
{
    echo "<br>";
    for ($i = 0; $i < count($array); $i++) {
        $acomuladoFila = 0;
        for ($j = 0; $j < count($array[$i]); $j++)
            $acomuladoFila += $array[$i][$j];
        echo "suma fila " . ($i + 1) . "=" . $acomuladoFila . "<br>";
    }
}

function recorrerPorFilas1($array)
{
    echo "ESTAMOS RECORRIENDO CON FOREACH";
    $acomulado = 0;
    foreach ($array as $k => $v) {
        $acomulado = $v;
    }
    echo $acomulado;
}

recorrerPorFilas($matriz);
recorrerPorFilas1($matriz);


echo "<h1>Bienvenido a PHP</h1> </br><hr>";
$assoc = array(
    "nif" => "54133395C",
    "edad" => 25,
    "soltero" => true,
    "descuento" => 12.5
);

$diasSemana = ["lunes", "martes", "miercoles", "jueves", "viernes", "sabado", "domingo"];

foreach ($diasSemana as $k => $v) {
    echo $k . "--->" . $v . "</br><hr>";
}
?>


</body>
</html>