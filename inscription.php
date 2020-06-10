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

                <label>Date de naissance / Sexe</label>

                <div class="form-date-birth">
                    <div class="birth">
                        <input class="form-birth" type="date" name="date_inscription" id="date_inscription" required>
                    </div>
                    <div class="gender">
                        <input type="radio" id="gender_inscription" name="gender_inscription" value="male_inscription">
                        <label for="male">M</label><br>
                        <input type="radio" id="gender_inscription" name="gender_inscription" value="female_inscription">
                        <label for="female">Mme</label><br>
                        <input type="radio" id="gender_inscription" name="gender_inscription" value="other_inscription">
                        <label for="other">Etudiant</label>
                    </div>
                </div>


                <label>E-mail / Téléphone</label>
                
                <div class="form-mail-phone">
                    <input class="form-mail" type="email" name="mail_inscription" placeholder="Entrez votre e-mail"  id="mail_inscription" required>
                    <input class="form-control" type="tel" name="phone_inscription" placeholder="XX.XX.XX.XX.XX" id="phone_inscription" pattern="[0-9]{10}" required>
                </div>


                <label>Mot de passe</label>
                <div class="form-password">
                    <input class="input-password-user" type="password" placeholder="Entrer le mot de passe" name="password_inscription" id="password_inscription" minlength="6" required>
                    <input class="input-password-user" type="password" placeholder="Confirmer le mot de passe" name="password_inscription_confirm" id="password_inscription_confirm" minlength="6" required>
                </div>

                <div class="pp">
                    <label for="document">Photo de profil</label>
                    <input type="file" name="document" id="document">
                </div>

                <input class="input-submit-user" type="submit" id='submit' value='INSCRIPTION' >

            </form>
                
        </div>
    </section>