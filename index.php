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
    ["Horror"],
    ["Jack Nicholson,", "Shelley Duvall,", "Danny Lloyd"],
    "-"
);

$seven = new Movie(
    "Se7en",
    1995,
    127,
    "USA",
    "David Fincher",
    ["Crime,", "Thriller,", "Mystery"], //    Thriller Crime Mystery
    ["Morgan Freeman,", "Brad Pitt"], // Brad Pitt - Gwyneth Paltrow
    "Darius Khondji"
);

// var_dump($shining);
// var_dump($seven);

// echo $shining->printMovie();
// echo $seven->printMovie();
$movies = [$shining, $seven];
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

    <?php foreach ($movies as $move) { ?>
        <section>
            <h2><?php echo $move->title; ?></h2>
            <ul>
                <li>
                    Directed by: <?php echo $move->director; ?>
                </li>
                <li>
                    Year production: <?php echo  $move->year; ?>
                </li>
                <li>
                    Country origin: <?php echo  $move->country; ?>
                </li>
                <li>
                    Duration movie: <?php echo  $move->duration; ?> mins
                </li>

                <li>
                    Genre:
                    <?php foreach ($move->genre as $genre) { ?>
                        <?php echo  $genre ?>
                    <?php } ?>
                </li>
                <li>
                    Cast:
                    <?php foreach ($move->cast as $actor) { ?>
                        <?php echo $actor ?>
                    <?php } ?>
                </li>
                <li>
                    Cinematography: <?php echo  $move->cinematography ?>
                </li>
            </ul>
        </section>
    <?php } ?>

</body>

</html>