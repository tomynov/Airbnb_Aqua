<?php include("inc/header.inc.php"); ?>

<?php

if (!empty($_GET)){

    $id = $_GET['id'];

}

if (!empty($_POST)) {

    $_POST["title"] = htmlentities($_POST["title"], ENT_QUOTES);
    $_POST["desc"] = htmlentities($_POST["desc"], ENT_QUOTES);
    $_POST["nbr"] = htmlentities($_POST["nbr"], ENT_QUOTES);
    $_POST["adresse"] = htmlentities($_POST["adresse"], ENT_QUOTES);
    $_POST["price"] = htmlentities($_POST["price"], ENT_QUOTES);

    $requeteSQL = "INSERT INTO hebergement (id_users, title, desc_hebergement, nbr_place, adresse, prix)";
    $requeteSQL .= " VALUE ('$_GET[id]', '$_POST[title]', '$_POST[desc]', '$_POST[nbr]', '$_POST[adresse]', '$_POST[price]' )";
    $result = $pdo->exec($requeteSQL);

}

?>

<body>

    <section class="font-biens">
        <div class="ajout-biens">
            <h1 class="h1-biens">Créer vos hébergements ici et commencez votre activité au sein de notre site</h1>
            <form method="POST" action="" enctype='multipart/form-data'>

                <div>
                    <label for="title"> Titre de votre annonce </label>
                    <input type="texte" class="input-user-name" id="title" name="title">
                </div>

                <div>
                    <label for="desc"> Description </label>
                    <textarea rows="10" class="input-user-name" id="desc" name="desc"></textarea>
                </div>

                <div>
                    <label for="nbr"> Nombres de personnes autorisées </label>
                    <input type="texte" class="input-user-name" id="nbr" name="nbr">
                </div>

                <div>
                    <label for="adresse">Adresse de l'hébergement</label>
                    <input type="texte" class="input-user-name" id="adresse" name="adresse">
                </div>

                <div>
                    <label for="price"> Prix de l'hébergement </label>
                    <input type="texte" class="input-user-name" id="price" name="price">
                </div>

                <button type="submit" class="btn btn-primary">Envoyer</button>

            </form>
        </div>
    </section>

    <section class="user-announce">
        <div>
            <h2> Vos annonces d'hébergement </h2>
        </div>
        <div class="list-announce">
        <?php
            $result = $pdo->query("SELECT * FROM hebergement WHERE id_users = $_GET[id] and deletion_flag = 0 ORDER BY id_hebergement DESC");
            while ($hebergement = $result->fetch(PDO::FETCH_OBJ)) { ?>

            <div class="announce-recap">
            
                <div class="one-announce">
                    <div>
                        <h3><?php echo $hebergement->title; ?></h3>
                        <div><?php echo $hebergement->desc_hebergement; ?></div>
                        <div class="text-announce"> <i class="fas fa-map-marker-alt"></i> <?php echo $hebergement->adresse; ?></div>
                        <div class="text-announce"> <i class="fas fa-male"></i> <?php echo $hebergement->nbr_place;?></div>
                        <div class="text-announce"> <i class="fas fa-euro-sign"></i> <?php echo $hebergement->prix; ?> €/nuit</div>
                        <a href="delete_biens.php?id=<?php echo $hebergement->id_hebergement; ?>" alt="modification des informations d'hébergement">Supprimer</a>
                    </div>
                </div>
            </div>


        <?php } ?>
        </div>
    </section>

</body>
