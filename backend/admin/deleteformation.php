<?php
//On se connecte à la BDD
    require_once('connexion.php');
//On teste nos données
    if(isset($_GET['id']) && !empty($_GET['id'])){
        //on hydrate 
        $id = strip_tags($_GET['id']);
        //On lance le script sql
        $sql = "DELETE FROM `formation` WHERE `id`=:id";
        //On lance la requête préparée
        $query = $bdd->prepare($sql);
        //On lie donnée-valeur
        $query->bindValue(':id', $id, PDO::PARAM_INT);
        //On exécute la requête
        $query->execute();
        //On redirige
        header('Location: ../config/dashboard.php');
    }

    require_once('close.php');
?>