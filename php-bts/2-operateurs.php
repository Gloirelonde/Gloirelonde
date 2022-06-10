<?php 
/* Addition */
$a = 5;
$b = 7;
echo "<br>";
echo $a + $b; //12

/* Soustraction */
$a = 5;
$b = 7;
echo "<br>";
echo $a - $b; //-2

/* Multiplication */
$a = 5;
$b = 7;
echo "<br>";
echo $a * $b; //35

/* Division */
$a = 5;
$b = 7;
echo "<br>";
echo $a / $b; //0.714

/* Exponentielle */
$a = 5;
$b = 7;
echo "<br>";
echo $a ** $b; //78 125 : 5 a la puissance 7

/* Modulos : reste de la division */
$a = 10;
$b = 7;
echo "<br>";
echo $a % $b; 


//Calculer le Le prix TTC de 5 150 € : La TVA est 20%

$prixHT = 2500;
$TVA = 20/100;

$prixTTC = $prixHT + ($prixHT * $TVA);
echo "<br>";
echo $prixTTC . " €";

/* Opérateur d'assignation  */

$a = 3;
$a += 3; //6 $a += 3

$nom = "Herve";
$nom .= " Petit"; // Herve Petit