<?php 
//Ce qu'il aura saisi dans le formulaire
$prenom = $_POST["prenom"];
$age = $_POST["age"];

//base de donnée bdd1
$base = new mysqli("localhost", "root", "root", "bdd1");

//Si on arrive pas a se connecter à la base on arete 
//l'execution du code et on affiche une erreur
if($base->connect_error){
    exit("erreur de connexion à la base de donnée");
}

//Création de la requete SQL d'insertion
$sql = "INSERT INTO etudiants(prenom,age) VALUES ('$prenom', $age)";

/*on envoie le requete SQL contenue dans $sql vers la base de donnée*/
if($base->query($sql)){
    echo "Le prenom à été ajouté";
}else{
    echo "Probleme d'ajout";
}
/*on ferme la connexion a la base de donnée*/
$base->close();

