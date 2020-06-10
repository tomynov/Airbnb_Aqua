<?php include("inc/header.inc.php"); ?>

    <section class="sec-login">
        <div class="opacity-container">
        </div>
        <div id="container-login">
            <!-- zone de connexion -->

            <form class="form-login" action="inscription.php" method="POST">

                <h1 id="title_connect">Connexion</h1>
                
                <label>Nom d'utilisateur</label>
                <input class="input-user-name" type="text" placeholder="Entrer le nom d'utilisateur" name="username_inscription" id="username_inscription" required>


                <label>E-mail</label>
                
                <div class="form-mail-phone">
                    <input class="form-mail" type="email" name="mail_inscription" placeholder="Entrez votre e-mail"  id="mail_inscription" required>
                </div>


                <label>Mot de passe</label>
                <div class="form-password">
                    <input class="input-password-user" type="password" placeholder="Entrer le mot de passe" name="password_inscription" id="password_inscription" required>
                    <input class="input-password-user" type="password" placeholder="Confirmer le mot de passe" name="password_inscription_confirm" id="password_inscription_confirm" required>
                </div>

                <div class="pp">
                    <label for="document">Photo de profil</label>
                    <input type="file" name="document" id="document">
                </div>

                <input class="input-submit-user" type="submit" id='submit' value='INSCRIPTION' >

            </form>
                
        </div>
    </section>