<?php

$numero = 23;
// $numero = null;

// unset($numero);

if (is_null($numero)) {
    echo 'Es null';
} else {
    echo 'No es null';
}

echo '<br><br>';

if (isset($numero)) {
    echo 'Existe';
}

echo '<br><br>';

if (empty($numero)) {
    echo 'Vacio';
}
