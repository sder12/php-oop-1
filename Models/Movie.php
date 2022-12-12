<?php

class Movie
{
    public $title;
    public $year;
    public $duration;
    public $country;
    public $director;
    public $genre;
    public $cast;
    public $cinematography;

    function __construct($title, int $year, int $duration, $country, $director, $genre, $cast, $cinematography = "")
    {
        $this->title = $title;
        $this->year = $year;
        $this->duration = $duration;
        $this->country = $country;
        $this->director = $director;
        $this->genre =  $genre;
        $this->cast = $cast;
        $this->cinematography = $cinematography;
    }
};
