<?php
class visualizarpelicula
{
    /** @param Plataforma $plataforma */
    public function mostrarCatalogo(Plataforma $plataforma)
    {
        echo "<h3 style='font-family: Arial;'>Catálogo de la Plataforma</h3>";
        echo "<p style='font-family: Arial;'><strong>Total de películas registradas:</strong> " . Plataforma::obtenerTotalPeliculas() . "</p>";
        echo "<p style='font-family: Arial;'><strong>Promedio general de calificaciones:</strong> " . $plataforma->obtenerPromedioCalificaciones() . " / 5.0</p>";
        echo "<hr>";

        foreach ($plataforma->obtenerPeliculas() as $pelicula) {
            echo "<div style='font-family: Arial; background: #fff; padding: 10px; border-left: 4px solid #e50914; margin-bottom: 10px;'>";
            echo $pelicula->mostrarInfo();
            echo "</div>";
        }
    }

    public function mostrartitulo($titulo)
    {
        echo "<h2 style='font-family: Arial; color: #333;'>== {$titulo} ==</h2>";
    }
}