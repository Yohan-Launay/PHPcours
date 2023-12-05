<!--•	Exercice 1-->
<!--Créer un tableau multidimensionnel associatif dont les clés sont des noms de personnes et les valeurs des tableaux indicés contenant le prénom,
la ville de résidence et l’âge de la personne.-->

<?php

$personnage = [
    "Jean" => [
        "ville" => "Rennes",
        "age" => 17
    ],
    "Michelle" => [
        "ville" => "Nantes",
        "age" => 42
    ],
    "Pierre" => [
        "ville" => "Paris",
        "age" => 85
    ]
];

?>

<!--•	Exercice 2-->
<!--Créer un tableau multidimensionnel associatif dont les clés sont des noms de personnes et les valeurs des tableaux associatifs dont les clés sont le prénom,
la ville de résidence et l’âge de la personne avec une série de valeurs associées.-->

<?php

//$personnage = [
//    "Jean" => [
//        "ville" => "Rennes",
//        "age" => 17
//    ],
//    "Michelle" => [
//        "ville" => "Nantes",
//        "age" => 42
//    ],
//    "Pierre" => [
//        "ville" => "Paris",
//        "age" => 85
//    ]
//];

?>


<!--•	Exercice 3-->
<!--Utiliser une boucle foreach pour lire les tableaux des exercices 1 et 2 et afficher les informations avec le format suivant :-->
<!--•	Element dupont-->
<!--o	élément 0 : gérard-->
<!--o	élément 1 : paris-->
<!--o	élément 2 : 67-->
<!--•	Element badin-->
<!--o	élément 0 : aurélie-->
<!--o	élément 1 : nantes-->
<!--o	élément 2 : 31-->

<?php

foreach ($personnage as $clef => $valeur) {
    foreach ($valeur as $value) {
        echo $clef.' -> '. $value.'<br>';
    }
}

?>



<!--•	Exercice 4-->
<!--Créer un tableau contenant une liste d’adresses e-mail.-->
<!--Extraire le nom de serveur de ces données puis réaliser des statistiques sur les occurrences de chaque fournisseur d’accès.-->


<?php

$mails = [
    'exemple1@gmail.com',
    'exemple2@gmail.com',
    'exemple3@msn.com',
    'exemple4@outlook.com',
];

$statistics = [];

foreach ($mails as $email) {
    $parts = explode('@', $email);

    $domain = $parts[1];

    // Incrémenter le compteur pour le domaine correspondant dans le tableau des statistiques
    if (isset($statistics[$domain])) {
        $statistics[$domain]++;
    } else {
        $statistics[$domain] = 1;
    }
}

// Afficher les statistiques
echo "Statistiques des fournisseurs d'accès :\n </br>";
foreach ($statistics as $domain => $count) {
    echo "$domain : $count adresse(s) e-mail\n </br>";
}
?>

