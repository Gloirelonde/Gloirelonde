<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Liste des etudiants</h1>
    <?php 

    //base de donnée bdd1
    $base = new mysqli("localhost", "root", "root", "bdd1");

    //Si on arrive pas a se connecter à la base on arete 
    //l'execution du code et on affiche une erreur
    if($base->connect_error){
        exit("erreur de connexion à la base de donnée");
    }

    $sql = "SELECT * FROM etudiants";

    $etudiants = $base->query($sql);
    echo "<ul>";
        foreach($etudiants as $etu){
            echo "<li>";
            echo "{$etu['prenom']}";
            echo " <a href='form-update.php?id={$etu['id']}'>Modifier</a>";
            echo "</li>";
        }
    echo "</ul>";

    $base->close();
    ?>
</body>
</html>
