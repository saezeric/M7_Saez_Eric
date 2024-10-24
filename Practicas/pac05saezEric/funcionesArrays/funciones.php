<?php

function sumarArray($numeros)
{
    echo '1. ' . array_sum($numeros) . '';
}

sumarArray(array(2, 4, 5, 4, 2));

function ordenarArrayAlfabetico($nombres)
{
    sort($nombres);
    foreach ($nombres as $key => $val) {
        echo '<br>' . $key . '. Numero = ' . $val . '';
    }
}

ordenarArrayAlfabetico(array(2, 4, 5, 4, 2));

// Uso de IA, no tenía ni idea de como hacerlo...
function filtrarMayores($numeros, $valor)
{
    $resultado = array_filter($numeros, function ($numero) use ($valor) {
        return $numero > $valor;
    });

    foreach ($resultado as $key => $val) {
        echo '<br>' . $key . '. Número = ' . $val . '';
    }
}

filtrarMayores([10, 12, 11, 9, 7], 9);

function buscarEnArray($array, $valor)
{
    if (in_array($valor, $array)) {
        echo '<br>Existe ' . $valor . '';
    } else {
        echo '<br>No existe ' . $valor . '';
    }
}

buscarEnArray([1, 2, 3, 4, 5], 6);

function contarElementos($array)
{
    echo '<br>' . count($array) . '';
}

contarElementos([1, 2, 3, 4, 5, 6, 7, 8, 9]);

function obtenerMaximo($numeros)
{
    echo '<br>' . max($numeros) . '';
}

obtenerMaximo([1, 3, 5, 7]);

function obtenerMinimo($numeros)
{
    echo '<br>' . min($numeros) . '';
}

obtenerMinimo([1, 3, 5, 7]);

function eliminarDuplicados($array)
{
    $array = array_unique($array);

    foreach ($array as $key) {
        echo '<br>' . $array[$key] . '';
    }
}

eliminarDuplicados([1, 1, 2, 2, 3, 3, 4, 4]);

function combinarArrays($array1, $array2)
{
    $array = array_merge($array1, $array2);

    echo '<br>';
    var_dump($array);
}

combinarArrays([1], ["Hola"]);

function dividirArray($array, $tamanio)
{
    $array = array_chunk($array, $tamanio);

    var_dump($array);
}

dividirArray(["Hola", "a", "todos", "ejemplo"], 2);
