<?php

function calculeAire($largeur, $longueur){
    $aire = $largeur * $longueur;
    return $aire;
}

echo "L'aire du rectangle de $largeur cm le largeur et de $longueur cm de longueur est égale à " . calculeAire($largeur1, $longueur1) . " cm2";



echo "L'aire du rectangle de 40 cm le largeur et de 57 cm de longueur est égale à " . calculeAire(40, 57) . " cm2";

//Exercice
// Créer une fonction qui s'appelle plusGrand(). Elle prendra un argument de type tableau. Elle devra retourner le plus grand des élements present dans le tableau.

$tableau = [1,3,5,9,13];

function getMaxNumber($tab){
    $max = $tab[0];
    for($i=0;$i<count($tab);$i++){
        if($tab[$i] < $tab[$i + 1] && $tab[$i + 1] > $max){
            $max = $tab[$i + 1];
        }
    }
    return $max;
}

echo '<br>' . getMaxNumber($tableau);