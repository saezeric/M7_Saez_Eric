<?php

function generarNombre($nombre)
{
    echo '<h1>Hola ' . $nombre . '!';
}

generarNombre("Eric Saez Escalona");


function calcularTotal($precio, $cantidad, $impuesto)
{
    $res = $precio + (($precio * $impuesto) / 100);
    $res = $res * $cantidad;
    echo '<br>' . $res . '';
}

calcularTotal(30, 5, 21);


function generarResumen($texto, $limite)
{
    $res = substr($texto, 0, $limite);
}

generarResumen("Hola buenas tardes a todos los alumnos de FPLlefia", 10);


function convertirTemperatura($temperatura, $escala)
{
    if ($escala == "c" || $escala == "C") {
        $temperatura = ($temperatura * 9 / 5) + 32;
        $temperatura = number_format($temperatura, 0, '', ' ');
        echo '<br>' . $temperatura . 'ºC';
    } else {
        $temperatura = ($temperatura - 32) * 5 / 9;
        $temperatura = number_format($temperatura, 0, '', ' ');
        echo '<br>' . $temperatura . 'ºF';
    }
}

convertirTemperatura(40, "f");


function calcularEdad($anio_nacimiento)
{
    $edad = 2024 - $anio_nacimiento;
    echo '<br>' . $edad . ' años';
}

calcularEdad(2004);


function esPar($numero)
{
    $par = $numero % 2;
    if ($par == 0) {
        $par = true;
        echo '<br>' . $par . '';
    } else {
        $par = false;
        echo '<br>' . $par . '';
    }
}

esPar(34);

function generarEnlaceDescarga($archivo)
{
    echo '<br><a href="../downloads/' . $archivo . '" download>Descargar Archivo</a>';
}

generarEnlaceDescarga("ia.png");

function calcularDescuento($precioOriginal, $descuento)
{
    $res = $precioOriginal - (($precioOriginal * $descuento) / 100);
    echo '';
}

calcularDescuento(35, 5);
