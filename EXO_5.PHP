<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcul d'un cercle</title>
</head>
<body>

<?php
// Fonction pour calculer le diamètre d'un cercle
function calculerDiametre($rayon) {
    return 2 * $rayon;
}

// Fonction pour calculer le périmètre d'un cercle
function calculerPerimetre($rayon) {
    return 2 * M_PI * $rayon;
}

// Fonction pour calculer la surface d'un cercle
function calculerSurface($rayon) {
    return M_PI * pow($rayon, 2);
}

// Vérification si le rayon est soumis via le formulaire
if (isset($_POST['submit'])) {
    $rayon = isset($_POST['rayon']) ? (float)$_POST['rayon'] : 0;

    // Vérification si le rayon est un nombre positif
    if ($rayon > 0) {
        $diametre = calculerDiametre($rayon);
        $perimetre = calculerPerimetre($rayon);
        $surface = calculerSurface($rayon);

        echo "<p>Rayon saisi : $rayon</p>";
        echo "<p>Diamètre : $diametre</p>";
        echo "<p>Périmètre : $perimetre</p>";
        echo "<p>Surface : $surface</p>";
    } else {
        echo "<p>Veuillez saisir un rayon positif.</p>";
    }
}
?>

<form method="post" action="">
    <label for="rayon">Rayon du cercle :</label>
    <input type="text" name="rayon" id="rayon" required>

    <input type="submit" name="submit" value="Calculer">
</form>

</body>
</html>
