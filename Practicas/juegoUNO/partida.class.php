<?php
// Baraja para la partida
require_once "baraja.class.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $jugadores = $_POST['jugadores'];
    $cartas = $_POST['cartas'];
    header("Location: index.php");
    exit();
}

class Partida
{
    public $numero_jugadores;
    public $numero_cartas;
    public $turno;
    public $baraja;
    public $carta_en_mesa;
    public $array_jugadores;
    public $constante_sentido;

    public function jugar() {}

    public function normas_uno() {}

    public function cambiar_turno() {}

    public function cambiar_sentido() {}
}
