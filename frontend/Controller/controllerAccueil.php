<?php
     //1.on fait appel au fichiers permettant a ce controller de fonctionner

     require_once('modele/cv.php');
     require_once('vue/vue.php');

     //2.on creéer notre classe

     class controleuraccueil{
         //3.on va créer une variable

         private $cv;

         //4.on va créer un contructeur

         public function __construct()
         {
             $this->cv = new cv();

         }

         //5.on affiche la liste de toutes les tables du cv

         public function acceuil(){
             $profile = $this->cv->getprofile();
             $experience = $this->cv->getexperience();
             $competence = $this->cv->getcompetence();
             $inscription = $this->cv->getinscription();
             $vue = new vue ("acceuil");
             $vue->generer(array('profile'=> $profile,'experience'=> $experience,'competence'=> $competence,'inscription'=> $inscription))


         }
     }