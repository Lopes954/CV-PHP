<?php
//on fait appel a des fichiers permettant l'utilisation du routeur
require_once('controller/controlleraccueil.php');
require_once('vue/vue.php');

//2.on crée notre class routeur
class routeur{

//3. on va creer une variable
private $ctrlacceuil;
//4.on va creer un contructeur
public function __construct()
{
    $this->ctrlacceuil = new controlleracceuil();
}
//5.route pour requete entrante: execution de l'action associée
public function routerrequete(){
    try{
        if(isset($_GET)['action'])){
            if($_GET)['action'] == 'cv'){
                $idcv = interval($this->getparametre($_GET,'id'));
                if($idcv !=0){
                    $this->ctrlcv->($idcv);
                }else{
                    throw new exception('identifiant du cv non cv');
                }

            }else{
                throw new exception("action non valide");
            }
        }
    }
}
}