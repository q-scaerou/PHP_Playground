<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PiCO - Recherche</title>
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
            </div>
            <div class="mx-4">
                <h3>Recherche dans l'inventaire <i class="bi bi-search"></i></h3>
            </div>
        </header>
        <div class="formular">
            <h5>Champs de recherche</h5>
            <form action="./SearchResults.php" method="post">
                <div class="formfield">  
                    <label for="invnumber">Recherche par numéro d'inventaire</label>
                    <br />        
                    <input type="text" id="invnumber" name="invnumber">
                    <input type="submit" value="Rechercher">
                 </div>

                <div class="formfield">
                    <label for="author">Recherche par auteur</label>
                    <br />
                    <input type="text" id="author" name="author">
                    <input type="submit" value="Rechercher">
                </div>
            
                <div class="formfield">
                    <label for="title">Recherche par désignation</label>               
                    <br />
                    <input type="text" id="title" name="title">
                    <input type="submit" value="Rechercher">    
                </div>

                <div class="formfield">
                    <label for="domain">Recherche par domaine</label>               
                    <br />
                    <select id="domain" name="domain">
                        <option value="" selected disabled>Choisir dans la liste</option>
                        <option value="Arts graphiques">Arts graphiques</option>
                        <option value="Dessin">Dessin</option>
                        <option value="Peinture">Peinture</option>
                        <option value="Sculpture">Sculpture</option>
                    </select>
                    <input type="submit" value="Rechercher">    
                </div>
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