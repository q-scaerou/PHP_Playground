<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PiCO - Modifier</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
            integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
        <link rel="stylesheet" href="./css/style.css">
    </head>

    <body>
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
            $inventoryStatement = $mysqlClient->prepare('SELECT * FROM inventory WHERE id = ?');
            $inventoryStatement->execute(array($_POST['update_id']));
            $items = $inventoryStatement->fetchAll();
        ?>
        <header class="">
            <div class="bg-dark py-3">
                <h1>PiCO <i class="bi bi-bank"></i></h1>
            </div>
            <div class="mt-2 ml-2">
                <button class="btn btn-dark" onclick="window.location.href='./index.php';">Retour au Menu</button>
                <button class="btn btn-dark justify-content-right" onclick="window.location.href='./inventory.php';">Retour à l'inventaire</button>
            </div>
            <div class="mx-4">
                <h3>Modification de l'item <i class="bi bi-pencil-square"></i></h3>
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
            $inventoryStatement = $mysqlClient->prepare('SELECT * FROM inventory WHERE id = ?');
            $inventoryStatement->execute(array($_POST['update_id']));
            $items = $inventoryStatement->fetchAll();
        ?>
        <?php
            // On affiche chaque item un à un
            foreach ($items as $item) {
        ?>
        <div class="formular">
            <h5>Modification de l'item</h5>
            <form action="updated.php" method="post">
                <input type="hidden" name="update_id" value="<?php echo $item['id'];?>">
                <div class="formfield">  
                    <label for="invnumber">Numéro d'inventaire</label>
                    <br />        
                    <input type="text" id="invnumber" name="invnumber" required size="75" maxlength="15" value="<?php echo $item['num_inventaire'];?>">
                 </div>

                 <div class="formfield">
                    <label for="mod_acquisition">Mode d'acquisition</label>
                    <br />
                    <input type="text" id="mod_acquisition" name="mod_acquisition" required size="75" maxlength="40" value="<?php echo $item['mode_acquisition'];?>">
                </div>

                <div class="formfield">
                    <label for="donator">Nom du donateur, testateur ou vendeur</label>
                    <br />
                    <input type="text" id="donator" name="donator" required size="75" maxlength="40" value="<?php echo $item['nom_donateur'];?>">
                </div>

                <div class="formfield">
                    <label for="date_acquisition">Date d'acquisition (AAAA-MM-JJ)</label>
                    <br />
                    <input type="text" id="date_acquisition" name="date_acquisition" required size="75" maxlength="10" value="<?php echo $item['date_acquisition'];?>">
                </div>

                <div class="formfield">
                    <label for="instanc_scientifique">Avis des instances scientifiques</label>
                    <br />
                    <textarea id="instanc_scientifique" name="instanc_scientifique" maxlength="255"><?php echo $item['instanc_scientifique'];?></textarea>
                </div>

                <div class="formfield">
                    <label for="prix_achat_subvention">Prix d'achat - Subvention publique</label>
                    <br />
                    <input type="text" id="prix_achat_subvention" name="prix_achat_subvention" required size="75" maxlength="25" value="<?php echo $item['prix_achat_subvention'];?>">
                </div>

                <div class="formfield">
                    <label for="date_affect">Date d'inscription au registre d'inventaire (AAAA-MM-JJ)</label>
                    <br />
                    <input type="text" id="date_affect" name="date_affect" required size="75" maxlength="10" value="<?php echo $item['date_affec'];?>">
                </div>
            
                <div class="formfield">
                    <label for="designation">Désignation du bien</label>               
                    <br />
                    <input type="text" id="designation" name="designation" required size="75" maxlength="75" value="<?php echo $item['designation'];?>">
                </div>

                <div class="formfield">
                    <label for="marques_inscriptions">Marques et inscriptions</label>
                    <br />
                    <textarea id="marques_inscriptions" name="marques_inscriptions" required maxlength="255"><?php echo $item['inscriptions'];?></textarea>
                </div>

                <div class="formfield">
                    <label for="matiere">Matières ou matériaux</label>               
                    <br />
                    <input type="text" id="matiere" name="matiere" required size="75" maxlength="75" value="<?php echo $item['matiere'];?>">
                </div>

                <div class="formfield">
                    <label for="technique">Techniques de réalisation, préparation, fabrication</label>               
                    <br />
                    <input type="text" id="technique" name="technique" required size="75" maxlength="75" value="<?php echo $item['technique'];?>">
                </div>

                <div class="formfield">
                    <label for="mesure">Mesures</label>
                    <br />
                    <textarea id="mesure" name="mesure" maxlength="255"><?php echo $item['mesures'];?></textarea>
                </div>

                <div class="formfield">
                    <label for="etat">Indications particulières sur l'état du bien au moment de l'acquisition</label>
                    <br />
                    <textarea id="etat" name="etat" col="50" row="5" required maxlength="75"><?php echo $item['etat'];?></textarea>
                </div>

                <div class="formfield">
                    <label for="auteur">Auteur, collecteur, fabricant, commanditaire...</label>               
                    <br />
                    <input type="text" id="auteur" name="auteur" required size="75" maxlength="75" value="<?php echo $item['auteur'];?>">
                </div>

                <div class="formfield">
                    <label for="epoque">Epoque, datation ou date de récolte</label>               
                    <br />
                    <input type="text" id="epoque" name="epoque" required size="75" maxlength="20" value="<?php echo $item['datation'];?>">
                </div>

                <div class="formfield">
                    <label for="fonction_usage">Fonction d'usage</label>               
                    <br />
                    <input type="text" id="fonction_usage" name="fonction_usage" required size="75" maxlength="40" value="<?php echo $item['fonction_usage'];?>">
                </div>

                <div class="formfield">
                    <label for="prov_geo">Provenance Géographique</label>               
                    <br />
                    <input type="text" id="prov_geo" name="prov_geo" required size="75" maxlength="40" value="<?php echo $item['prov_geo'];?>">
                </div>

                <div class="formfield">
                    <label for="domain">Domaine</label>               
                    <br />
                    <select id="domain" name="domain" required>
                        <option value="" selected disabled>Choisir dans la liste</option>
                        <option value="Arts graphiques">Arts graphiques</option>
                        <option value="Dessin">Dessin</option>
                        <option value="Peinture">Peinture</option>
                        <option value="Sculpture">Sculpture</option>
                    </select>
                </div>

                <div class="formfield">
                    <label for="observation">Domaine, Observations</label>
                    <br />
                    <textarea id="observation" name="observation" maxlength="230"><?php echo $item['observations'];?></textarea>
                </div>
                <input type="submit" value="Valider">  
            </form>
            <?php
                }
            ?>
        </div>
    
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