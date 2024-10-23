<?php

if (isset($_POST["nombre"])) {
    $nombre = $_POST["nombre"];
}

function generarNombre($nombre)
{
    echo '<h1>Hola ' . $nombre . '!';
}

if (isset($_POST["precio"], $_POST["cantidad"], $_POST["impuesto"])) {
    $precio = $_POST["precio"];
    $cantidad = $_POST["cantidad"];
    $impuesto = $_POST["impuesto"];
}

function calcularTotal($precio, $cantidad, $impuesto)
{
    $res = $precio + (($precio * $impuesto) / 100);
    $res = $res * $cantidad;
    echo $res;
}

if (isset($_POST["texto"], $_POST["limite"])) {
    $texto = $_POST["texto"];
    $limite = $_POST["limite"];
}

function generarResumen($texto, $limite)
{
    $res = substr($texto, 0, $limite);
    echo $res;
}

if (isset($_POST["temperatura"], $_POST["escala"])) {
    $temperatura = $_POST["temperatura"];
    $escala = $_POST["escala"];
}

function convertirTemperatura($temperatura, $escala)
{
    if ($escala == "c" || $escala == "C") {
        $temperatura = ($temperatura * 5) / 9 + 32;
        echo $temperatura;
    } else {
        $temperatura = ($temperatura - 32) * 5 / 9;
    }
}

if (isset($_POST["anio_nacimiento"])) {
    $anio_nacimiento = $_POST["anio_nacimiento"];
}

function calcularEdad($anio_nacimiento)
{
    $edad = 2024 - $anio_nacimiento;
    echo $edad;
}

if (isset($_POST["numero"])) {
    $numero = $_POST["numero"];
}

function esPar($numero)
{
    $par = $numero % 2;
    if ($par == 0) {
        $par = true;
    } else {
        $par = false;
    }

    if ($par == true) {
        echo '' . $numero . ' es par';
    } else {
        echo '' . $numero . ' es impar';
    }
}

$archivo = "../downloads/practica5.pdf";

function generarEnlaceDescarga($archivo)
{
    echo '<a href="' . $archivo . '"></a>';
}
