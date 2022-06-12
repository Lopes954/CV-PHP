<?php
    //On se connecte au serveur, et à la BDD
        require_once('connexion.php');
    //On lance le script sql permettant la création de notre table
        $sql = "CREATE TABLE experience(
            id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
            debut VARCHAR(250) NOT NULL,
            fin VARCHAR(250) NOT NULL,
            lieu VARCHAR(250) NOT NULL,
            poste varchar(250) DEFAULT NULL,
            descriptif text
            
            
        )";
    //On exécute la requête sql
        $bdd->exec($sql);
    //On reçoit un message selon que les opérations se sont bien passées
        echo "Votre Table à été créée avec succès !";
    //On ferme la connexion
        require_once('close.php');
?>