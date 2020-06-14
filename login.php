<?php include("inc/header.inc.php"); ?>

<?php if (!empty($_POST)) {


    $_POST["identifiant"] = htmlentities($_POST["identifiant"], ENT_QUOTES);
    $_POST["password_login"] = htmlentities($_POST["password_login"], ENT_QUOTES);

    $nom_util = $_POST["identifiant"];
    $password_util = $_POST["password_login"];

    $requete = $pdo->query("SELECT * FROM users WHERE nom = '$nom_util' and deletion_flag = 0 ");
    $login = $requete->fetch(PDO::FETCH_OBJ);

    if ($login->nom == $_POST["identifiant"] and $login->password_user == $_POST["password_login"]){
        header("location: profil.php?id=$login->id_users");
    }
    else{
        echo "<h3 style = 'color:red'>Les informations entrées sont erronées</h3>";
    }

}

?>


<body class="body-login">
    <section class="sec-login">
        <div class="opacity-container">
        </div>
        <div id="container-login">
            <!-- zone de connexion -->
            <form class="form-login" action="" method="post">
                <h1 class="h1-login">Connexion</h1>
                
                <label><b>Nom</b></label>
                <input class="input-user-name" type="text" placeholder="Entrer votre nom" name="identifiant" id="identifiant" required>

                <label><b>Mot de passe</b></label>
                <input class="input-password-user" type="password" placeholder="Entrer votre mot de passe" name="password_login" id="password_login" required>
                
                <p>Vous n'avez pas encore de compte ? <a href="inscription.php">Cliquez ici</a></p>

                <input class="input-submit-user" type="submit" id='submit' value='LOGIN' >

            </form>
        </div>
    </section>
</body>

