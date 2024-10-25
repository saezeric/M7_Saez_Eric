<?php

$stock = 1;
$ternario = ($stock > 0) ? '<p style="color: green">Producto Disponible</p>' : '<p style="color: red">Producto Agotado</p>';

echo $ternario;
