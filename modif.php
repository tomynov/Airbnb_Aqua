<?php include("inc/header.inc.php"); ?>

<?php

if (!empty($_GET)) {

    $result = $pdo->query("SELECT * FROM users WHERE id_users = $_GET[id]");
    $user = $result->fetch(PDO::FETCH_OBJ);
}

?>

<body>

    <section class="sec-modif">
        <div>
            <p>Cette page vous permet de modifier les informations de votre compte Aquabnb, toutes modifications de nom, adresse mail et image seront visible en public.</p>
        </div>

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

</body>