<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PiCO - Administration</title>
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
                <button class="btn btn-dark" onclick="window.location.href='./admin.php';">Retour à la page d'administration</button>
            </div>
            <div class="mx-4">
                <h3>Création d'un nouveau compte administateur <i class="bi bi-person-plus"></i></h3>
            </div>
        </header>
        <div class="formular">
            <h5>Formulaire de création</h5>
            <form action="adminadded.php" method="post">
                <div class="formfield">  
                    <label for="admin_name">Nom d'utilisateur</label>
                    <br />        
                    <input type="text" id="admin_name" name="admin_name" required size="75" maxlength="15">
                 </div>

                 <div class="formfield">
                    <label for="admin_pin">Pin administrateur (4 chiffres)</label>
                    <br />
                    <input type="text" id="admin_pin" name="admin_pin" required size="75" minlength="4" maxlength="4" max="9999" min="0000" pattern="\d{4}">
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