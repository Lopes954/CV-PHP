<?php
    session_start();

    // On inclut la connexion à la base
    require_once('connexion.php');

    if(isset($_GET['id']) && !empty($_GET['id'])){
        $id = strip_tags($_GET['id']);
        // On écrit notre requête
        $sql = 'SELECT * FROM `experience` WHERE `id`=:id';

        // On prépare la requête
        $query = $bdd->prepare($sql);

        // On attache les valeurs
        $query->bindValue(':id', $id, PDO::PARAM_INT);

        // On exécute la requête
        $query->execute();

        // On stocke le résultat dans un tableau associatif
        $experience = $query->fetch();

        if(!$experience){
            header('Location: ../config/dashborad.php');
        }
    }else{
        header('Location: ../config/dashboard.php');
    }

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
        <title>Read Element</title>
        
    </head>
    <body><br>
        <div class="container" id="mycontainerread">
            <div class="row" id="myrowread">
            <div class="col-md-3" id="myleft1">
                    <div class="row" id="myrowdash10">
                        <div class="col-md-4" id="dash12">
                            <button class="btn btn-success">
                                <a class="ajout" href="addexperience.php" id="dash12">Ajouter</a>
                            </button>
                        </div>
                        <div class="col-md-8" id="dash21">
                            
                        </div>
                    </div>
                    </div>
                <div class="col-md-3" id="mycenter10">
                    <div class="col-md-12" id="mytitle">
                        
                    </div>
                </div>
                <div class="col-md-3" id="myright1"></div>
                <div class="col-md-3" id="right2"></div>
            </div>

            <div class="row" id="myrowdash2">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Debut</th>
                            <th scope="col">Fin</th>
                            <th scope="col">Lieu</th>
                            <th scope="col">Poste</th>
                            <th scope="col">Descriptif</th>
                            
                            <th scope="col">Update</th>
                            <th scope="col">Delete</th>

                        </tr>
                    </thead>
                    <tbody>
                    
                        
                        <tr>
                            
                            <td><?= $experience['id']?></td>
                            <td><?= $experience['debut']?></td>
                            <td><?= $experience['fin']?></td>
                            <td><?= $experience['lieu']?></td>
                            <td><?= $experience['poste']?></td>
                            <td><?= $experience['descriptif']?></td>
                         

                            
                            <td class="ikp1">
                                <a class="#" href="updateexperience.php?id=<?= $experience['id']?>">
                                    <i class="fas fa-sync-alt ikp21"></i>
                                </a>
                            </td>
                            <td class="ikp1">
                                <a class="#" href="deleteexperience.php?id=<?= $experience['id']?>">
                                    <i class="fas fa-trash ikp31"></i>
                                </a>
                            </td>
                        </tr>
                     
                    </tbody>
                </table>
            </div>
            <div class="row" id="myrowedit3">
                <div class="col-md-4" id="mybtn1">
                    <button type="button" class="btn btn-success">
                        <a href="../config/dashboard.php" id="dash12">Dashboard</a>
                    </button>
                </div>
                <div class="col-md-4" id="mybtn2"></div>
                <div class="col-md-4" id="mybtn3"></div>
                <div class="col-md-4" id="mybtn4"></div>
            </div>
        </div>
        
    </body>
</html>