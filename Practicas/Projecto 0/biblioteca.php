<?php
require_once 'libro.php';

class Biblioteca
{
    public array $libros = [];

    public function __construct()
    {
        $this->libros = [
            new Libro("Morderse la lengua", "María Leach", "23-10-2024", "https://imagessl7.casadellibro.com/a/l/s7/87/9788410378087.webp"),
            new Libro("Cien años de soledad", "Gabriel García Márquez", "05-06-1967", "https://m.media-amazon.com/images/I/91TvVQS7loL._AC_UF894,1000_QL80_.jpg"),
            new Libro("El principito", "Antoine de Saint-Exupéry", "06-04-1943", "https://m.media-amazon.com/images/I/714Hvb52n-L.jpg"),
        ];
    }

    public function addLibro($titulo, $autor, $anioPublicacion, $foto)
    {
        $nuevoLibro = new Libro($titulo, $autor, $anioPublicacion, $foto);
        $this->libros[] = $nuevoLibro;
    }

    public function mostrarLibros()
    {
        $detalles = '<div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 gap-6 justify-items-center">';
        foreach ($this->libros as $libro) {
            $detalles .= $libro->detalles();
        }
        $detalles .= '</div>';
        return $detalles;
    }

    public function buscarLibro($busqueda){
        $detalles = '<div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 gap-6 justify-items-center">';
        foreach ($this->libros as $libro) {
            // stripos devuelve false si no encuentra la coincidencia
            if (
                stripos($libro->titulo, $busqueda) !== false ||
                stripos($libro->autor, $busqueda) !== false
            ) {
                $detalles .= $libro->detalles(); // Mostrar la card del libro
            }
        }
        $detalles .= '</div>';
        return $detalles;
    }
}
