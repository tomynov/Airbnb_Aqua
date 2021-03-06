<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Le site Aquabnb est le tout premier site de location dédié à l'immensité de nos océans !">
        <script src="https://kit.fontawesome.com/782e7c6869.js" crossorigin="anonymous"></script>
        <title>Aquabnb</title>
        <link rel="stylesheet" href="css/style.css">
        <script src="js/main.js" async> </script>
    </head>

     <?php
    $pdo = new PDO("mysql:host=localhost;dbname=aquabnb", "root", "", array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
    ?> 

    <header class="head_aqua">
        <section class="sect_head_aqua">

            <div class="top_aqua"> <!-- Haut de page-->
                <h1 id="title_header"> Aquabnb  <i class="fas fa-tint"></i></h1>
                <ul class="menu_head">
                    <li class="lien_head" > <a href="index.php" class="lien"> Accueil </li>
                    <li class="lien_head" > <a href="reser.php" class="lien"> Réservation </li>
                    <!-- <li class="lien_head" > <a href="#block_vide" class="lien"> Contact </li> -->
                    <li class="lien_head" > <a href="login.php" class="lien"> Connexion </a> </li>
                </ul>
            </div>

            

        </section>


    </header>


</html>