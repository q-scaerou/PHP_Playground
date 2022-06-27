<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PiCO - Accueil</title>
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
                <h2>Menu Administrateur</h2>
            </div>
        </header>

        <main class="px-5 py-3 mx-5 mb-5">

            <?php 
                try {
                    // On se connecte à MySQL
                    $mysqlClient = new PDO('mysql:host=localhost;dbname=pico;charset=utf8', 'admin_pico', 'pico123');
                }
                catch(Exception $e) {
                // En cas d'erreur, on affiche un message et on arrête tout
                    die('Erreur : '.$e->getMessage());
                }

                $testName = $_POST['admin_name'];
                $testPin = $_POST['admin_pin'];

                $cryptedTestPin = "";

                for ($i = 0; $i < strlen($testPin); $i++) {
                    $pinPart = intval($testPin[$i]);
                    $cryptedTestPin = $cryptedTestPin.strval(
                        ((($pinPart + $i + 1) % 10 + 10) % 10)
                    );
                }

                $admincheck = $mysqlClient->prepare('SELECT * FROM administrateurs WHERE admin_name = ?');
                $admincheck->execute(array($testName));
                $items = $admincheck->fetchAll();

                $validLog = FALSE;

                foreach ($items as $item) {
                    if ($cryptedTestPin == $item['admin_pin']) {
                        $validLog = $validLog + TRUE;
                    } 
                }
                
                if ($validLog) {
                    
                    ?>

            <div class="row my-2 mx-auto text-center d-flex justify-content-around">

                <div class="">
                    <button class="btn btn-dark rdbtn" onclick="window.location.href='./adminbddsave.php';">
                    <i class="bi bi-save"></i></button>
                    <p class="menu">Sauvegarder la base de données</p>
                </div>
                <div class="">
                    <button class="btn btn-dark rdbtn" onclick="window.location.href='./adminbddrestore.php';">
                    <i class="bi bi-arrow-clockwise"></i></button>
                    <p class="menu">Restaurer la base de données</p>
                </div>
                <div class="">
                    <button class="btn btn-dark rdbtn" onclick="window.location.href='./adminadd.php';">
                    <i class="bi bi-person-plus"></i></button>
                    <p class="menu">Ajouter un administrateur</p>
                </div>

            </div>

            <?php
                } else {
                    header('Location: adminlog.php');
                }
            ?>

            

        </main>

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