<?php

require_once __DIR__ . "/Models/Movie.php";


$movie = new Movie();
$movie->title = "The Shining";
$movie->year = 1980;
$movie->duration = 144;
$movie->country = "USA";
$movie->director = "Stanley Kubrick";
$movie->cinematography = "John Alcott";
$movie->genre = "Horror"; //Horror + Thriller
$movie->cast = "Jack Nicholson"; //Shelley Duvall - Danny Lloyd - Philip Stone

var_dump($movie);