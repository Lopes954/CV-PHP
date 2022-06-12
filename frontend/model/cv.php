<?php

//1. on fait appel au fichier permettant au model
require_once('model/modele.php');

class cv extends modele{
    //1.on renvoi la liste du CV
    /**
     * @return PDOStatement les liste de CV
     */
    public function getprofile(){
        $sql = 'SELECT * FROM profile';
        $profile = $this ->executerrequete($sql);
        return $profile;
    }
    public function getexperience(){
        $sql = 'SELECT * FROM experience';
        $experience = $this ->executerrequete($sql);
        return $experience;
    }
    public function getcompetence(){
        $sql = 'SELECT * FROM competence';
        $competence = $this ->executerrequete($sql);
        return $competence;
    }
    public function getinscription(){
        $sql = 'SELECT * FROM inscription';
        $inscription = $this ->executerrequete($sql);
        return $inscription;
    }
}