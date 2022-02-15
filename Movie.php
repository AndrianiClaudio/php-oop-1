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
  // variabili set in costruttore
  public $title;
  public $originalLanguage;
  public $releaseDate;
  // variabili da includere in funzione set
  public $overview;
  public $popularity;
  public $cast;

  // Costruttore
  
  function __construct(string $_title,string $_originalLanguage,string $_releaseDate)
  {
    $this->title = $_title;
    $this->originalLanguage = $_originalLanguage;
    $this->release_date = $_releaseDate;
  }
  // Metodi
  // Setter
  public function setOverview(string $overview): void 
  {
    $this->overview = $overview;
  }
  public function setPopularity(string $popularity): void 
  {
    $this->popularity = $popularity;
  }
  public function setCast(array $cast): void 
  {
    $this->cast = $cast;
  }
}


// Istanze
$fightClub = new Movie('Fight Club','en','1999-10-15');
$fightClub->setCast(['Brad Pitt','Edward Norton']);
?>