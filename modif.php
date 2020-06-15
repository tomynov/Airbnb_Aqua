<?php include("inc/header.inc.php"); ?>

<?php

if (!empty($_POST)) {
    // Insertion dans la table experience des nouvelles informations 

    $_POST["nom"] = htmlentities($_POST["nom"], ENT_QUOTES);
    $_POST["prenom"] = htmlentities($_POST["prenom"], ENT_QUOTES);
    $_POST["mail"] = htmlentities($_POST["mail"], ENT_QUOTES);
    $_POST["mdp"] = htmlentities($_POST["mdp"], ENT_QUOTES);
    $_POST["mdp_confirm"] = htmlentities($_POST["mdp_confirm"], ENT_QUOTES);

    $modif_nom = $_POST["nom"];
    $modif_prenom = $_POST["prenom"];
    $modif_mail = $_POST["mail"];
    $modif_mdp = $_POST["mdp"];
    $modif_mdp_confirm = $_POST["mdp_confirm"];

    if ($modif_mdp == $modif_mdp_confirm){
                //Utilisation de tableau pour contenir les informations et les utilisées dans une boucle
        $P = array('nom', 'prenom', 'adresse_mail', 'password_user', 'confirm_password');
        $L = array($modif_nom, $modif_prenom, $modif_mail, $modif_mdp, $modif_mdp_confirm);

                //Replacement des informations correspondantes
        for ($i = 0; $i < sizeof($L); $i++ ){
            $requete = "UPDATE users SET $P[$i] = '$L[$i]' WHERE id_users = $_GET[id]";
            $result = $pdo->exec($requete);
        }
    }
    else{
        echo "Le mot de passe ne correspond pas à sa confirmation";
    }
}
?>

<?php

if (!empty($_GET)) {

    $result = $pdo->query("SELECT * FROM users WHERE id_users = $_GET[id]");
    $user = $result->fetch(PDO::FETCH_OBJ);
}

?>

<body>

<main>

        <section class="sec-modif">

            <div class="show-modif">

                <div class="recap-profil">
                    <h2> Vos informations </h2>
                    <div class="bloc-info">
                        <div class="img-profil"> 
                            <!--Image-->
                        </div>
                        <div class="informations">
                            <h3 class="h3-user"> <?php echo $user->nom; ?> <?php echo $user->prenom; ?> </h3>
                            <h3 class="h3-user"> <?php echo $user->adresse_mail; ?> </h3>
                        </div>
                    </div>
                    <div class="recap-password">
                        <h3 class="h3-user"> Mot de passe actuel : <?php echo $user->password_user;?></h3>
                    </div>
                    <div class="line-form">
                        <div class="line">
                            <!--Séparation-->
                        </div>
                    </div>
                    <div>
                        <i class="fas fa-exclamation-triangle"><p class="p-avertissement">Cette page vous permet de modifier les informations de votre compte Aquabnb, toutes modifications de nom, adresse mail et image seront visible en public.</p></i>
                    </div>
                </div>

                <div class="new-profil">
                    <form method="POST" action="" enctype='multipart/form-data'>

                        <h2> Modification de vos informations </h2>
                        <div>
                            <label for="nom">Nom</label>
                            <input type="texte" class="input-user-name" id="nom" name="nom" value="<?php echo $user->nom; ?>">
                        </div>

                        <div>
                            <label for="prenom">Prénom</label>
                            <input type="texte" class="input-user-name" id="prenom" name="prenom" value="<?php echo $user->prenom; ?>">
                        </div>

                        <div>
                            <label for="mail">Adresse mail</label>
                            <input type="texte" class="input-user-name" id="mail" name="mail" value="<?php echo $user->adresse_mail; ?>">
                        </div>

                        <div>
                            <label for="mdp">Mot de passe</label>
                            <input type="texte" class="input-user-name" id="mdp" name="mdp" value="<?php echo $user->password_user; ?>">
                        </div>

                        <div>
                            <label for="mdp_confirm">Confirmation de mot de passe</label>
                            <input type="texte" class="input-user-name" id="mdp_confirm" name="mdp_confirm" value="<?php echo $user->confirm_password; ?>">
                        </div>

                        <button type="submit" class="btn btn-primary">Modifier</button>

                    </form>
                </div>
            </div>
            <a href="profil.php?id=<?php echo $user->id_users; ?>" alt="revenir profil aquabnb"><button class="button-annuler"> Annuler </button></a>
        </section>

    </main>

</body>