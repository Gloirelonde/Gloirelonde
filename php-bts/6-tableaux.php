<?php 
//Tableau numéroté
$tab_noms = ["Victor", "Pierre", "Paul", "Gelord"];
// <=> $tab_noms = array("Victor", "Pierre", "Paul", "Gelord");
echo $tab_noms[2]; //Affiche Paul 
$tab_noms[] = "Manu";
$tab_noms[] = "John";

//Tableau associatif 

$coordonnes = ["adresse" => "23 rue paradis", 
                "ville" => "Paris 11", 
                "pays" => "France"];

echo $coordonnes["adresse"]; //23 rue Paradis

//ici je redefinie "23 rue Paradis" en "43 rue Victor hugo"
$coordonnes["adresse"] = "43 rue Victor hugo";
//ici j'ajoutre une nouvelle ligne dans le tableau
$coordonnes['langue'] = 'francais';

echo '<br><br>Parcourir un tableau numerotée<br>';
for($i=0;$i<count($tab_noms);$i++){
    echo $tab_noms[$i] . '<br>';
}

echo '<br><br>Parcourir un tableau associatif<br>';
foreach($coordonnes as $cle => $coor){
    echo $cle .  ' - ' . $coor . '<br>' ;
}
