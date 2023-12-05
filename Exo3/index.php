<?php
// Exo 1

$phrase = "bOnJoUr, jE sUiS UnE pHrAsE pOuR tEsTeR.";

$mots = explode(' ', $phrase);
$nouvellePhrase = '';

foreach ($mots as $mot) {
    $nouvellePhrase .= ucfirst(strtolower($mot)) . ' ';
}

$nouvellePhrase = rtrim($nouvellePhrase);

echo "$nouvellePhrase </br>";

// Exo 2

$nomsPrenoms = array(
    "John Doe",
    "Jane Smith",
    "Bob Johnson"
);
foreach ($nomsPrenoms as $nomPrenom) {
    // Diviser le nom et le prénom
    list($prenom, $nom) = explode(' ', $nomPrenom);

    // Afficher le prénom et le nom sur 20 caractères chacun

    echo "$prenom" . " " . "$nom </br>";
}

// Exo 3

$tableau = array('1abc', '2def', '10ghi');

usort($tableau, function ($a, $b) {
    return strnatcmp($a, $b);
});

var_dump($tableau);

// Exo 4

$dateDeNaissance = new DateTime('1996-04-27');
$maintenant = new DateTime();

$difference = $maintenant->diff($dateDeNaissance);

echo $difference->format('Votre âge : %y ans, %m mois, %d jours, %h heures, %i minutes, %s secondes</br>');

// Exo 5

$date = new DateTime('2017-12-25');
$jourSemaine = $date->format('l');

echo "Le 25 décembre 2017 correspondait à un $jourSemaine en français.";

// Exo 6

