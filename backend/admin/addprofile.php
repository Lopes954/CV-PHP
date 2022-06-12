<?php
    //On se connecte à la BDD
        require_once('connexion.php');
    //On prépare nos données
        if(isset($_POST)){
            if(isset($_POST['nom']) && !empty($_POST['nom'])
                && isset($_POST['prenom']) && !empty($_POST['prenom']))
            {
                $nom = strip_tags ($_POST['nom']);
                $prenom = strip_tags($_POST['prenom']);
                $age = strip_tags($_POST['age']);
                $email = strip_tags($_POST['email']);
                $photo = strip_tags($_POST['photo']);
                $adresse = strip_tags($_POST['adresse']);
                $ville = strip_tags($_POST['ville']);
                $codepostal = strip_tags($_POST['codepostal']);
                $pays = strip_tags($_POST['pays']);
                $numero = strip_tags($_POST['numero']);
          
                $emploi = strip_tags($_POST['emploi']);
                $apropos = strip_tags($_POST['apropos']);

                //On lance la script sql
                $sql = 'INSERT INTO profile(nom,prenom,age,email,photo,adresse,ville,codepostal,pays,numero,emploi,apropos) 
                VALUES(upper("'.$nom.'"), "'.$prenom.'","'.$age.'", "'.$email.'", "'.$photo.'","'.$adresse.'", "'.$ville.'","'.$codepostal.'","'.$pays.'","'.$numero.'","'.$emploi.'","'.$apropos.'")';
                
                //On va faire une requête preparée
                $query = $bdd->prepare($sql);
                
                //On va lier le couple donnée valeur
                $query->bindValue(':nom', $nom, PDO::PARAM_STR);
                $query->bindValue(':prenom', $prenom, PDO::PARAM_STR);
                $query->bindValue(':age', $age, PDO::PARAM_STR);
                $query->bindValue(':email', $email, PDO::PARAM_STR);
                $query->bindValue(':photo', $photo, PDO::PARAM_STR);
                $query->bindValue(':adresse', $adresse, PDO::PARAM_STR);
                $query->bindValue(':ville', $ville, PDO::PARAM_STR);
                $query->bindValue(':codepostal', $codepostal, PDO::PARAM_INT);
                $query->bindValue(':pays', $pays, PDO::PARAM_STR);
                $query->bindValue(':numero', $numero, PDO::PARAM_STR);
                $query->bindValue(':titre', $titre, PDO::PARAM_STR);
                $query->bindValue(':emploi', $emploi, PDO::PARAM_STR);
                $query->bindValue(':apropos', $apropos, PDO::PARAM_STR);

                //On exécute la requête
                $query->execute();
                echo "inscription effectuée";

                //On redirige vers un fichier d'accueil
                header('location:addprofile.php');
                
            }
        }
        //On ferme la connexion
        require_once('close.php');
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="../css/user.css" rel="stylesheet" />
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
              <fieldset>
                <form method="post" action="addprofile.php" id="profile">
                    <div class="form-group">
                      <label for="nom"></label>
                      <input type="text" class="form-control" name="nom" id="nom" placeholder="Nom"   title="Pontuaction,numéro">
                    </div>

                    <div>
                      <label for="prenom"></label>
                      <input type="text" class="form-control" name="prenom" id="prenom" placeholder="Prenom" >
                    </div>
                    <div>
                      <label for="age"></label>
                      <input type="text" class="form-control" name="age" id="age" placeholder="age" >
                    </div>
                    
                    <div>
                      <label for="email"></label>
                      <input type="text" class="form-control" name="email" id="email" placeholder="Email"  >
                    </div>
                   
                    <div>
                      <label for="photo"></label>
                      <input type="text" class="form-control" name="photo" id="photo" placeholder="Photo" >
                    </div>
                    <div>
                      <label for="adresse"></label>
                      <input type="tel" class="form-control" name="adresse" id="adresse" placeholder="adresse" >
                    </div>

                    <div>
                      <label for="ville"></label>
                      <input type="ville" class="form-control" name="ville" id="ville" placeholder="Ville"  >
                    </div>
                    <div>
                      <label for="codepostal"></label>
                      <input type="codepostal" class="form-control" name="codepostal" id="codepostal" placeholder="Code postal"  >
                    </div>
                    <div>
                      <label for="pays"></label>
                      <input type="pays" class="form-control" name="pays" id="pays" placeholder="pays"  >
                    </div>
                    <div>
                      <label for="numero"></label>
                      <input type="numero" class="form-control" name="numero" id="numero" placeholder="numero"  >
                    </div>
                   
                    <div>
                      <label for="emploi"></label>
                      <input type="emploi" class="form-control" name="emploi" id="emploi" placeholder="emploi"  >
                    </div>
                    <div>
                      <label for="apropos"></label>
                      <textarea type="apropos" class="form-control" name="apropos" id="apropos" placeholder="apropos"></textarea>
                    </div>
              </fieldset>
                    
                    
                   

            
                    
                    
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