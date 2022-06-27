<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PiCO - Prêts</title>
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
                <button class="btn btn-dark" onclick="window.location.href='./lend.php';">Retour à la liste des prêts</button>
            </div>
            <div class="mx-4">
                <h3>Création d'un nouveau prêt <i class="bi bi-plus-circle"></i></h3>
            </div>
        </header>
        <div class="formular">
            <h5>Formulaire de création</h5>
            <form action="./newlended.php" method="post">
                <div class="formfield">  
                    <label for="invnumber">Numéro d'inventaire de l'item prêté</label>
                    <br />        
                    <input type="text" id="invnumber" name="invnumber" required size="75" maxlength="15">
                 </div>

                 <div class="formfield">
                    <label for="destination">Musée de destination</label>
                    <br />
                    <input type="text" id="destination" name="destination" required size="75" maxlength="40">
                </div>

                <div class="formfield">
                    <label for="ville">Ville</label>
                    <br />
                    <input type="text" id="ville" name="ville" required size="75" maxlength="40">
                </div>

                <div class="formfield">
                    <label for="date_debut">Date de début (AAAA-MM-JJ)</label>
                    <br />
                    <input type="text" id="date_debut" name="date_debut" required size="75" maxlength="10">
                </div>

                <div class="formfield">
                    <label for="date_retour">Date estimée de retour (AAAA-MM-JJ)</label>
                    <br />
                    <input type="text" id="date_retour" name="date_retour" required size="75" maxlength="10">
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