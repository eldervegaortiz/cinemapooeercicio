<?php
require_once __DIR__ . "/../models/Pelicula.php";
require_once __DIR__ . "/../models/Plataforma.php";
require_once __DIR__ . "/../view/visualizarpelicula.php";
require_once __DIR__ . "/../view/consultapelicula.php";

class controladorpelicula
{
    private $vista;

    public function __construct(visualizarpelicula $vista)
    {
        $this->vista = $vista;
    }

    public function desarrollar()
    {
        // Crear
        $cinePlus = new Plataforma("CinePlus");

        // Agregar películas 
        $cinePlus->agregarPelicula(new Pelicula("Inception", "Ciencia Ficción", 148, 4.8));
        $cinePlus->agregarPelicula(new Pelicula("The Matrix", "Acción", 136, 4.7));

    //    envio al formulario
        if (isset($_POST["agregar"])) {
            $titulo = $_POST["titulo"] ?? '';
            $genero = $_POST["genero"] ?? '';
            $duracion = (int)($_POST["duracion"] ?? 0);
            $calificacion = (float)($_POST["calificacion"] ?? 3.0);

            if (!empty($titulo) && $duracion > 0) {
                $nuevaPelicula = new Pelicula($titulo, $genero, $duracion, $calificacion);
                $cinePlus->agregarPelicula($nuevaPelicula);
            }
        }

        $this->vista->mostrartitulo("catalogo cine vega");
        $this->vista->mostrarCatalogo($cinePlus);
    }
}