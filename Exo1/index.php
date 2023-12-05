<!--•	Exercice 1-->
<!--Déclarer 4 variables ayant pour valeur true, 42, 12.34 et 'Hello !'.-->
<!--Afficher le type et la valeur de ces variables.-->
<?php

$var1 = true;
$var2 = 42;
$var3 = 12.34;
$var4 = 'hello world';

echo gettype($var1) . ' ' . $var1 . '<br>';
echo gettype($var2) . ' ' . $var2 . '<br>';
echo gettype($var3) . ' ' . $var3 . '<br>';
echo gettype($var4) . ' ' . $var4 . '<br>';

?>

<!--•	Exercice 2-->
<!--Donner les valeurs de $x, $y, $z à la fin du script suivant (sans l’exécuter !).-->

<?php
$x = "PostgreSQL";
$y = "MySQL";
$z = &$x;
$x = "PHP 5";
$y = &$x;

// $x = PHP 5
// $z = PostgreSQL
// $y = PHP 5

?>

<!--//•	Exercice 3-->
<!--//Donner la valeur booléenne des variables $a, $b, $c, $d, $e et $f.-->

<?php
$a = "0";
$b = "TRUE";
$c = FALSE;
$d = ($a OR $b);
$e = ($a AND $c);
$f = ($a XOR $b);

echo $a

?>

<!--//•	Exercice 4-->
<!--//Donner le type et la valeur de chacune des variables pendant et à la fin du script suivant.-->
<!--//Vérifier ensuite vos réponses en modifiant le script.-->

<?php
$X = "PHP7";
$A = &$X;
$Y = " 7 eme version de PHP";
$Z = $Y * 10;
$X = $Y * $Y;
?>

