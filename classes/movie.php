<?php 

class Movie{

    // vado a scrivere le mie varibili di istanza

    public $title;
    public $genre;
    public $year;
    public $cover;

    function __construct(
        string $_title,
        string $_genre,
        int $_year,
        string $_cover
        )
    {
        $this ->title = $_title;
        $this ->genre = $_genre;
        $this ->year = $_year;
        $this ->cover = $_cover;
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