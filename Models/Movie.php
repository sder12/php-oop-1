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

    function __construct(
        String $title,
        Int $year,
        Int $duration,
        String $country,
        String $director,
        String $genre,
        String $cast,
        String $cinematography = ""
    ) {
        $this->title = $title;
        $this->year = $year;
        $this->duration = $duration;
        $this->country = $country;
        $this->director = $director;
        $this->genre =  $genre;
        $this->cast = $cast;
        $this->cinematography = $cinematography;
    }

    public function printMovie()
    {
        return "Title: $this->title; Directed by: $this->director; Year: $this->year";
    }
};
