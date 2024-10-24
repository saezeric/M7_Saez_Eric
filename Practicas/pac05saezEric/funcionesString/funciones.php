<?php

function convertirMayusculas($texto)
{
    $texto = strtoupper($texto);
    echo $texto;
}

convertirMayusculas("este texto estara en mayusculas");

function contarPalabras($texto)
{
    echo '<br>Palabras: ' . str_word_count($texto) . '';
}

contarPalabras("cuenta este texto");

function obtenerSubcadena($texto, $inicio, $longitud)
{
    echo '<br>' . substr($texto, $inicio, $longitud) . '';
}

obtenerSubcadena("cuenta este texto largo de prueba", 2, 10);

function reemplazarPalabras($texto, $buscar, $reemplazar)
{
    echo '<br>' . str_replace($buscar, $reemplazar, $texto) . '';
}

reemplazarPalabras("cuenta este texto largo de prueba", "a", "A");

function invertirTexto($texto)
{
    echo '<br>' . strrev($texto) . '';
}

invertirTexto("Texto largo de prueba");

function compararStrings($cadena1, $cadena2)
{
    if (strcmp($cadena1, $cadena2) !== 0) {
        echo '<br>false';
    } else {
        echo '<br>true';
    }
}

compararStrings("Este es el string 1", "Este es el string 2");

function eliminarEspacios($texto)
{
    echo '<br>' . trim($texto) . '';
}

eliminarEspacios("    Texto de ejemplo sin espacios a los bordes    ");

function contarOcurrencias($texto, $palabra)
{
    echo '<br>' . substr_count($texto, $palabra) . '';
}

contarOcurrencias("esto es una prueba para contar palabras", "e");

function dividirPalabras($texto)
{
    $texto = explode(" ", $texto);
    echo '<br>' . $texto[0] . '';
    echo '<br>' . $texto[1] . '';
    echo '<br>' . $texto[2] . '';
}

dividirPalabras("Hola a todos");
