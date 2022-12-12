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

// var_dump($shining);
// var_dump($seven);

// echo $shining->printMovie();
// echo $seven->printMovie();
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MOVIES</title>
</head>

<body>
    <section>
        <h1>Movies OOP</h1>
    </section>
    <section>
        <h2><?php echo $shining->title; ?></h2>
        <ul>
            <li>
                Directed by: <?php echo $shining->director; ?>
            </li>
            <li>
                Year production: <?php echo $shining->year; ?>
            </li>
            <li>
                Country origin: <?php echo $shining->country; ?>
            </li>
            <li>
                Duration movie: <?php echo $shining->duration; ?> mins
            </li>
            <li>
                Genre: <?php echo $shining->genre ?>
            </li>
            <li>
                Cast: <?php echo $shining->cast ?>
            </li>
            <li>
                Cast: <?php echo $shining->cinematography ?>
            </li>
        </ul>
    </section>
    <section>
        <h2><?php echo $seven->title; ?></h2>
        <ul>
            <li>
                Directed by: <?php echo $seven->director; ?>
            </li>
            <li>
                Year production: <?php echo $seven->year; ?>
            </li>
            <li>
                Country origin: <?php echo $seven->country; ?>
            </li>
            <li>
                Duration movie: <?php echo $seven->duration; ?> mins
            </li>
            <li>
                Genre: <?php echo $seven->genre ?>
            </li>
            <li>
                Cast: <?php echo $seven->cast ?>
            </li>
            <li>
                Cast: <?php echo $seven->cinematography ?>
            </li>
        </ul>
    </section>

</body>

</html>