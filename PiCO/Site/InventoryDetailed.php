<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PiCO - Inventaire réglementaire</title>
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
            <div class="mt-2 ml-2">
                <button class="btn btn-dark" onclick="window.location.href='./index.php';">Retour au Menu</button>
                <button class="btn btn-dark justify-content-right" onclick="window.location.href='./add.php';">Ajouter un nouvel item</button>
            </div>
            <div class="mx-4">
                <h3><a href="./Inventory.php">Inventaire réglementaire (vue simplifiée) </a> | Inventaire réglementaire (vue détaillée)</h3>
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

            // On récupère tout le contenu de la table inventory
            $inventoryStatement = $mysqlClient->prepare('SELECT * FROM inventory');
            $inventoryStatement->execute();
            $items = $inventoryStatement->fetchAll();
        ?>
        <table class="table table-striped">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Actions</th>
                    <th scope="col">N° Inventaire</th>
                    <th scope="col">Mode d'acquisition</th>
                    <th scope="col">Nom du donateur</th>
                    <th scope="col">Date d'acquisition</th>
                    <th scope="col">Avis des Instances scientifiques</th>
                    <th scope="col">Prix d'Achat / Subvention</th>
                    <th scope="col">Date d'affectation</th>
                    <th scope="col">Designation</th>
                    <th scope="col">Inscriptions</th>
                    <th scope="col">Matière</th>
                    <th scope="col">Technique</th>
                    <th scope="col">Mesures</th>
                    <th scope="col">Etat</th>
                    <th scope="col">Auteur</th>
                    <th scope="col">Datation</th>
                    <th scope="col">Fonction d'usage</th>
                    <th scope="col">Provenance Géographique</th>
                    <th scope="col">Observations</th>
                </tr>
            </thead>
        <?php
            // On affiche chaque item un à un
            foreach ($items as $item) {
        ?>
            
            <tbody>
                <tr>
                <td scope="row">
                        <div class="row">
                        <form action="show.php" method="POST">
                            <input type="hidden" name="id" value=<?php echo $item['id']; ?> >
                            <button class="btn btn-dark smallrdbtn" title="Afficher l'item" onclick="window.location.href='./show.php';">
                            <i class="bi bi-eye"></i></button>
                        </form>
                        <form action="update.php">
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
                    <td><?php echo $item['mode_acquisition'];?></td>
                    <td><?php echo $item['nom_donateur'];?></td>
                    <td><?php echo $item['date_acquisition'];?></td>
                    <td><?php echo $item['instanc_scientifique'];?></td>
                    <td><?php echo $item['prix_achat_subvention'];?></td>
                    <td><?php echo $item['date_affec'];?></td>
                    <td><?php echo $item['designation'];?></td>
                    <td><?php echo $item['inscriptions'];?></td>
                    <td><?php echo $item['matiere'];?></td>
                    <td><?php echo $item['technique'];?></td>
                    <td><?php echo $item['mesures'];?></td>
                    <td><?php echo $item['etat'];?></td>
                    <td><?php echo $item['auteur'];?></td>
                    <td><?php echo $item['datation'];?></td>
                    <td><?php echo $item['fonction_usage'];?></td>
                    <td><?php echo $item['prov_geo'];?></td>
                    <td><?php echo $item['observations'];?></td>
                </tr>
            </tbody>
               
        <?php
            }
        ?>
        </table> 
        <footer>
            <div class="bg-dark py-1">
                <p class="ml-2">&copy; PiCO <i class="bi bi-bank"></i> - 2022</p>
            </div>
        </footer>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
            integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
            crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
            crossorigin="anonymous"></script>
    </body>

</html>