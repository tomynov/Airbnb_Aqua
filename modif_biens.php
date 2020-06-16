<?php include("inc/header.inc.php"); ?>

<?php

if (!empty($_GET)) {

    $result = $pdo->query("SELECT * FROM hebergement WHERE id_hebergement = $_GET[id]");
    $hebergement = $result->fetch(PDO::FETCH_OBJ);
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

    $modif_title = $_POST["title"]; $modif_desc = $_POST["desc"]; $modif_nbr = $_POST["nbr"]; 
    $modif_adress = $_POST["adresse"]; $modif_price = $_POST["price"]; $modif_couchage = $_POST["couchage"]; 
    $modif_equip = $_POST["equip"]; $modif_equip1 = $_POST["equip1"]; $modif_equip2 = $_POST["equip2"]; $modif_equip3 = $_POST["equip3"]; $modif_equip4 = $_POST["equip4"]; $modif_equip5 = $_POST["equip5"]; $modif_equip6 = $_POST["equip6"]; $modif_equip7 = $_POST["equip7"];

    $P = array('title', 'desc_hebergement', 'nbr_place', 'adresse', 'prix', 'couchage', 'equipement', 'equipement_1', 'equipement_2', 'equipement_3', 'equipement_4', 'equipement_5', 'equipement_6', 'equipement_7');
    $L = array($modif_title, $modif_desc, $modif_nbr, $modif_adress, $modif_price, $modif_couchage, $modif_equip, $modif_equip1, $modif_equip2, $modif_equip3, $modif_equip4, $modif_equip5, $modif_equip6, $modif_equip7);

            //Replacement des informations correspondantes
    for ($i = 0; $i < sizeof($L); $i++ ){
        $requete = "UPDATE hebergement SET $P[$i] = '$L[$i]' WHERE id_hebergement = $_GET[id]";
        $result = $pdo->exec($requete);
    }

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
                        <input type="texte" class="input-user-name" id="title" name="title" value="<?php echo $hebergement->title;?>">
                    </div>

                    <div>
                        <label for="desc"> Description </label>
                        <textarea rows="10" class="input-user-name" id="desc" name="desc"><?php echo $hebergement->desc_hebergement;?></textarea>
                    </div>

                    <div>
                        <label for="nbr"> Nombres de personnes autorisées </label>
                        <input type="texte" class="input-user-name" id="nbr" name="nbr" value="<?php echo $hebergement->nbr_place;?>">
                    </div>

                    <div>
                        <label for="adresse">Adresse de l'hébergement</label>
                        <input type="texte" class="input-user-name" id="adresse" name="adresse" value="<?php echo $hebergement->adresse;?>">
                    </div>

                    <div>
                        <label for="price"> Prix de l'hébergement </label>
                        <input type="texte" class="input-user-name" id="price" name="price" value="<?php echo $hebergement->prix;?>">
                    </div>

                    <div>
                        <label for="couchage"> Couchage </label>
                        <input type="texte" class="input-user-name" id="couchage" name="couchage" value="<?php echo $hebergement->couchage;?>">
                    </div>

                    <div>
                        <label for="equip"> Equipements (vous n'être pas obligé de tout remplir) </label>
                        <div class="equip-form">
                            <input type="texte" class="input-user-name" id="equip" name="equip" value="<?php echo $hebergement->equipement;?>">
                            <input type="texte" class="input-user-name" id="equip1" name="equip1" value="<?php echo $hebergement->equipement_1;?>">
                            <input type="texte" class="input-user-name" id="equip2" name="equip2" value="<?php echo $hebergement->equipement_2;?>">
                            <input type="texte" class="input-user-name" id="equip3" name="equip3" value="<?php echo $hebergement->equipement_3;?>">
                        </div>
                        <div class="equip-form">
                            <input type="texte" class="input-user-name" id="equip4" name="equip4" value="<?php echo $hebergement->equipement_4;?>">
                            <input type="texte" class="input-user-name" id="equip5" name="equip5" value="<?php echo $hebergement->equipement_5;?>">
                            <input type="texte" class="input-user-name" id="equip6" name="equip6" value="<?php echo $hebergement->equipement_6;?>">
                            <input type="texte" class="input-user-name" id="equip7" name="equip7" value="<?php echo $hebergement->equipement_7;?>">
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary">Envoyer</button>

                </form>
            </div>

        </section>

        <div class="button-back-biens">
            <a href="biens.php?id=<?php echo $hebergement->id_users; ?>" alt="retour aux hébergements utilisateur"><button class="button-back"> Retour à vos biens </button></a>
        </div>
        
    </main>

</body>
