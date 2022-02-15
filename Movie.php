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
  public $original_language;
  public $release_date;
  // variabili da includere in funzione set
  public $overview;
  public $popularity;
  public $cast;

  // Costruttore
  
  function __construct(string $_title,string $_original_anguage,string $_release_date)
  {
    $this->title = $_title;
    $this->original_language = $_original_anguage;
    $this->release_date = $_release_date;
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
    return $this->original_language;
  }
  public function getReleaseDate() {
    return $this->release_date;
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
    'Marla-Singer' => 'Helena Bonham Carter',
    'Faccia-d\'Angelo' => 'Jared Leto',
    'Robert-"Bob"-Paulson' => 'Meat Loaf',
    'Richard-Chesler' => 'Zach Grenier',
    'Thomas' => 'David Andrews',
    'Chloe'  => 'Rachel Singer',
    'ispettore-Bird'  => 'Tim De Zarn',
    'ispettore-Dent'  => 'Ezra Buzzington',
    'Walter'  => 'David Lee Smith',
    'Ricky'  => 'Eion Bailey',
    'Steph'  => 'Evan Mirand',
    'detective-Stern'  => 'Thom Gossom Jr.',
    'Lou'  => 'Peter Iacangelo',
    'Raymond-K.-Hessel'  => 'Joo n B . Kim',
    'Barista'  => 'Michael ShamusWiles',
  ],
];
// Istanze
// in costruttore vengono impostati title,originalLanguage e releaseDate
$fightClub = new Movie('Fight Club','en','1999-10-15');
// usiamo i nostri metodi setter per aggiungere le altre caratteristiche del film fight club
$fightClub->setOverview($fightClub__setterData['Overview']);
$fightClub->setPopularity($fightClub__setterData['Popularity']);
$fightClub->setCast($fightClub__setterData['Cast']);

$kulhe__setterData = [
  'Overview' => 'Kuhle Wampe takes place in early-1930s Berlin. The film begins with a montage of newspaper headlines describing steadily-rising unemployment figures. This is followed by scenes of a young man looking for work in the city and the family discussing the unpaid back rent. The young man, brother of the protagonist Anni, removes his wristwatch and throws himself from a window out of despair. Shortly thereafter his family is evicted from their apartment. Now homeless, the family moves into a garden colony of sorts with the name "Kuhle Wampe".',
  'Popularity' => 1.587,
  'Cast' => [
    'Annie' => 'Hertha Thiele',
    'Fritz' => 'Ernst Busch',
    'Martha-Wolter' => 'Gerda',
    'Adolf-Fischer' => 'Karl Genosse',
    'Lilli-Schönborn' => 'Lili Schoenborn-Anspach'
  ],
];
$kulhe = new Movie('Kuhle Wampe oder: Wem gehört die Welt?', "de", "1932-05-14");
$kulhe->setOverview($kulhe__setterData['Overview']);
$kulhe->setPopularity($kulhe__setterData['Popularity']);
$kulhe->setCast($kulhe__setterData['Cast']);
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
    <hr>
  </header>
  <div class="container">
    <!-- stampa dati film fight club-->
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
            echo '<li>'.$attr .': Valore non presente.</li>';
          }
          else { // caso in cui dato sia stringa o comunque un valore visibile senza altre complicazioni
            echo '<li><h3>'. $attr .'</h3>'. $val. '</li>';
          }
        }
        ?>
      </ul>
    </div>
    <!-- stampa dati film khule -->
    <hr>
    <div class="film">
      <ul>
        <?php
        foreach ($kulhe as $attr => $val) {
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