<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PiCO - Fin de prêt</title>
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
            
            <div class="mx-4">
                <h3 class="text-center">Prêt bien clôturé ! <i class="bi bi-trash"></i></h3>
            </div>
            <div class="row mx-2 text-center d-flex justify-content-around">
                <div class="mt-2 ml-2">
                    <button class="btn btn-dark rdbtn" onclick="window.location.href='./index.php';"><i class="bi bi-house"></i></button>
                    <p class="menu">Retourner à l'accueil ?</p>
                </div>
                <div class="mt-2">
                        <button class="btn btn-dark rdbtn" onclick="window.location.href='./lend.php';"><i class="bi bi-send"></i></button>
                        <p class="menu">Retourner à la gestion des prêts ?</p>
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
            $today = date("Y-m-d");

            $deleteRow=$mysqlClient->prepare('UPDATE prets SET estencours = FALSE, date_retour_estimee = ? WHERE inventory_id = ?');
            $deleteRow->execute(array($today, $_POST['back_id']));

        ?>




    
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
            integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
            crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
            crossorigin="anonymous"></script>
    </body>

</html>