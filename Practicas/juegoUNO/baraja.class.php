<?php
// Cartas para la baraja
require_once "carta.class.php";

class Baraja
{
    public $conjunto_cartas;
    public $indexCont = 1;

    public function __construct()
    {
        $this->conjunto_cartas = [];
    }

    public function crea_baraja()
    {
        foreach (['red', 'yellow', 'blue', 'green'] as $color) {
            for ($i = 0; $i <= 9; $i++) {
                $this->conjunto_cartas[] = new Carta($color, $i, $this->indexCont++);
            }
            // Afegeix cartes especials
            $this->conjunto_cartas[] = new Carta($color, 'reverse', $this->indexCont++);
            $this->conjunto_cartas[] = new Carta($color, 'skip', $this->indexCont++);
            $this->conjunto_cartas[] = new Carta($color, 'picker', $this->indexCont++);
        }
    }

    public function mezclar()
    {
        shuffle($this->conjunto_cartas);
    }

    public function pinta_baraja()
    {
        foreach ($this->conjunto_cartas as $c) {
            $c->pinta_carta_link();
        }
    }
}
