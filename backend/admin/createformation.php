<?php
    //On se connecte au serveur, et à la BDD
        require_once('connexion.php');
    //On lance le script sql permettant la création de notre table
        $sql = "CREATE TABLE formation(
            id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
            annee INT(10) NOT NULL,
            lieu VARCHAR(250) NOT NULL,
            nomform VARCHAR(250) NOT NULL
           
            
            
        )";
    //On exécute la requête sql
        $bdd->exec($sql);
    //On reçoit un message selon que les opérations se sont bien passées
        echo "Votre Table à été créée avec succès !";
    //On ferme la connexion
        require_once('close.php');
?>