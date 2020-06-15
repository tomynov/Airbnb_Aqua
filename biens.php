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
    $_POST["couchage"] = htmlentities($_POST["couchage"], ENT_QUOTES);
    $_POST["equip"] = htmlentities($_POST["equip"], ENT_QUOTES);
    $_POST["equip1"] = htmlentities($_POST["equip1"], ENT_QUOTES);
    $_POST["equip2"] = htmlentities($_POST["equip2"], ENT_QUOTES);
    $_POST["equip3"] = htmlentities($_POST["equip3"], ENT_QUOTES);
    $_POST["equip4"] = htmlentities($_POST["equip4"], ENT_QUOTES);
    $_POST["equip5"] = htmlentities($_POST["equip5"], ENT_QUOTES);
    $_POST["equip6"] = htmlentities($_POST["equip6"], ENT_QUOTES);
    $_POST["equip7"] = htmlentities($_POST["equip7"], ENT_QUOTES);

    $requeteSQL = "INSERT INTO hebergement (id_users, title, desc_hebergement, nbr_place, adresse, prix, couchage, equipement, equipement_1, equipement_2, equipement_3, equipement_4, equipement_5, equipement_6, equipement_7)";
    $requeteSQL .= " VALUE ('$_GET[id]', '$_POST[title]', '$_POST[desc]', '$_POST[nbr]', '$_POST[adresse]', '$_POST[price]', '$_POST[couchage]', '$_POST[equip]', '$_POST[equip1]', '$_POST[equip2]', '$_POST[equip3]', '$_POST[equip4]', '$_POST[equip5]', '$_POST[equip6]', '$_POST[equip7]' )";
    $result = $pdo->exec($requeteSQL);

}

?>

<body>

    <main>
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

                    <div>
                        <label for="couchage"> Couchage </label>
                        <input type="texte" class="input-user-name" id="couchage" name="couchage">
                    </div>

                    <div>
                        <label for="equip"> Equipements (vous n'être pas obligé de tout remplir) </label>
                        <div class="equip-form">
                            <input type="texte" class="input-user-name" id="equip" name="equip">
                            <input type="texte" class="input-user-name" id="equip1" name="equip1">
                            <input type="texte" class="input-user-name" id="equip2" name="equip2">
                            <input type="texte" class="input-user-name" id="equip3" name="equip3">
                        </div>
                        <div class="equip-form">
                            <input type="texte" class="input-user-name" id="equip4" name="equip4">
                            <input type="texte" class="input-user-name" id="equip5" name="equip5">
                            <input type="texte" class="input-user-name" id="equip6" name="equip6">
                            <input type="texte" class="input-user-name" id="equip7" name="equip7">
                        </div>
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
    </main>

</body>