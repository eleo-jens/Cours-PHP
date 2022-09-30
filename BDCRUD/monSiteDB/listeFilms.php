<?php

// 1. créer une connexion à la DB
include "./connexion/db.php";

try {
    // soit on met les paramètres dedans soit on crée un fichier
    $cnx = new PDO(DBDRIVER.':host='.DBHOST.';port='.DBPORT.
    ';dbname='.DBNAME.';charset='.DBCHARSET,DBUSER,DBPASS); 
} 
catch (Exception $e){
    // pour l'exercice: à ne pas faire en production car montre les infos sensibles
    echo $e->getMessage();
}

// 2. créer une requête SQL
$sql = "SELECT * FROM film";

// 3. lancer la requête SQL (préparation et lancement)
// préparer la requête; l'envoyer au serveur pour qu'il l'analyse: 
//il renvoit un objet qu'on peut appeler: $statement/ $stmt = la requete prête
$stmt = $cnx->prepare($sql);
$stmt->execute();

// 4. obtenir les données dans un array appelé $arrayRes
// exucute rempli l'objet avec les données
$arrayRes = $stmt->fetchAll(PDO::FETCH_ASSOC); 

// 5. afficher les données selon nos besoins 
// je peux l'encoder en json
foreach ($arrayRes as $film){
    echo "<br>";
    foreach ($film as $key => $val){
        echo $key ." : ". $val;
        echo "<br>";
    }
}
?>