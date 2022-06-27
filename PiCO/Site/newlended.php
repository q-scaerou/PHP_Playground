<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PiCO - Gestion de Prêts</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
            integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
        <link rel="stylesheet" href="./css/style.css">
    </head>

    <body>
              
        <header class="">
            <div class="bg-dark py-3">
                <h1>PiCO <i class="bi bi-bank"></i></h1>
            </div>
            
            <div class="row mx-2 text-center d-flex justify-content-around">
                <div class="mt-2 ml-2">
                    <button class="btn btn-dark rdbtn" onclick="window.location.href='./index.php';"><i class="bi bi-house"></i></button>
                    <p class="menu">Retourner à l'accueil ?</p>
                </div>
                <div class="mt-2">
                        <button class="btn btn-dark rdbtn" onclick="window.location.href='./lend.php';"><i class="bi bi-send"></i></button>
                        <p class="menu">Retourner à la liste des prêts ?</p>
                </div>
                <div class="mt-2 ml-2">
                        <button class="btn btn-dark rdbtn" onclick="window.location.href='./newlend.php';"><i class="bi bi-plus-circle"></i></button>
                        <p class="menu">Créer un nouveau prêt ?</p>
                </div>
            </div>
        </header>
        

        <?php
            try {
                // On se connecte à MySQL
                $mysqlClient = new PDO('mysql:host=localhost;dbname=pico;charset=utf8', 'admin_pico', 'pico123');
            }
            catch(Exception $e) {
	        // En cas d'erreur, on affiche un message et on arrête tout
                die('Erreur : '.$e->getMessage());
            }
        ?>
        <?php 
            $testInv = $mysqlClient->prepare('select id, num_inventaire from Inventory LEFT JOIN Prets ON id = Prets.inventory_id WHERE Prets.inventory_id IS NULL OR Prets.estencours IS FALSE;');
            $testInv->execute();
            $testNum = $testInv->fetchAll();  
            
            $startSearch = FALSE;
            $itemID = 0;
            foreach ($testNum as $num) {
                if ($num['num_inventaire'] == $_POST['invnumber']) {
                    $startSearch = $startSearch + TRUE;
                    $itemID = $num['id'];
                } 
            }
            
            if ($startSearch) {
            
        ?> <div class="mx-4"><h3 class="text-center">Prêt bien créé ! <i class="bi bi-check2-circle"></i></h3></div>

        <?php
                $setid=$mysqlClient->prepare('SELECT COUNT(id_pret) as total FROM prets');
                $setid->execute();
                $new_id = $setid->fetchColumn() + 1;

                $numPret = substr($_POST['date_debut'],0,4).substr($_POST['date_debut'],5,2).substr($_POST['date_debut'],8,2)."-".strtoupper(substr($_POST['ville'],0,3));
                $new_entry=$mysqlClient->prepare('INSERT INTO Prets VALUES (?, ?, ?, ?, ?, ?, ?, ?)');
                $new_entry->execute(array($new_id, $numPret, $_POST['destination'], $_POST['ville'], $_POST['date_debut'],
                $_POST['date_retour'], TRUE, $itemID));
                
            } else {

        ?>
                <div class="mx-4"><h3 class="text-center">Echec de l'enregistrement, le numéro d'inventaire "<?php echo $_POST['invnumber']?>" n'existe pas ou est déjà en prêt <i class="bi bi-x-circle"></i></h3></div>
        <?php
            }

            
            


                
                

                
        ?>

        <!-- <table class="table table-striped">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Actions</th>
                    <th scope="col">N° Inventaire</th>
                    <th scope="col">Designation</th>
                    <th scope="col">Auteur</th>
                    <th scope="col">Observations</th>
                </tr>
            </thead> -->

            <?php
                // $addedStatement = $mysqlClient->prepare('SELECT id, num_inventaire, designation, auteur, observations FROM inventory WHERE id = ?');
                // $addedStatement->execute(array($new_id));
                // $items = $addedStatement->fetchAll();
            ?>

        <?php
            // On affiche chaque item un à un
            // foreach ($items as $item) {
        ?>
            
            <!-- <tbody>
                <tr>
                    <td scope="row">
                        <div class="row">
                            <form action="show.php" method="POST">
                                <input type="hidden" name="id" value=<?php echo $item['id']; ?> >
                                <button class="btn btn-dark smallrdbtn" title="Afficher l'item" onclick="window.location.href='./show.php';">
                                <i class="bi bi-eye"></i></button>
                            </form>
                            <form action="update.php" method="POST">
                            <input type="hidden" name="update_id" value=<?php echo $item['id']; ?> >
                                <button class="btn btn-dark smallrdbtn" title="Modifier l'item" onclick="window.location.href='./update.php';">
                                <i class="bi bi-pencil-square"></i></button>
                            </form>
                            <form action="deleted.php" method="POST" onsubmit="return confirm('Cet item sera supprimé définitivement');">
                            <input type="hidden" name="delete_id" value=<?php echo $item['id']; ?> >
                            <button class="btn btn-dark smallrdbtn" title="Supprimer l'item";">
                            <i class="bi bi-trash"></i></button>
                        </form>
                        </div>
                    </td>
                    <td><?php echo $item['num_inventaire'];?></td>
                    <td><?php echo $item['designation'];?></td>
                    <td><?php echo $item['auteur'];?></td>
                    <td><?php echo $item['observations'];?></td>
                </tr>
            </tbody> -->
               
        <?php
            // }
        ?>
        </table>
          



    
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
            integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
            crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
            crossorigin="anonymous"></script>
    </body>

</html>