<?php 

$a = 6;


/*
Symbole | Signification

==        Est égal à
>         Est supérieur à
<         Est inférieur à
>=        Est supérieur ou égal à
<=        Est inférieur ou égal à
!=        Est différent de

*/

if($a == 3){
    echo '$a est égale à 3';
}else{

}

$age = 19;

if($age >= 18){
    echo "Vous pouvez accéder à page";
}else{
    echo "Vas faire tes devoirs !";
}


/*
EXERCICE

Déclarer une variable $budget qui contient la somme de 1 553,89 €. 
Déclarer une variable $achats qui contient la somme de 1 554,76 €. 
Afficher si le budget permet de payer les achats.
*/

$budget = 200;
$achats = 1554.76;
$manque = $achats - $budget;
//Formater le manque 
$manque = number_format($manque, 2, ',', ' '); // 0,87 


if($budget >= $achats){
    echo "<p>Paiment accepté</p>";
}else{
    echo "<p>Paiement refusé, il vous manque $manque €</p>";
}


$genre = "Masculin";

if($genre == 'Masculin'){
    echo "<p>Bonjour Monsieur</p>";
}elseif($genre == 'Feminin'){
    echo "<p>Bonjour Madame</p>";
}else{
    echo "<p>Bonjour !</p>";
}

$heure = 14;

if($heure < 0 || $heure > 23 ){
    echo "<p> Cette heure est incorrect</p>";
}elseif($heure >= 7 && $heure < 12){
    echo "<p>Bonne matiné</p>";
}elseif($heure >= 12 && $heure < 20){
    echo "<p>Bonne après-midi</p>";
}else{
    echo "<p>Bonne nuit</p>";
}

$degres = 2;

if($degres >= 0 && $degres < 12){
    echo "<p>Il fait froid</p>";
}elseif($degres >= 12 && $degres < 26){
    echo "<p>Il fait bon</p>";
}elseif($degres >= 26 && $degres < 35){
    echo "<p>Il fait chaud</p>";
}


