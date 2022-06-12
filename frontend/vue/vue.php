<?php

//1.on va creer notre classe vue

class vue {
    //2.on va créer une variable que l'on va associer a la vue
       private $fichier;
    //3.on va créer une variable permetant de donner des titre aux vues

      private $titre;
    
    //4.on va créer un contructeur

    public function __construct($action)
    {
        //5.on determine le nom du fichier vue a partir de l'action 

        $this->fichier = "vue/vue" .$action. ".php";

    }

    //6.on genere, et affiche la vue

    public function generer ($donnees){
        //7. generation de la partie specifique de la vue
        $contenu = $this->genererfichier($this->fichier, $donnees);
        //8.generation du gabarit commun utilisant la partie specifique
        $vue = $this->genererfichier('vue/gabarit.php',array('titre'=> $this->titre, 'contenu' => $contenu));
        //9. on renvoi la vue au navigateur
        echo $vue;
    }

       //10. on va generer un fichier vue qui renvoie le resultat produit
       public function genererfichier($fichier, $donnees){
           if(file_exists($fichier)){
               //11. rend les elements du tableau $donnees accessible dans la vue
               extract($donnees);
               //12.demarrage de la temporisation de la sortie
               ob_start();
               //13.on inclut le fichier vue, et le resultat est placé dans la tamporisation
               require $fichier;
               //14.on arrete la temporisation
               return ob_get_clean();


           }else{
               throw new exception ("fichier '$fichier' introuvable ");
           }
       }
}