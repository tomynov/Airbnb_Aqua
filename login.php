<?php include("inc/header.inc.php"); ?>

<body class="body-login">
    <section class="sec-login">
        <div class="opacity-container">
        </div>
        <div id="container-login">
            <!-- zone de connexion -->
            <form class="form-login" action="login.php" method="post">
                <h1 class="h1-login">Connexion</h1>
                
                <label><b>Nom d'utilisateur</b></label>
                <input class="input-user-name" type="text" placeholder="Entrer le nom d'utilisateur" name="identifiant" id="identifiant" required>

                <label><b>Mot de passe</b></label>
                <input class="input-password-user" type="password" placeholder="Entrer le mot de passe" name="password" id="password" required>
                
                <p>Vous n'avez pas encore de compte ? <a href="inscription.php">Cliquez ici</a></p>

                <input class="input-submit-user" type="submit" id='submit' value='LOGIN' >

            </form>
        </div>
    </section>
</body>

<?php include("inc/footer.inc.php"); ?>

