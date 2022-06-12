<?php

abstract class modele{
    //1.on fait appel a PDO
    private $bdd;

    //2.execution d'une requete SQL eventuellement parametrée
    
    /**
     * @param string $sql la requele sql
     * @param array $valeurs les valeurs associées a la requete
     * @return PDOStatement le resultat renvoyé par la requete
     */
    protected function executerequete($sql, $param = null){
        if($param == null){
            $resultat = $this->getbdd()->querry($sql);//execution directe
        }else{
            $resultat = $this->getbdd()->prepare($sql);//requete preparée
            $resultat->execute($param);
        }
        return $resultat;
    }

    /***
     * on renvoie un objet de connexion a la bdd en nitialisant la connexion
     * @return PDO l'objet PDO de connexion a la bdd
     */
    private function getbdd(){
        if($this->bdd == null){
            //13. on crée la connexion a la bdd
            $this->bdd = new PDO ('mysql:host=localhost:dbname=cvmvc','root','root',
            array(PDO::ATTE_ERRMODE => PDO::ERRMODE_EXCEPTION));
        }
        return $this->bdd;
    }
}