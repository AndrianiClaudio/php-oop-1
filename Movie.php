<?php
/**
 * CONSEGNA
 * create un file Movie.php in cui:
 * è definita una classe ‘Movie’
 * => all’interno della classe sono dichiarate delle variabili d’istanza
 * => all’interno della classe è definito un costruttore
 * => all’interno della classe è definito almeno un metodo
 * vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà
 */


// è definita una classe ‘Movie’
class Movie {
  // variabili d’istanza
  public $title;
  public $originalLanguage;
  public $overview;
  public $popularity;
  public $cast;
  public $release_date;

  // Costruttore
  function __construct($_title,$_originalLanguage)
  {
    $this->title = $_title;
    $this->originalLanguage = $_originalLanguage;
  }
  // Metodi
}


// Istanze
$fightClub = new Movie('Fight Club','en');
var_dump ($fightClub);
echo $fightClub->title;
?>