<?php
class Movie
{

    public $title;
    public $language;
    public $year;

    public function __construct($title, $language, $year)
    {
        $this->title = $title;
        $this->language = $language;
        $this->year = $year;
    }

    public function getMovie()
    {
        echo "Titolo: " . $this->title . ",<br> ";
        echo "Lingua: " . $this->language . ",<br> ";
        echo "Anno di uscita: " . $this->year . ". <br>";
    }
}


$film_1 = new Movie("Matrix", "Inglese", 1999);
$film_2 = new Movie("La vita è bella", "Italiano", 1997);

echo "<strong>Primo film: </strong> <br> ";
$film_1->getMovie();

echo "<strong>Secondo film: </strong> <br>";
$film_2->getMovie();
