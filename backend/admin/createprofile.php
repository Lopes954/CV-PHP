<?php
    //On se connecte au serveur, et à la BDD
        require_once('connexion.php');
    //On lance le script sql permettant la création de notre table
        $sql = "CREATE TABLE profile(
            id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
            nom VARCHAR(50) NOT NULL,
            prenom VARCHAR(50) NOT NULL,
            age VARCHAR(50) NOT NULL,
            email VARCHAR(50) NOT NULL,
            photo varchar(50) DEFAULT NULL,
            adresse varchar(200) DEFAULT NULL,
            ville VARCHAR(30) NOT NULL,
            codepostal int(11) NOT NULL,
            pays VARCHAR(20) NOT NULL,
            numero VARCHAR(20) NOT NULL,
            emploi varchar(50) DEFAULT NULL,
            apropos text
            
            
        )";
    //On exécute la requête sql
        $bdd->exec($sql);
    //On reçoit un message selon que les opérations se sont bien passées
        echo "Votre Table à été créée avec succès !";
    //On ferme la connexion
        require_once('close.php');
?>