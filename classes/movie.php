<?php 

class Movie{

    // vado a scrivere le mie varibili di istanza

    public $title;
    public $genre;
    public $year;

    function __construct(
        string $_title,
        string $_genre,
        int $_year
        )
    {
        $this ->title = $_title;
        $this ->genre = $_genre;
        $this ->year = $_year;
    }

    // vado a creare dei metodi
    function getFormattedMovie(){
        return $this->title . "-" . $this->genre . "-" . $this->year;
    }

    function getYearOfRelease(){
        return "Il film è stato prodotto nel : " . $this->year;
    }

}

?>