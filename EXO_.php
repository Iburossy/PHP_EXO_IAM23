<?php
/*
// Initialisation des variables
$nombre_initial = 123;
$nombre_tire = 0;
$coups = 0;

// Boucle while
while ($nombre_tire != $nombre_initial) {
    $nombre_tire = rand(100, 999);
    $coups++;
}

// Affichage du résultat
echo "Le nombre $nombre_initial a été trouvé en $coups coups."; */


// Initialisation des variables avec la boucle for
$nombre_initial = 123;
$nombre_tire = 0;
$coups = 0;

// Boucle for
for ($i = 0; $nombre_tire != $nombre_initial; $i++) {
    $nombre_tire = rand(100, 999);
    $coups++;
}

// Affichage du résultat
echo "Le nombre $nombre_initial a été trouvé en $coups coups avec la boucle for.";

?>