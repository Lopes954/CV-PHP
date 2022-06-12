<?php
    //On se connecte au serveur mysql
        require_once('connexion.php');
    //On lance la requête SQL (LDD)
        $sql = "CREATE DATABASE cvmvc";
    //On lance l'exécution de la requête
        $bdd->exec($sql);
    //On reçoit un message
        echo "BDD créée avec succès !";
    //On ferme la connexion
        require_once('close.php');
?>