<?php
    //On se connecte au serveur, et à la BDD
        require_once('connexion.php');
    //On lance le script sql permettant la création de notre table
        $sql = "CREATE TABLE inscription(
            id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
            nom VARCHAR(50) NOT NULL,
            prenom VARCHAR(50) NOT NULL,
            email VARCHAR(50) NOT NULL,UNIQUE(email),
            mot_de_passe VARCHAR (20) NOT NULL,
            numero VARCHAR(20) NOT NULL,
            ville VARCHAR(30) NOT NULL,
            pays VARCHAR(20) NOT NULL
        )";
    //On exécute la requête sql
        $bdd->exec($sql);
    //On reçoit un message selon que les opérations se sont bien passées
        echo "Votre Table à été créée avec succès !";
    //On ferme la connexion
    require_once('close.php');

?>