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
        <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 w-60 h-70 flex flex-col">
            <a href="#" class="flex-shrink-0">
                <img class="rounded-t-lg w-full h-40 object-cover" src="' . $this->foto . '" alt="Imagen ' . $this->titulo . '" />
            </a>
            <div class="p-5 flex flex-col justify-between flex-grow">
                <a href="#">
                    <h5 class="mb-2 text-xl font-bold tracking-tight text-gray-900 dark:text-white truncate">' . $this->titulo . '</h5>
                </a>
                <div>
                    <p class="font-normal text-gray-700 dark:text-gray-400 truncate">' . $this->autor . '</p>
                    <p class="font-normal text-gray-700 dark:text-gray-400">' . $this->anioPublicacion . '</p>
                </div>
            </div>
        </div>
        ';
    }
}
