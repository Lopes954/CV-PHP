<?php
    // 1.On se connecte à la BDD
    require_once('../config/connexion.php');
      //2.On teste nos données
      if(isset($_GET['id']) && !empty($_GET['id'])){
        //3.On hydrate
        $id = strip_tags($_GET['id']);
        //4.On lance le script Sql permettant la vérification de l'id        
        $sql = "SELECT * FROM `inscription` WHERE `id`=:id;";
        //5.On mets en place notre requête
        $query = $bdd->prepare($sql);
        //6.On lie le couple donnée-valeur
        $query->bindValue(':id', $id, PDO::PARAM_INT);
        //7.On exécute la requête
        $query->execute();
        //8.On stock le resultat de la requête dans une variable
        $result = $query->fetch();
    }

    if(isset($_POST))
    {
        if(isset($_POST['id']) && !empty($_POST['id'])
            && isset($_POST['nom']) && !empty($_POST['nom'])
            && isset($_POST['prenom']) && !empty($_POST['prenom'])
            && isset($_POST['email']) && !empty($_POST['email'])
            && isset($_POST['mot_de_passe']) && !empty($_POST['mot_de_passe'])
            && isset($_POST['numero']) && !empty($_POST['numero'])
            && isset($_POST['ville']) && !empty($_POST['ville'])
            && isset($_POST['pays']) && !empty($_POST['pays']))
   
            
            {
                $id = strip_tags($_GET['id']);
                $nom = strip_tags($_POST['nom']);
                $prenom = strip_tags($_POST['prenom']);
                $email = strip_tags($_POST['email']);
                $mot_de_passe = strip_tags($_POST['mot_de_passe']);
                $numero = strip_tags($_POST['numero']);
                $ville = strip_tags($_POST['ville']);
                $pays = strip_tags($_POST['pays']);
                
    
                $sql = "UPDATE `inscription` SET `nom`=:nom, `prenom`=:prenom, `email`=:email, `mot_de_passe`=:mot_de_passe,`numero`=:numero, `ville`=:ville, `pays`=:pays  WHERE `id`=:id;";
    
                $query = $bdd->prepare($sql);
    
                $query->bindValue(':nom', $nom, PDO::PARAM_STR);
                $query->bindValue(':prenom', $prenom, PDO::PARAM_STR);
                $query->bindValue(':email', $email, PDO::PARAM_STR);
                $query->bindValue(':mot_de_passe', $mot_de_passe, PDO::PARAM_STR);
                $query->bindValue(':numero', $numero, PDO::PARAM_STR);
                $query->bindValue(':ville', $ville, PDO::PARAM_STR);
                $query->bindValue(':pays', $pays, PDO::PARAM_STR);
                $query->bindValue(':id', $id, PDO::PARAM_INT);
    
                $query->execute();
    
                header('Location: ../config/dashboard.php');
            }
    }

      
    //9.On ferme la connexion à la base de donnée.
    require_once('../config/close.php');
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <title>Update User</title>
    </head>
    <body><br>
        <div class="container" id="mycontaineredit">
            <div class="row" id="myrowread1">
                <div class="col-md-2" id="dash1">
                    <div class="row">
                        <div class="col-md-6 " id="dash11">
                            <button type="button" class="btn btn-success">
                                <a href="inscription.php" id="dash12">Ajouter</a>
                            </button>
                            
                        </div>
                        <div class="col-md-6" id="dash21">
                           
                            
                        </div>
                    </div>
                    
                </div>
                <div class="col-md-7" id="dash2">
                    <div class="row">
                        <div class="col-md-3" id="mytitle1"></div>
                        
                        <div class="col-md-8" id="mytitle2"></div>
                        <div class="col-md-1" id="mytitle3"></div>
                    </div>
                    
                </div>
                <div class="col-md-3" id="dash3">
                    <div class="row">
                        <div class="col-sm-3" id="mycompt1"></div>
                        <div class="col-sm-1" id="mycompt2">
                        
                        
                           
                        
                        </div>
                        <div class="col-sm-8" id="mycompt3">
                        
                            
                        </div>
                        
                    </div>
                </div>
            </div>
            
            <div class="row" id="myrowupdate">
            
            <form method="post">

                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">Nom</th>
                            <th scope="col">Prenom</th>
                            <th scope="col">Email</th>
                            <th scope="col">Mot de passe</th>
                            <th scope="col">Numero</th>
                            <th scope="col">Ville</th>
                            <th scope="col">Pays</th>

                            <th scope="col" class="ikp2">Update</th>
                            <th scope="col" class="ikp3">Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        
                        <tr>

                            <td><input type="text" name="nom" id="nom"  value="<?= $result['nom'] ?>"></td>
                            <td><input type="text" name="prenom" id="prenom"  value="<?= $result['prenom'] ?>"></td>
                            <td><input type="text" name="email" id="email"   value="<?= $result['email'] ?>"></td>
                            <td><input type="text" name="mot_de_passe" id="mot_de_passe"   value="<?= $result['mot_de_passe'] ?>"></td>
                            <td><input type="tel" name="numero" id="numero"   value="<?= $result['numero'] ?>"></td>
                            <td><input type="text" name="ville" id="ville"   value="<?= $result['ville'] ?>"></td>
                            <td><input type="text" name="pays" id="pays"   value="<?= $result['pays'] ?>"></td>
                            
                            <td class="ikp2">
                                <button class="btn btn-success">
                                    <i class="fas fa-sync-alt"></i> 
                                </button>
                                <input type="hidden" name="id" value="<?= $result['id'] ?>">
                            </td>
                            <td class="ikp3">
                                <a >
                                    <i class="fas fa-trash-alt ikp31"></i>
                                </a>
                            </td>
                        </tr>
        
                    </tbody>

                </table>
            
                <div class="row" id="myrowedit3">
                    <div class="col-md-4" id="mybtn1">
                        <button type="button" class="btn btn-success">
                            <a href="../config/Dashboard.php" id="dash12">Dashboard</a>
                        </button>
                    </div>
                    <div class="col-md-4" id="mybtn2"></div>
                    <div class="col-md-4" id="mybtn3"></div>
                    <div class="col-md-4" id="mybtn4"></div>
                </div>
            
            </form>
            </div>
            


        </div>
        
    </body>
</html>