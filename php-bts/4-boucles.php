<?php 
/* Boucle For */
echo '-------Boucle For--------';
for($i=0;$i<10;$i++){
    echo $i;
    echo '<p>Bonjour le monde!</p>';
}

echo '------Boucle While------';
/* Boucle While */
$j=0;
while ($j <= 10) {
    echo '<p>Bonjour le monde!</p>';
    $j++;
}

echo '------Boucle Do While------';
/* Boucle Do-while */
$k=11;
do {
   echo "<p>Bonjour le monde ! </p>"; 
} while ($k <= 10);


/* Exercice */
/* En utilisant la boucle while, afficher tous les codes postaux possibles pour le département 94. */

echo "<p>Voici tous les codes postaux possibles pour le département 94 : </p>";
$i = 94000;
while($i <= 94999){
    echo $i . ' ';
    $i++;
}

/* 
Exercice
En utilisant la boucle for, afficher la table de multiplication du chiffre 5. */
echo "<p>Voici la table de multiplication du chiffre 5: </p>";
$table = 5;

for($i=1;$i<=10;$i++){
    echo $table . ' x ' . $i . ' = ' . ($table * $i) . '<br>';
}

/* Exercice */
$i= 0;
while($i<=20){
    if($i == 10){
        echo '<strong>' . $i . '</strong><br>';
    }else{
        echo $i . '<br>';
    }
    $i+=2;
}