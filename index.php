<?php

require_once __DIR__ . "/Models/Movie.php";


// $movie = new Movie();
// $movie->title = "The Shining";
// $movie->year = 1980;
// $movie->duration = 144;
// $movie->country = "USA";
// $movie->director = "Stanley Kubrick";
// $movie->cinematography = "John Alcott";
// $movie->genre = "Horror"; //Horror + Thriller
// $movie->cast = "Jack Nicholson"; //Shelley Duvall - Danny Lloyd - Philip Stone

$shining = new Movie(
    "The Shining",
    1980,
    144,
    "USA",
    "Stanley Kubrick",
    "Horror",
    "Jack Nicholson"
);

$seven = new Movie(
    "Se7en",
    1995,
    127,
    "USA",
    "David Fincher",
    "Crime", //    Thriller Crime Mystery
    "Morgan Freeman", // Brad Pitt - Gwyneth Paltrow
    "Darius Khondji"
);

var_dump($shining);
var_dump($seven);

echo $shining->printMovie();
echo $seven->printMovie();
