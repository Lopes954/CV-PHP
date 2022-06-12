<?php
//on se connecte au serveur
require_once('backend/config/connexion.php');
//on fait le script sql qui va aller chercher les donnes de la table users

$sql = 'SELECT  * FROM `inscription` ';
$sql1 = 'SELECT * FROM `profile`';
$sql2 = 'SELECT * FROM `competence`';
$sql3 = 'SELECT * FROM `experience`';
$sql4 = 'SELECT * FROM `formation`';
$sql5 = 'SELECT * FROM `loisir`';

//on redige notre requete preparée
$query = $bdd->prepare($sql);
$query1 = $bdd->prepare($sql1);
$query2 = $bdd->prepare($sql2);
$query3 = $bdd->prepare($sql3);
$query4 = $bdd->prepare($sql4);
$query5 = $bdd->prepare($sql5);
//on execute la requete 
$query->execute();
$query1->execute();
$query2->execute();
$query3->execute();
$query4->execute();
$query5->execute();
//on stock le resultat de l'execution de la requete dans un tableau associatif
$result = $query->fetchAll(PDO::FETCH_ASSOC);
$result1 = $query1->fetchAll(PDO::FETCH_ASSOC);
$result2 = $query2->fetchAll(PDO::FETCH_ASSOC);
$result3 = $query3->fetchAll(PDO::FETCH_ASSOC);
$result4 = $query4->fetchAll(PDO::FETCH_ASSOC);
$result5 = $query5->fetchAll(PDO::FETCH_ASSOC);
// print_r($result5);
//on ferme la connexion
require_once('backend/config/close.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cv</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="backend/css/index.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Parisienne&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Azeret+Mono:ital,wght@0,400;1,900&display=swap" rel="stylesheet"></head>
<body>
    <div class="containerfluid" id="container1">
        <div class="row" id="row1">
            <div class="col-sm-5" id="nav10">                <nav class="navbar navbar-expand-lg navbar-light bg-" id="nav21">
                    <div class="container-fluid">
                    
                      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                      </button>
                      <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                          <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#myidentite"><i class="fa fa-home"></i></a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="#profile">Profile</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="#formationt">Formations</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="#experiencet">Expériences</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="#competencet">Compétences</a>
                          </li>
                          <!-- <li class="nav-item">
                            <a class="nav-link" href="#loisirt">Loisirs</a>
                          </li> -->
                         
                          
                         
                        </ul>
                        
                      </div>
                    </div>
                  </nav>
                </div>
             <div class="col-sm-3"></div>
             <div class="col-sm-4">
                            <button class ="btn btn-dark"id="dash1">
                                <a class="ajout" href="backend/config/dashboard.php">Tableau de Bord</a>
                            </button>
             </div>
            
        </div>
    </div>
    <div class="container-fluid" id="container2">
        <div class="row" id="row2">
            
            <div class="col-sm-9" id="myidentite">
             
                <?php  foreach($result1 as $r){?>
                        
                <div class="col-sm-12" id="myname"><?=$r['nom']?>   </div>
                <div class="col-sm-12" id="myprofession"><?=$r['emploi']?></div>
                
                

            </div>
            <div class="col-sm-2">
                <img class="silouhette" src="frontend/asset/image/<?=$r['photo']?>"id="imgp">
            </div>  
        <?php }?>
        </div>
    </div>

    <div class="container-fluid" id="container3">
        <div class="row" id="row3">
          <div class="col-sm-7" id="profile"><?=$r['apropos']?></div>
   
                <div class="col-sm-1" id="fleche">
                  <i class="fas fa-user-plus"id="fleche10"></i> 

                </div>
                <div class="col-sm-2" id="info">
                   <?=$r['prenom']?>
                   <?=$r['nom']?><br>
                   <?=$r['age']?><br>
                   <i class="far fa-envelope"></i><?=$r['email']?><br>
                   <i class="fas fa-mobile-alt"></i><?=$r['numero']?><br>
                   <i class="fas fa-globe-asia"></i><?=$r['ville']?>
                   <?=$r['adresse']?>
                </div>
           
            
            
        </div>
    </div>
    <hr>
    <div class="containerfluid" id="container4">
        <div class="row" id="row4">
            <div class="col-sm-4"></div>
            <div class="col-sm-4" id="formationt">Formation</div>
            <div class="col-sm-4"></div>
        </div>
    </div>

    <div class="container" id="container5">
        
        <?php  foreach($result4 as $r){?>
        <div class="row" id="row5">
            
            
            <div class="col-sm-1"><?=$r['annee']?></div>
            <div class="col-sm-1"></div>
            <div class="col-sm-4" id="datef"><?=$r['lieu']?></div>
            
            <div class="col-sm-5" id="datef"><?=$r['nomform']?></div>
              
          </div>
            <?php }?>
        </div>
    </div>
    <hr>
    <div class="containerfluid" id="6">
        <div class="row" id="row6">
           <div class="col-sm-4"></div>
           <div class="col-sm-4" id="experiencet">Expérience</div>
           <div class="col-sm-4"></div>

        </div>
    </div>

    <div class="container" id="container7">
        
        <?php  foreach($result3 as $r){?>
        <div class="row" id="row7">
            
            

             

              
              <div class="col-sm-2" id="datef"><?=$r['debut']?></div>
              <div class="col-sm-1">à</div>
              <div class="col-sm-2" id="datef"><?=$r['fin']?></div>
              <div class="col-sm-2" id="datef"><?=$r['lieu']?></div>
              
              
              <div class="col-sm-5" id="datef"><?=$r['descriptif']?></div>
              
          </div>
            <?php }?>
        </div>
    </div>
    <hr>
    <div class="containerfluid" id="container8">
        <div class="row" id="row8">
           <div class="col-sm-4"></div>
           <div class="col-sm-4" id="competencet">Compétence</div>
           <div class="col-sm-4"></div>

        </div>
    </div>

    <div class="container" id="container9">
        
        <?php  foreach($result2 as $r){?>
        <div class="row" id="row9">
            
             <div class="col-sm-2" id="datef"><?=$r['dates']?></div>
              <div class="col-sm-2" id="datef"><?=$r['comp']?></div>
              <div class="col-sm-5">
                  <div class="col-sm-12">
                <div class="progress">
                  <div class="progress-bar progress-bar-striped bg-dark" role="progressbar" style="width: <?=$r['niveau']?>%" aria-valuenow="30%" aria-valuemax="100"><?=$r['comp']?></div>
               </div>
                  </div>
                  
              </div>
             

              
              
              
              
          </div>
            <?php }?>
        </div>
    </div>

    

    <div class="containerfluid" id="container10">
        <div class="row" id="row10">
           <div class="col-sm-4"></div>
           <div class="col-sm-4" id="loisirt"></div>
           <div class="col-sm-4"></div>

        </div>
    </div>


    <!-- <div class="container-fluid" id="container11">
      <div class="row" id="row11">
      <div class="col-sm-1"></div>

        <div class="col-sm-2">
        <i class="fas fa-running"id="icone1"></i>
        </div>
        <div class="col-sm-2"><i class="fas fa-sun"id="icone1"></i></div>
        <div class="col-sm-2">

        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
          
          <div class="carousel-inner">
                <div class="carousel-item active">
                  <img src="frontend/asset/image/foot.jpg" id="imgloisir" class="d-block w-100" alt="...">
                </div>

            <?php  foreach($result5 as $r){?>


            <div class="carousel-item">
              <img src="frontend/asset/image/<?=$r['loisir']?>" id="imgloisir2" class="d-block w-100" alt="...">
            </div>

            <?php }?>

          
          </div>
       
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

        </div>
        <div class="col-sm-2"><i class="fas fa-plane-departure" id="icone2"></i></div>
        <div class="col-sm-2"><i class="fas fa-futbol"id="icone2"></i></div>
        <div class="col-sm-1"></div>
      </div>
    </div> -->
    
 

                        
            

            
             <script src="js.js"defer></script>       
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </body>
</html>