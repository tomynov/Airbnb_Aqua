<?php include("inc/header.inc.php"); ?>

<?php

if (!empty($_POST)) {


    $_POST["nom_inscription"] = htmlentities($_POST["nom_inscription"], ENT_QUOTES);
    $_POST["prenom_inscription"] = htmlentities($_POST["prenom_inscription"], ENT_QUOTES);
    $_POST["mail_inscription"] = htmlentities($_POST["mail_inscription"], ENT_QUOTES);
    $_POST["password_inscription"] = htmlentities($_POST["password_inscription"], ENT_QUOTES);
    $_POST["password_inscription_confirm"] = htmlentities($_POST["password_inscription_confirm"], ENT_QUOTES);
    $_POST["image"] = htmlentities($_POST["image"], ENT_QUOTES);

    if ($_POST["password_inscription"] != $_POST["password_inscription_confirm"]) {
        echo "<h3 style = 'color:red'>Le mot de passe est différent que celui confirmé</h3>";
    }
    else {
        $requeteSQL = "INSERT INTO users (nom, prenom, adresse_mail, password_user, confirm_password, img_user)";
        $requeteSQL .= " VALUE ('$_POST[nom_inscription]', '$_POST[prenom_inscription]', '$_POST[mail_inscription]', '$_POST[password_inscription]', '$_POST[password_inscription_confirm]', '$_POST[image]')";
        $result = $pdo->exec($requeteSQL);
        header("location: login.php");
    }
}

?>


<body>
    <main>
    <section class="sec-login">
        <div class="opacity-container">
        </div>
        <div id="container-login">
            <!-- zone de connexion -->

            <form class="form-login" action="" method="POST">

                <h1 id="title_connect">Inscription</h1>
                
                <label>Nom / Prénom</label>
                <div class="form-password">
                    <input class="input-user-name" type="text" placeholder="Entrer votre nom" name="nom_inscription" id="nom_inscription" required>
                    <input class="input-user-name" type="text" placeholder="Entrer votre prénom" name="prenom_inscription" id="prenom_inscription" required>
                </div>


                <label>E-mail</label>
                
                <div class="form-mail-phone">
                    <input class="input-user-name" type="email" name="mail_inscription" placeholder="Entrez votre e-mail"  id="mail_inscription" required>
                </div>


                <label>Mot de passe</label>
                <div class="form-password">
                    <input class="input-password-user" type="password" placeholder="Entrer le mot de passe" name="password_inscription" id="password_inscription" minlength="6" required>
                    <input class="input-password-user" type="password" placeholder="Confirmer le mot de passe" name="password_inscription_confirm" id="password_inscription_confirm" minlength="6" required>
                </div>

                <input class="input-submit-user" type="submit" id='submit' value='INSCRIPTION' >

            </form>
                
        </div>
    </section>
    </main>
</body>
