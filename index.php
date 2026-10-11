<?php
require_once __DIR__ . "/models/Pelicula.php";
require_once __DIR__ . "/models/Plataforma.php";

require_once __DIR__ . "/view/consultapelicula.php";
require_once __DIR__ . "/view/visualizarpelicula.php";
require_once __DIR__ . "/controller/controladorpelicula.php";

// Mostrar el formulario 
$consulta = new consultapelicula();
$consulta->consultar();
$vista = new visualizarpelicula();
$controlador = new controladorpelicula($vista);
$controlador->desarrollar();