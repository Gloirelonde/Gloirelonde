<?php

$id= $_GET['id'];

//base de donnée bdd1
$base = new mysqli("localhost", "root", "root", "bdd1");

//Si on arrive pas a se connecter à la base on arete 
//l'execution du code et on affiche une erreur
if($base->connect_error){
    exit("erreur de connexion à la base de donnée");
}

$sql = "DELETE FROM etudiants WHERE id=$id";

if($base->query($sql)){
    header('Location: index.php');
}else{
    echo "Problème de suppression";
}
/*on ferme la connexion a la base de donnée*/
$base->close();