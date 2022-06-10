<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier</title>
</head>
<body>
    <?php 
        //On récupere la valeur de l'id depuis l'url
        $id = $_GET['id'];

        //base de donnée bdd1
        $base = new mysqli("localhost", "root", "root", "bdd1");

        //Si on arrive pas a se connecter à la base on arete 
        //l'execution du code et on affiche une erreur
        if($base->connect_error){
            exit("erreur de connexion à la base de donnée");
        }

        //Récupere le prenom dont l'id est récuperer par l'url
        $sql = "SELECT * FROM etudiants WHERE id=$id";

        //Execute la requete
        $resultat = $base->query($sql);

        //Recupere les valeurs dans un tableau associatif
        $etudiant =  $resultat->fetch_array();

    ?>
    <form action="update.php" method="post">
        <input type="text" name="prenom" value="<?php echo $etudiant["prenom"] ?>">
        <input type="hidden" name="id" value="<?php echo $etudiant["id"] ?>">
        <button type="submit">Modifier</button>
    </form>
</body>
</html>