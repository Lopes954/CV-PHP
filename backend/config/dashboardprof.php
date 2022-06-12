<?php
session_start();

//inclure la connection
    require_once('../config/connexion.php');

//Script SQL
    $sql0 = 'SELECT * FROM `me`';
    $sql2 = 'SELECT * FROM `competence`';
    $sql3 = 'SELECT * FROM `formation`';
    $sql4 = 'SELECT * FROM `experience`';
    $sql5 = 'SELECT * FROM `interet`';

//Prépare la requête
    $query0 = $pdo->prepare($sql0);//requête sur la table me
    $query2 = $pdo->prepare($sql2);//requête sur la table compétence
    $query3 = $pdo->prepare($sql3);//requête sur la table formation
    $query4 = $pdo->prepare($sql4);//requête sur la table expérience
    $query5 = $pdo->prepare($sql5);//requête sur la table intérêt

//On éxécute la requête
    $query0->execute();//Exécution de la requête sur la table me
    $query2->execute();//Exécution de la requête sur la table compétence
    $query3->execute();//Exécution de la requête sur la table formation
    $query4->execute();//Exécution de la requête sur la table expérience
    $query5->execute();//Exécution de la requête sur la table intérêt

//On stock les résultats dans un tableau associatif
    $result0 = $query0->fetchAll(PDO::FETCH_ASSOC);
    $result2 = $query2->fetchAll(PDO::FETCH_ASSOC);
    $result3 = $query3->fetchAll(PDO::FETCH_ASSOC);
    $result4 = $query4->fetchAll(PDO::FETCH_ASSOC);
    $result5 = $query5->fetchAll(PDO::FETCH_ASSOC);

require_once('close.php');

?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="../../FrontEnd/asset/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="../../FrontEnd/fontawesome/css/font-awesome.min.css">
        <title>Index BackEnd</title>
        <link rel="stylesheet" href="../css/dashboardstyle.css" />
    </head>

    <body>
        <?php
        include("header.html");
        
        ?>
        

        <div class="container-fluid">
            
            <div class="row" id="myrow1">
                <div class="container-fluid">
                    <div class="row" id="myrow2" style="border:1px solid red;">
                        <div class="col-md-4" id="titredash1"></div>
                        <div class="col-md-4" id="titredash">Tableau de bord</div>
                        <div class="col-md-4" id="titredash3">
                            <button class="btn btn-success" style="margin-top:40px;">
                                <a class="bback" href="../admin2/general.php" style="color:white; font-size:1em; font-weight:bold;">Général</a>
                            </button>
                        </div>
                        
                    </div>
                </div>
                <div class="col-md-12" id="message">
                    <?php
                    if(!empty($_SESSION['erreur'])){
                        echo '<div class="alert alert_danger" role="alert">'. $_SESSION['erreur'].'</div>';
                        $_SESSION['erreur'] = "";
                    }
                    ?>
                    <?php
                    if(!empty($_SESSION['message'])){
                        echo '<div class="alert alert-success" role="alert">'. $_SESSION['message'].'</div>';
                        $_SESSION['message'] = "";
                    }
                    ?>
                </div>

                <div class="col-md-12" id="bye">
                    <ul>
                        <div class="col-md-2.4" id="profi"><li><a href="#listpro">Profil</a></li></div>
                        <div class="col-md-2.4" id="compet"><li><a href="#listcomp">Compétence</a></li></div>
                        <div class="col-md-2.4" id="format"><li><a href="#listform">Formation</a></li></div>
                        <div class="col-md-2.4" id="experi"><li><a href="#listexp">Expérience</a></li></div>
                        <div class="col-md-2.4" id="intere"><li><a href="#listeint">Intêret</a></li></div>
                    </ul>
                </div>
            
                <div class="col-md-12" id="listpro">Liste des profils</div>
                <div class="col-md-12" id="addpro">
                    <a href="createprofile.php">
                        
                        <button class="btn btn-success">Ajouter un profil</button>
                    </a>
                </div>
                
                <?php
                //On boucle sur la variable result
                foreach($result0 as $me){
                ?>
                <div class="col-md-12">
                    <div class="col-md-1" id="idpro">ID</div>
                    <div class="col-md-2" id="nompro">Nom</div>
                    <div class="col-md-1" id="prepro">Prénom</div>
                    <div class="col-md-2" id="datpro">Date de naissance</div>
                    <div class="col-md-2" id="adrpro">Adresse</div>
                    <div class="col-md-1" id="cppro">CP</div> 
                    <div class="col-md-2" id="vilpro">Ville</div>
                    <div class="col-md-1" id="paypro">Pays</div>
                </div>     
                <div class="col-md-12">       
                    <div class="col-md-1" id="idprobd"><?= $me['id']  ?></div>
                    <div class="col-md-2" id="nomprobd"><?= $me['nom']  ?></div>
                    <div class="col-md-1" id="preprobd"><?= $me['prenom']  ?></div>
                    <div class="col-md-2" id="datprobd"><?= $me['daten']  ?></div>
                    <div class="col-md-2" id="adrprobd"><?= $me['adresse']  ?></div>
                    <div class="col-md-1" id="cpprobd"><?= $me['codepostal']  ?></div>
                    <div class="col-md-2" id="vilprobd"><?= $me['ville']  ?></div>
                    <div class="col-md-1" id="payprobd"><?= $me['pays']  ?></div>
                </div>         
                <?php
                }
                ?>
                <div class="col-md-12">
                    <div class="col-md-1" id="maipro">Mail</div>
                    <div class="col-md-1" id="porpro">Portable</div>
                    <div class="col-md-1" id="fixpro">Fixe</div>
                    <div class="col-md-1" id="titpro">Titre</div>
                    <div class="col-md-1" id="jobpro">Emploi</div>
                    <div class="col-md-4" id="aprpro">A propos</div> 
                    <div class="col-md-3" id="choixpro">Actions</div>
                </div>
                <?php
                //On boucle sur la variable result
                foreach($result0 as $me){
                ?>     
                <div class="col-md-12">       
                    <div class="col-md-1" id="maiprobd"><?= $me['mail']  ?></div>
                    <div class="col-md-1" id="porprobd"><?= $me['portable']  ?></div>
                    <div class="col-md-1" id="fixprobd"><?= $me['fixe']  ?></div>
                    <div class="col-md-1" id="titprobd"><?= $me['titre']  ?></div>
                    <div class="col-md-1" id="jobprobd"><?= $me['emploi']  ?></div>
                    <div class="col-md-4" id="aprprobd"><?= $me['apropos']  ?></div>
                    <div class="col-md-3" id="choixprobd">
                        <div class="col-md-4" id="choixproun"><a href="readprofile.php?id=<?= $me['id'] ?>" class="btn btn-success"><i class="fa fa-book"></i></a></div>
                        <div class="col-md-4" id="choixprode"><a href="updateprofile.php?id=<?= $me['id'] ?>" class="btn btn-warning"><i class="fa fa-refresh"></i></a></div>
                        <div class="col-md-4" id="choixprotr"><a href="deleteprofile.php?id=<?= $me['id'] ?>" onclick="return confirm(`Effacer le profil`);" class="btn btn-danger"><i class="fa fa-trash"></i></a></div>
                    </div> 
                </div>         
                <?php
                }
                ?>


                <div class="col-md-12" id="listcomp">Liste des compétences</div>
                <div class="col-md-12" id="addcomp">
                    <a href="createcompetence.php">
                        <button class="btn btn-success">Ajouter une compétence</button>
                    </a>
                </div>
                
                <div class="col-md-12">
                    <div class="col-md-2" id="idcomp">ID</div>
                    <div class="col-md-5" id="compcomp">Compétences</div>
                    <div class="col-md-5" id="choixcomp">Actions</div>
                </div>
                <?php
                //On boucle sur la variable result
                foreach($result2 as $competence){
                ?>     
                <div class="col-md-12">       
                    <div class="col-md-2" id="idcompbd"><?= $competence['id']  ?></div>
                    <div class="col-md-5" id="compcompbd"><?= $competence['comp']  ?></div>
                    <div class="col-md-5" id="choixcompbd">
                        <div class="col-md-4" id="choixcompun"><a href="readcompetence.php?id=<?= $competence['id'] ?>" class="btn btn-success"><i class="fa fa-book"></i></a></div>
                        <div class="col-md-4" id="choixcompde"><a href="updatecompetence.php?id=<?= $competence['id'] ?>" class="btn btn-warning"><i class="fa fa-refresh" aria-hidden="true"></i></a></div>
                        <div class="col-md-4" id="choixcomptr"><a href="deletecompetence.php?id=<?= $competence['id'] ?>" onclick="return confirm(`Effacer la compétence`);" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></a></div>
                    </div> 
                </div>         
                <?php
                }
                ?>
                        
                <div class="col-md-12" id="listform">Liste des formations</div>
                <div class="col-md-12" id="addform">
                    <a href="createformation.php">
                        <button class="btn btn-success">Ajouter une formation</button>  
                    </a>
                </div>

                <div class="col-md-12">
                    <div class="col-md-1" id="idform">ID</div>
                    <div class="col-md-2" id="anneform">Année de formation</div>
                    <div class="col-md-3" id="lieuform">Lieu de formation</div>
                    <div class="col-md-3" id="nomform">Nom de formation</div>
                    <div class="col-md-3" id="choixform">Actions</div>
                </div>
                <?php
                //On boucle sur la variable result
                foreach($result3 as $formation){
                ?>     
                <div class="col-md-12">       
                    <div class="col-md-1" id="idformbd"><?= $formation['id']  ?></div>
                    <div class="col-md-2" id="anneformbd"><?= $formation['annee']  ?></div>
                    <div class="col-md-3" id="lieuformbd"><?= $formation['lieuform']  ?></div>
                    <div class="col-md-3" id="nomformbd"><?= $formation['nomformation']  ?></div>
                    <div class="col-md-3" id="choixformbd">
                        <div class="col-md-4" id="choixformun"><a href="readformation.php?id=<?= $formation['id'] ?>" class="btn btn-success"><i class="fa fa-book"></i></a></div>
                        <div class="col-md-4" id="choixformde"><a href="updateformation.php?id=<?= $formation['id'] ?>" class="btn btn-warning"><i class="fa fa-refresh"></i></a></div>
                        <div class="col-md-4" id="choixformtr"><a href="deleteformation.php?id=<?= $formation['id'] ?>" onclick="return confirm(`Effacer la formation`);" class="btn btn-danger"><i class="fa fa-trash"></i></a></div>
                    </div> 
                </div>         
                <?php
                }
                ?>

                <div class="col-md-12" id="listexp">Liste des expériences</div>
                <div class="col-md-12" id="addexp">
                    <a href="createexperience.php">  
                        <button class="btn btn-success">Ajouter une expérience</button>
                    </a>
                </div>

                <div class="col-md-12">
                    <div class="col-md-1" id="idexp">ID</div>
                    <div class="col-md-1" id="debexp">Debut</div>
                    <div class="col-md-1" id="finexp">Fin</div>
                    <div class="col-md-2" id="lieuexp">Lieu</div>
                    <div class="col-md-2" id="metexp">Métier</div>
                    <div class="col-md-2" id="desexp">Description</div>
                    <div class="col-md-3" id="choixexp">Actions</div>
                </div>
                <?php
                //On boucle sur la variable result
                foreach($result4 as $experience){
                ?>     
                <div class="col-md-12">       
                    <div class="col-md-1" id="idexpbd"><?= $experience['id']  ?></div>
                    <div class="col-md-1" id="debexpbd"><?= $experience['moisanneestart']  ?></div>
                    <div class="col-md-1" id="finexpbd"><?= $experience['moisanneeend']  ?></div>
                    <div class="col-md-2" id="lieuexpbd"><?= $experience['lieu']  ?></div>
                    <div class="col-md-2" id="metexpbd"><?= $experience['nommetier']  ?></div>
                    <div class="col-md-2" id="desexpbd"><?= $experience['travail']  ?></div>
                    <div class="col-md-3" id="choixexpbd">
                        <div class="col-md-4" id="choixexpun"><a href="readexperience.php?id=<?= $experience['id'] ?>" class="btn btn-success"><i class="fa fa-book"></i></a></div>
                        <div class="col-md-4" id="choixexpde"><a href="updateexperience.php?id=<?= $experience['id'] ?>" class="btn btn-warning"><i class="fa fa-refresh"></i></a></div>
                        <div class="col-md-4" id="choixexptr"><a href="deleteexperience.php?id=<?= $experience['id'] ?>" onclick="return confirm(`Effacer l'expérience`);" class="btn btn-danger"><i class="fa fa-trash"></i></a></div>
                    </div> 
                </div>         
                <?php
                }
                ?>

                <div class="container-fluid" id="interet" style="background-color:dimgray;">

                
                    <div class="row" id="interet" style="border:1px solid red; padding:25px 0px;">

                
                        <div class="col-md-12" id="listeint">Liste des intêrets</div>
                            <div class="col-md-12" id="addint">
                                <a href="createinteret.php">   
                                    <button class="btn btn-success">Ajouter un intêret</button>
                                </a>
                            </div>
                            
                    </div>
                            
                    <div class="row" id="interet" style="border:1px solid red; padding:25px 0px;"> 
                        <div class="col-md-1" id="myinteret"></div>
                        <div class="col-md-10" id="myinteret">
                            <table class="table table-striped" style="background-color:cadetblue">                                
                                <thead>
                                    <tr>
                                        <th scope="col">ID</th>
                                        <th scope="col-3">Intérêt</th>
                                        <th scope="col-4">Description</th>
                                        <th scope="col" class="ikp1">Read</th>
                                        <th scope="col" class="ikp2">Update</th>
                                        <th scope="col" class="ikp3">Delete</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        foreach($result5 as $interet){
                                    ?>
                                        <tr>
                                            <td class="col-1"><?= $interet['id']?></td>
                                            <td class="col-md-3"><?= mb_strtoupper(htmlentities($interet['hobbie']))?></td>
                                            <td class="col-md-5" style="text-align:justify"><?= ucwords(strtolower(htmlentities($interet['textehobbie'])))?></td>
                                            

                                            <td class="col-md-1">
                                                <a href="readinteret.php?id=<?= $interet['id']?>"class="btn btn-success"><i class="fa fa-edit"></i></a>
                                            </td>
                                            <td class="col-md-1">
                                                <a href="updateinteret.php?id=<?= $interet['id']?>"class="btn btn-warning"><i class="fa fa-refresh"></i></a>
                                            </td>
                                            <td class="col-md-1">
                                                <a href="deleteinteret.php?id=<?= $interet['id']?>" onclick="return confirm(`Effacer l'intêret`);" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                                            </td>
                                        </tr>
                                    <?php }?>

                                        
                                    
                                </tbody>
                            </table>
                        </div>
                        <div class="col-md-1" id="myinteret"></div>
                            
                    
                    </div>  

                </div>
            </div>

        </div><br><br>

        <!--- FIN CONTENT --->

        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js" integrity="sha384-LtrjvnR4Twt/qOuYxE721u19sVFLVSA4hf/rRt6PrZTmiPltdZcI7q7PXQBYTKyf" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>        
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    </body>
</html>