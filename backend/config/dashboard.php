<?php
//on se connecte au serveur
require_once('connexion.php');
//on fait le script sql qui va aller chercher les donnes de la table users

$sql = 'SELECT  * FROM `inscription`';
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
//on ferme la connexion
require_once('close.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../css/dashboardstyle.css" />

</head>
<body>
    <header>
        <h1>Tableau de Bord<h1>

    </header>
        
<div class="container" id="mycontainerdash">
            <div class="row" id="myrowdash1">
                <div class="col-md-3" id="myleft1">
                  <div class="row" id="myrowdash10">
                      
                        <div class="col-md-3" >
                            <button class ="btn btn-dark"id="btncv"style="1.3em">
                                <a class="ajout" href="../../index.php" id="dashacceuil">CV</a>
                            </button>
                        </div>

                        
                    </div>
                </div>

             
                
              
               
            </div>

        <div class="row" id="myrowdash2">
                            <button class ="btn btn-dark"id="inscri1">
                                <a class="ajout" href="../user/inscription.php">inscription</a>
                            </button>
            <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Nom</th>
                            <th scope="col">Prenom</th>
                            <th scope="col">Email</th>
                            <th scope="col">Mot de passe</th>
                            <th scope="col">Numero</th>
                            <th scope="col">Ville</th>
                            <th scope="col">Pays</th>
                            <th scope="col">Read</th>
                            <th scope="col">Update</th>
                            <th scope="col">Delete</th>
                        </tr>
                    </thead>
                <tbody>
                     <?php
                            foreach($result as $r){
                        ?>
                        <tr>
                            <td><?=$r['id']?></td>
                            <td><?=$r['nom']?></td>
                            <td><?=$r['prenom']?></td>
                            <td><?=$r['email']?></td>
                            <td><?=$r['mot_de_passe']?></td>
                            <td><?=$r['numero']?></td>
                            <td><?=$r['ville']?></td>
                            <td><?=$r['pays']?></td>

                      
                            


                            <td class="ikp1"> 
                                <a class="#" href="../user/readinscription.php?id=<?php echo $r['id']?>">
                                    <i class="fas fa-edit"id="read" ></i>
                                </a>
                            </td>
                            <td class="ikp2">
                                <a href="../user/update.php?id=<?= $r['id']?>">
                                    <i class="fas fa-sync-alt"id="update"></i>
                                </a>
                            </td>
                            <td class="ikp3">
                                <a href="../user/delete.php?id=<?= $r['id']?>">
                                    <i class="fas fa-trash"id="delete"></i>
                                </a>
                            </td>
                        </tr>
                    <?php }?>
                </tbody>
            </table>
        </div>
        <div class="row" id="myrowdash3">
        <button class ="btn btn-dark">
                                <a class="ajout" href="../admin/addprofile.php">Profile</a>
                            </button>
            <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Nom</th>
                            <th scope="col">Prenom</th>
                            <th scope="col">age</th>
                            <th scope="col">Email</th>
                            <th scope="col">Photo</th>
                            <th scope="col">Adresse</th>
                            <th scope="col">Ville</th>
                            <th scope="col">Code postal</th>
                            <th scope="col">Pays</th>
                            <th scope="col">Numero</th>
                            <th scope="col">Emploi</th>
                            <th scope="col">A propos</th>
                            <th scope="col">Read</th>
                            <th scope="col">Update</th>
                            <th scope="col">Delete</th>
                        </tr>
                    </thead>
                <tbody>
                     <?php
                            foreach($result1 as $r){
                        ?>
                        <tr>
                            <td><?=$r['id']?></td>
                            <td><?=$r['nom']?></td>
                            <td><?=$r['prenom']?></td>
                            <td><?=$r['age']?></td>
                            <td><?=$r['email']?></td>
                            <td><?=$r['photo']?></td>
                            <td><?=$r['adresse']?></td>
                            <td><?=$r['ville']?></td>
                            <td><?=$r['codepostal']?></td>
                            <td><?=$r['pays']?></td>
                            <td><?=$r['numero']?></td>
                            <td><?=$r['emploi']?></td>
                            <td><?=$r['apropos']?></td>

                            <td class="ikp1">
                                <a class="#" href="../admin/readprofile.php?id=<?php echo $r['id']?>">
                                    <i class="fas fa-edit"id="read"></i>
                                </a>
                            </td>
                            <td class="ikp2">
                                <a href="../admin/updateprofile.php?id=<?= $r['id']?>">
                                    <i class="fas fa-sync-alt"id="update"></i>
                                </a>
                            </td>
                            <td class="ikp3">
                                <a href="../admin/deleteprofile.php?id=<?= $r['id']?>">
                                    <i class="fas fa-trash"id="delete"></i>
                                </a>
                            </td>
                        </tr>
                    <?php }?>
                </tbody>
            </table>
        </div>
        <div class="row" id="myrowdash4">
        <button class ="btn btn-dark">
                                <a class="ajout" href="../admin/addcompetence.php">Competence</a>
                            </button>
            <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Competence</th>
                            <th scope="col">Date</th>
                            <th scope="col">Niveau</th>
                            <th scope="col">Read</th>
                            <th scope="col">Update</th>
                            <th scope="col">Delete</th>
                        </tr>
                    </thead>
                <tbody>
                     <?php
                            foreach($result2 as $r){
                        ?>
                        <tr>
                            <td><?=$r['id']?></td>
                            <td><?=$r['comp']?></td>
                            <td><?=$r['dates']?></td>
                            <td><?=$r['niveau']?></td>
                         

                            <td class="ikp1">
                                <a class="#" href="../admin/readcompetence.php?id=<?php echo $r['id']?>">
                                    <i class="fas fa-edit"id="read"></i>
                                </a>
                            </td>
                            <td class="ikp2">
                                <a href="../admin/updatecompetence.php?id=<?= $r['id']?>">
                                    <i class="fas fa-sync-alt"id="update"></i>
                                </a>
                            </td>
                            <td class="ikp3">
                                <a href="../admin/deletecompetence.php?id=<?= $r['id']?>">
                                    <i class="fas fa-trash"id="delete"></i>
                                </a>
                            </td>
                        </tr>
                    <?php }?>
                </tbody>
            </table>
        </div>
        <div class="row" id="myrowdash5">
        <button class ="btn btn-dark">
                                <a class="ajout" href="../admin/addexperience.php">Experience</a>
                            </button>
            <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Debut</th>
                            <th scope="col">Fin</th>
                            <th scope="col">Lieu</th>
                            <th scope="col">Poste</th>
                            <th scope="col">Descriptif</th>
                            
                            
                            <th scope="col">Read</th>
                            <th scope="col">Update</th>
                            <th scope="col">Delete</th>
                        </tr>
                    </thead>
                <tbody>
                     <?php
                            foreach($result3 as $r){
                        ?>
                        <tr>
                            <td><?=$r['id']?></td>
                            <td><?=$r['debut']?></td>
                            <td><?=$r['fin']?></td>
                            <td><?=$r['lieu']?></td>
                            <td><?=$r['poste']?></td>
                            <td><?=$r['descriptif']?></td>
                         

                            <td class="ikp1">
                                <a class="#" href="../admin/readexperience.php?id=<?php echo $r['id']?>">
                                    <i class="fas fa-edit"id="read"></i>
                                </a>
                            </td>
                            <td class="ikp2">
                                <a href="../admin/updateexperience.php?id=<?= $r['id']?>">
                                    <i class="fas fa-sync-alt"id="update"></i>
                                </a>
                            </td>
                            <td class="ikp3">
                                <a href="../admin/deleteexperience.php?id=<?= $r['id']?>">
                                    <i class="fas fa-trash"id="delete"></i>
                                </a>
                            </td>
                        </tr>
                    <?php }?>
                </tbody>
            </table>
        </div>
        <div class="row" id="myrowdash6">
        <button class ="btn btn-dark">
                                <a class="ajout" href="../admin/addformation.php">formation</a>
                            </button>
            <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Année</th>
                            <th scope="col">Lieu</th>
                            <th scope="col">Diplome</th>
                            
                            
                            
                            <th scope="col">Read</th>
                            <th scope="col">Update</th>
                            <th scope="col">Delete</th>
                        </tr>
                    </thead>
                <tbody>
                     <?php
                            foreach($result4 as $r){
                        ?>
                        <tr>
                            <td><?=$r['id']?></td>
                            <td><?=$r['annee']?></td>
                            <td><?=$r['lieu']?></td>
                            <td><?=$r['nomform']?></td>
                            
                         

                            <td class="ikp1">
                                <a class="#" href="../admin/readformation.php?id=<?php echo $r['id']?>">
                                    <i class="fas fa-edit"id="read"></i>
                                </a>
                            </td>
                            <td class="ikp2">
                                <a href="../admin/updateformation.php?id=<?= $r['id']?>">
                                    <i class="fas fa-sync-alt"id="update"></i>
                                </a>
                            </td>
                            <td class="ikp3">
                                <a href="../admin/deleteformation.php?id=<?= $r['id']?>">
                                    <i class="fas fa-trash"id="delete"></i>
                                </a>
                            </td>
                        </tr>
                    <?php }?>
                </tbody>
            </table>
        </div>
        <div class="row" id="myrowdash6">
        <button class ="btn btn-dark">
                                <a class="ajout" href="../admin/addinteret.php">Loisirs</a>
                            </button>
            <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Loisirs</th>
                            
                            
                            
                            
                            <th scope="col">Read</th>
                            <th scope="col">Update</th>
                            <th scope="col">Delete</th>
                        </tr>
                    </thead>
                <tbody>
                     <?php
                            foreach($result5 as $r){
                        ?>
                        <tr>
                            <td><?=$r['id']?></td>
                            <td><?=$r['loisir']?></td>
                            
                            
                         

                            <td class="ikp1">
                                <a class="#" href="../admin/readinteret.php?id=<?php echo $r['id']?>">
                                    <i class="fas fa-edit"id="read"></i>
                                </a>
                            </td>
                            <td class="ikp2">
                                <a href="../admin/updateinteret.php?id=<?= $r['id']?>">
                                    <i class="fas fa-sync-alt"id="update"></i>
                                </a>
                            </td>
                            <td class="ikp3">
                                <a href="../admin/deleteinteret.php?id=<?= $r['id']?>">
                                    <i class="fas fa-trash"id="delete"></i>
                                </a>
                            </td>
                        </tr>
                    <?php }?>
                </tbody>
            </table>
        </div>
 </div>

                        
            

            
                    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </body>
</html>