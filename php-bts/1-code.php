<?php 

/* Les noms de variable ne doivent pas contenir : 
    - des espaces
    - des caractéres spéciaux (é,è,ç).
    - commencer par un chiffre
*/
$nom = "Lucien"; //Type : chaine de caractere (string)
$age = 25; // Type: Nombre (int) 
$salarie = true; //Type : Bouléen (bool)
$salaire = 1234.56; //Type: Décimal (float)

echo $nom;
echo " ";
echo $age;
echo "ans ";
echo ", Mon salaire est de ";
echo $salaire;
echo "€";

//<=> echo $nom . " " . $age . "ans , Mon salaire est de " . $salaire . "€"

?>