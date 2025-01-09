<?php
class Libro
{
    public string $titulo;
    public string $autor;
    public string $anioPublicacion;
    public string $foto;

    public function __construct($titulo, $autor, $anioPublicacion, $foto)
    {
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->anioPublicacion = $anioPublicacion;
        $this->foto = $foto;
    }

    public function detalles()
    {
        // Tarjeta de libro con Tailwind
        return '
        <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
            <a href="#">
                <img class="rounded-t-lg w-full h-48 object-cover" src="' . $this->foto . '" alt="Imagen ' . $this->titulo . '" />
            </a>
            <div class="p-5">
                <a href="#">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">' . $this->titulo . '</h5>
                </a>
                <div class="flex justify-between">
                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">' . $this->autor . '</p>
                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">' . $this->anioPublicacion . '</p>
                </div>
            </div>
        </div>';
    }
}
