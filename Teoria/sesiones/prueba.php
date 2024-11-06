<?php

session_start();

$_SESSION['items'] = ['Juan', 'Pedro', 'Pablo'];

$miLista = $_SESSION['items'];

print_r($_SESSION['items']);

function addItem($item)
{
    array_push($_SESSION['items'], $item);
}

addItem('Maria');

print_r($_SESSION['items']);
