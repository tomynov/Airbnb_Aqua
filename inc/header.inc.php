<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Le site Aquabnb est le tout premier site de location dédié à l'immensité de nos océans !">
        <script src="https://kit.fontawesome.com/782e7c6869.js" crossorigin="anonymous"></script>
        <title>Aquabnb</title>
        <link rel="stylesheet" href="css/style.css">
        <script src="../js/main.js" async> </script>
    </head>

    <?php
    $pdo = new PDO("mysql:host=localhost;dbname=aquabnb", "root", "", array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
    ?>
    
    <header>
        <section class="head_qua">
            <div class="top_aqua">
                <h1 id="title_header"> Aquabnb </h1>
                <ul class="menu_head">
                    <li> <a href="index.php" class="lien"> Accueil </li>
                    <li> <a href="" class="lien"> Réservation </li>
                    <li> <a href="" class="lien"> Contact </li>
                    <li> <a href="login.php" class="lien"> Connexion </a> </li>
                </ul>
            </div>

            <div class="recherche_head">
                <div class="block_recherche"> 
                    <label> Lieux </label>
                    <input type="text" placeholder="Votre destination" required>
                </div>
                <div class="block_recherche"> 
                    <label >Arrivée </label>
                    <input type="date" placeholder="Date d'arrivé " required>
                </div>
                <div class="block_recherche"> 
                    <label >Départ </label>
                    <input type="date" placeholder="Date de départ " required>
                </div>
                <div class="block_recherche">
                    <label> Voyageurs </label> 
                    <input type="number" min="1" max="99" placeholder="Nombre de voyageurs" required>
                </div>
                <div class="block_recherche">
                    <a href="">
                        <button typbe="submit"> <i class="fas fa-search"></i> Rechercher </button>
                    </a>
                </div>

            </div>
        </section>


    </header>


</html>