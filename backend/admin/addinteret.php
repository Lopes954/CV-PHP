<?php
    //On se connecte à la BDD
        require_once('connexion.php');
    //On prépare nos données
    
        if(isset($_POST)){
            if(isset($_POST['loisir']) && !empty($_POST['loisir']))
                
            {
                $loisir = strip_tags ($_POST['loisir']);
               
               

                //On lance la script sql
                $sql = 'INSERT INTO loisir(loisir) 
                VALUES(upper("'.$loisir.'"))';
                
                //On va faire une requête preparée
                $query = $bdd->prepare($sql);
                
                //On va lier le couple donnée valeur
                $query->bindValue(':loisir', $loisir, PDO::PARAM_STR);
               
   

                //On exécute la requête
                $query->execute();
                echo " effectuée";
                // print_r($sql);

                //On redirige vers un fichier d'accueil
                header('location:addinteret.php');
                
            }
        }
        //On ferme la connexion
        require_once('close.php');
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-loisiratible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../css/formulaire.css" />



    <title>Document</title>
</head>
<body>
    
<div class="container" id="container1">
        <div class="row">
            <div class="col-sm-4 bg-">
            <button class ="btn btn-dark"id="dash1">
                                <i class="fas fa-arrow-left"></i>
                                <a class="ajout" href="../../backend/config/dashboard.php">Tableau de Bord</a>
                          </button>
                <form method="post" action="addinteret.php" id="loisir">
                    <div class="form-group">
                      <label for="loisir"></label>
                      <input type="text" class="form-control" name="loisir" id="loisir" placeholder="loisir"   title="Pontuaction,numéro">
                    </div>

     
                    
                   
                    
                    
                   

            
                    
                    
                    <div class="row" id="myrowsing">
                        <div class="col-md-3" id="leftt1">
                            <button class="btn btn-success" type="submit"  value="valider">Valider</button>
                        </div>
                        <div class="col-md-6" id="leftt2"></div>
                        <div class="col-md-3" id="leftt3">
                            <button class="btn btn-warning">
                                <a class="singp" href="../login.php">Singup</a> 
                            </button>
                        </div>
                       
                
                        
                    </div>
                    
                
                </form>
            </div>
            <div class="col-sm-8 bg-"><img class="logo" src=""></div>
            <div class="col-sm-2 bg-"><img class="logo3" src=""></div>
    
    
            
        </div>
    </div>

    
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.slim.min.js" integrity="sha256-u7e5khyithlIdTpu22PHhENmPcRdFiHRjhAuHcs05RI=" crossorigin="anonymous"></script>
    <script src="js.js"></script>
</html>