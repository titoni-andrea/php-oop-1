<?php

    class Movie {
        public $titolo;
        public $genere;
        public $durata;
    }

$pdc = new Movie();
$pdc->titolo = "Maledizione della prima luna";
$pdc->genere = "Avventura";
$pdc->durata = "2 ore";

$undl = new Movie();
$undl->titolo = "Una notte da leoni";
$pdc->genere = "Horror";
$pdc->durata = "1 ora"

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Programmazione ad oggetti</h1>
    <h2>Classe MOVIE</h2>

    <div class="fil-prefe">
        <h3>Il mio film preferito è <?= $pdc->titolo?></h3>
        <p>Il suo genere è <?=$pdc->genere?> e dura <?=$pdc->durata?></p>
    </div>
    <div class="fil-prefe">
        <h3>Il mio film preferito è <?= $undl->titolo?></h3>
        <p>Il suo genere è <?=$undl->genere?> e dura <?=$undl->durata?></p>
    </div>
</body>
</html>