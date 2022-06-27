<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PiCO - Ajouter</title>
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
                <button class="btn btn-dark" onclick="window.location.href='./index.php';">Retour à l'accueil</button>
                <button class="btn btn-dark" onclick="window.location.href='./Inventory.php';">Retour à l'inventaire</button>
            </div>
            <div class="mx-4">
                <h3>Ajouter un nouvel item <i class="bi bi-plus-circle"></i></h3>
            </div>
        </header>
        <div class="formular">
            <h5>Formulaire d'ajout</h5>
            <form action="./added.php" method="post">
                <div class="formfield">  
                    <label for="invnumber">Numéro d'inventaire</label>
                    <br />        
                    <input type="text" id="invnumber" name="invnumber" required size="75" maxlength="15">
                 </div>

                 <div class="formfield">
                    <label for="mod_acquisition">Mode d'acquisition</label>
                    <br />
                    <input type="text" id="mod_acquisition" name="mod_acquisition" required size="75" maxlength="40">
                </div>

                <div class="formfield">
                    <label for="donator">Nom du donateur, testateur ou vendeur</label>
                    <br />
                    <input type="text" id="donator" name="donator" required size="75" maxlength="40">
                </div>

                <div class="formfield">
                    <label for="date_acquisition">Date d'acquisition (AAAA-MM-JJ)</label>
                    <br />
                    <input type="text" id="date_acquisition" name="date_acquisition" required size="75" maxlength="10">
                </div>

                <div class="formfield">
                    <label for="instanc_scientifique">Avis des instances scientifiques</label>
                    <br />
                    <textarea id="instanc_scientifique" name="instanc_scientifique" maxlength="255"></textarea>
                </div>

                <div class="formfield">
                    <label for="prix_achat_subvention">Prix d'achat - Subvention publique</label>
                    <br />
                    <input type="text" id="prix_achat_subvention" name="prix_achat_subvention" required size="75" maxlength="25">
                </div>

                <div class="formfield">
                    <label for="date_affect">Date d'inscription au registre d'inventaire (AAAA-MM-JJ)</label>
                    <br />
                    <input type="text" id="date_affect" name="date_affect" required size="75" maxlength="10">
                </div>
            
                <div class="formfield">
                    <label for="designation">Désignation du bien</label>               
                    <br />
                    <input type="text" id="designation" name="designation" required size="75" maxlength="75">
                </div>

                <div class="formfield">
                    <label for="marques_inscriptions">Marques et inscriptions</label>
                    <br />
                    <textarea id="marques_inscriptions" name="marques_inscriptions" required maxlength="255"></textarea>
                </div>

                <div class="formfield">
                    <label for="matiere">Matières ou matériaux</label>               
                    <br />
                    <input type="text" id="matiere" name="matiere" required size="75" maxlength="75">
                </div>

                <div class="formfield">
                    <label for="technique">Techniques de réalisation, préparation, fabrication</label>               
                    <br />
                    <input type="text" id="technique" name="technique" required size="75" maxlength="75">
                </div>

                <div class="formfield">
                    <label for="mesure">Mesures</label>
                    <br />
                    <textarea id="mesure" name="mesure" maxlength="255"></textarea>
                </div>

                <div class="formfield">
                    <label for="etat">Indications particulières sur l'état du bien au moment de l'acquisition</label>
                    <br />
                    <textarea id="etat" name="etat" col="50" row="5" required maxlength="75"></textarea>
                </div>

                <div class="formfield">
                    <label for="auteur">Auteur, collecteur, fabricant, commanditaire...</label>               
                    <br />
                    <input type="text" id="auteur" name="auteur" required size="75" maxlength="75">
                </div>

                <div class="formfield">
                    <label for="epoque">Epoque, datation ou date de récolte</label>               
                    <br />
                    <input type="text" id="epoque" name="epoque" required size="75" maxlength="20">
                </div>

                <div class="formfield">
                    <label for="fonction_usage">Fonction d'usage</label>               
                    <br />
                    <input type="text" id="fonction_usage" name="fonction_usage" required size="75" maxlength="40">
                </div>

                <div class="formfield">
                    <label for="prov_geo">Provenance Géographique</label>               
                    <br />
                    <input type="text" id="prov_geo" name="prov_geo" required size="75" maxlength="40">
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
                    <label for="observation">Observations</label>
                    <br />
                    <textarea id="observation" name="observation" maxlength="230"></textarea>
                </div>
                <input type="submit" value="Valider" class="btn btn-dark">    
            </form>
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