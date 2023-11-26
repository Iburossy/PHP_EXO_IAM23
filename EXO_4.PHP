<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcul du PPCM</title>
    <style>
        .bel{
 display: flex;
 justify-content: space-between;
 align-items: center;
 flex-wrap: wrap;
 background-color: yellow;
}
    </style>
</head>
<body class="bel">

<form method="post" action="">
    <label for="nombre1">nombre 1 :</label>
    <input type="text" name="nombre1" id="nombre1" required>

    <label for="nombre2">nombre 2 :</label>
    <input type="text" name="nombre2" id="nombre2" required>

    <input type="submit" name="submit" value="Calculer le PPCM">
</form>

</body>
</html>
<?php
// Fonction pour calculer le PGCD (Plus Grand Commun Diviseur)
function pgcd($a, $b) {
    while ($b !== 0) {
        $temp = $b;
        $b = $a % $b;
        $a = $temp;
    }
    return $a;
}

// Fonction pour calculer le PPCM (Plus Petit Commun Multiple)
function ppcm($a, $b) {
    return ($a * $b) / pgcd($a, $b);
}

// Vérification si les valeurs sont soumises via le formulaire
if (isset($_POST['submit'])) {
    $nombre1 = isset($_POST['nombre1']) ? (int)$_POST['nombre1'] : 0;
    $nombre2 = isset($_POST['nombre2']) ? (int)$_POST['nombre2'] : 0;

    // Vérification si les valeurs sont des entiers positifs
    if ($nombre1 > 0 && $nombre2 > 0) {
        $resultat = ppcm($nombre1, $nombre2);
        echo "<p>Le PPCM de $nombre1 et $nombre2 est : $resultat</p>";
    } else {
        echo "<p>Veuillez saisir des entiers positifs.</p>";
    }
}
?>
