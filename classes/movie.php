<?php 

class Movie{

    // vado a scrivere le mie varibili di istanza

    public $title;
    public $genre;
    public $year;

    function __construct($_title,$_genre,$_year){
        $this ->title = $_title;
        $this ->genre = $_genre;
        $this ->year = $_year;
    }

    // vado a creare dei metodi
    function getFormattedMovie(){
        return $this->title . "-" . $this->genre . "-" . $this->year;
    }

}

    $first_movie =new Movie("Erin Brockovich","Dramatic",2000);
    $second_movie =new Movie("Parasite","Thriller,", 2019);
    $third_movie =new Movie("The Help","Dramatic",2012);
    $fourth_movie =new Movie("Hidden Figures","Biografic",2017);
    $fifth_movie =new Movie("Intestellar","Dramatic",2014);
    $sixth_movie =new Movie("The Zookeeper's Wife","Biografic",2017);
    $seventh_movie =new Movie("Harry Potter and the Philosopher's Stone","Fantasy",2001);
    $eigth_movie =new Movie("Forrest Gump","Dramatic",1994);
    $nineth_movie =new Movie("Bridget Jones's Diary","Comedy",2001);
    $tenth_movie =new Movie("A Beautiful Mind ","Biografic",2001);

    var_dump($first_movie);
    var_dump($second_movie);
    var_dump($third_movie);
    var_dump($fourth_movie);
    var_dump($fifth_movie);
    var_dump($sixth_movie);
    var_dump($seventh_movie);
    var_dump($eigth_movie);
    var_dump($nineth_movie);
    var_dump($tenth_movie);

    // vado a provare i metodi creati
    var_dump($fourth_movie->getFormattedMovie());

?>