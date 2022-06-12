<?php
    // 1.On se connecte à la BDD
    require_once('connexion.php');
      //2.On teste nos données
      if(isset($_GET['id']) && !empty($_GET['id'])){
        //3.On hydrate
        $id = strip_tags($_GET['id']);
        //4.On lance le script Sql permettant la vérification de l'id        
        $sql = "SELECT * FROM `formation` WHERE `id`=:id;";
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
            && isset($_POST['annee']) && !empty($_POST['annee'])
            && isset($_POST['lieu']) && !empty($_POST['lieu'])
            && isset($_POST['nomform']) && !empty($_POST['nomform']))
           
   
            
            {
                $id = strip_tags($_GET['id']);
                $annee = strip_tags($_POST['annee']);
                $lieu = strip_tags($_POST['lieu']);
                $nomform = strip_tags($_POST['nomform']);
            
              
                
    
                $sql = "UPDATE `formation` SET `annee`=:annee, `lieu`=:lieu, `nomform`=:nomform WHERE `id`=:id;";
    
                $query = $bdd->prepare($sql);
    
                $query->bindValue(':annee', $annee, PDO::PARAM_STR);
                $query->bindValue(':lieu', $lieu, PDO::PARAM_STR);
                $query->bindValue(':nomform', $nomform, PDO::PARAM_STR);
             
            
                $query->bindValue(':id', $id, PDO::PARAM_INT);

                
    
                $query->execute();
    
                header('Location: ../config/dashboard.php');
            }
    }

      
    //9.On ferme la connexion à la base de donnée.
    require_once('close.php');
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
                                <a href="addformation.php" id="dash12">Ajouter</a>
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
                            <th scope="col">annee</th>
                            <th scope="col">Lieu</th>
                            <th scope="col">Diplome</th>
                         
                       

                            <th scope="col" class="ikp2">Update</th>
                            <th scope="col" class="ikp3">Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        
                        <tr>

                            <td><input type="text" name="annee" id="annee"  value="<?= $result['annee'] ?>"></td>
                            <td><input type="text" name="lieu" id="lieu"  value="<?= $result['lieu'] ?>"></td>
                            <td><input type="text" name="nomform" id="nomform"    value="<?= $result['nomform'] ?>"></td>
                            
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