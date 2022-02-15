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
    $this->releaseDate = $_releaseDate;
  }
  // Metodi
  // Setter
  public function setOverview(string $overview): void 
  {
    $this->overview = $overview;
  }
  public function setPopularity(float $popularity): void 
  {
    $this->popularity = $popularity;
  }
  public function setCast(array $cast): void 
  {
    $this->cast = $cast;
  }
  // Getter
  public function getTitle() {
    return $this->title;
  }
  public function getOriginalLanguage() {
    return $this->originalLanguage;
  }
  public function getReleaseDate() {
    return $this->releaseDate;
  }
  public function getOverview() {
    return $this->overview;
  }
  public function getPopularity() {
    return $this->popularity;
  }
  public function getCast() {
    return $this->cast;
  }
}

$fightClub__setterData = [
  'Overview' => 'A ticking-time-bomb insomniac and a slippery soap salesman channel primal male aggression into a shocking new form of therapy. Their concept catches on, with underground "fight clubs" forming in every town, until an eccentric gets in the way and ignites an out-of-control spiral toward oblivion.',
  'Popularity' => 58.932,
  'Cast' => [
    'Narratore' => 'Edward Norton',
    'Tyler-Durden' => 'Brad Pitt',
    'Helena-Bonham-Carter' => 'Marla Singer',
    'Jared-Leto' => 'Faccia d\'Angelo',
    'Meat-Loaf' => 'Robert "Bob" Paulson',
    'Zach-Grenier' => 'Richard Chesler',
    'David-Andrews' => 'Thomas',
    'Rachel-Singer' => 'Chloe',
    'Tim-De-Zarn' => 'ispettore Bird',
    'Ezra-Buzzington' => 'ispettore Dent',
    'David-Lee-Smith' => 'Walter',
    'Eion-Bailey' => 'Ricky',
    'Evan-Mirand' => 'Steph',
    'Thom-Gossom-Jr.' => 'detective Stern',
    'Peter-Iacangelo' => 'Lou',
    'Joo-n-B-.-Kim' => 'Raymond K. Hessel',
    'Michael-ShamusWiles' => 'Barista',
  ],
];
// Istanze
// in costruttore vengono impostati title,originalLanguage e releaseDate
$fightClub = new Movie('Fight Club','en','1999-10-15');
// usiamo i nostri metodi setter per aggiungere le altre caratteristiche del film fight club
$fightClub->setOverview($fightClub__setterData['Overview']);
$fightClub->setPopularity($fightClub__setterData['Popularity']);
$fightClub->setCast($fightClub__setterData['Cast']);
// var_dump($fightClub);
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Movie</title>
  <!-- link file css -->
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <header class="header">
    <h1>Movie</h1>
    <hr>
  </header>
  <div class="container">
    <!-- stampa film prima stanza -->
    <div class="film">
      <ul>
        <?php
        foreach ($fightClub as $attr => $val) {
          // stampa in caso di dato con array, bigono di altro foreach per stampare tutti gli elementi
          if(gettype($val) === 'array') { // si potrebbe anche fare se attr === Cast ... ma se aggiungiamo altri array potrebbe tornare piu utile cosi
            echo '<li><h3 class="bold-item">'. $attr .'</h3><li>';
            echo '<ul>';
            foreach ($val as $key => $item) {
              echo '<li><h4 class="inline-h">'.str_replace('-',' ',$key).'</h4>' . $item . '</li>';
            }
            echo '</ul>';
          } else if($val === null) {
            echo '<li>'.$attr .'mancante </li>';
          }
          else { // caso in cui dato sia stringa o comunque un valore visibile
            echo '<li><h3>'. $attr. '</h3>'. $val. '</li>';
          }
        }
        ?>
      </ul>
    </div>
  </div>
</body>
</html>