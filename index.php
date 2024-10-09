<?php 

// Oggi pomeriggio ripassate i primi concetti di classe, variabili e metodi d'istanza che abbiamo visto stamattina e create un file index.php in cui:
// è definita una classe ‘Movie’
// => all'interno della classe sono dichiarate delle variabili d'istanza
// => all'interno della classe è definito un costruttore
// => all'interno della classe è definito almeno un metodo
// vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà
// Bonus 1:
// Modificare la classe Movie in modo che accetti piú di un genere.
// Bonus 2:
// Creare un layout completo per stampare a schermo una lista di movies.
// Facciamo attenzione all’organizzazione del codice, suddividendolo in appositi file e cartelle.

require_once __DIR__ . "../classes/Movie.php";
    $movies = [
        new Movie("Erin Brockovich","Dramatic",2000),
        new Movie("Parasite","Thriller,", 2019),
        new Movie("The Help","Dramatic",2012),
        new Movie("Hidden Figures","Biografic",2017),
        new Movie("Intestellar","Dramatic",2014),
        new Movie("The Zookeeper's Wife","Biografic",2017),
        new Movie("Harry Potter and the Philosopher's Stone","Fantasy",2001),
        new Movie("Forrest Gump","Dramatic",1994),
        new Movie("Bridget Jones's Diary","Comedy",2001),
        new Movie("A Beautiful Mind ","Biografic",2001)
    ];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="ginatovaralmario">
    <meta name="project" content="php-oop">
    <title>Document</title>
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <main class="container">
        <h1>Movie List</h1>
        <div class="row">
            <div class="col-12">
                <ul>
                    <?php foreach($movies as $movie) { ?>
                        <li>
                            <p>
                                Titolo: <?= $movie->title; ?>
                            </p>
                            <p>
                                Genere: <?= $movie->genre; ?>
                            </p>
                            <p>
                                Year: <?= $movie->year; ?>
                            </p>
                            <p>
                                Film formattato: <?= $movie->getFormattedMovie(); ?>
                            </p>
                        </li>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </main>
</body>
</html>