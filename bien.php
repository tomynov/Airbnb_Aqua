<?php include("inc/header.inc.php"); ?>

<body>
    <main>

    <h2 class="title_bien"> Maison en bois sur l'eau</h2>
    <div class="block_img_bien"></div>
    <section class="infos_bien">
        <section class="description_bien">
            <div class="detail_maison">
                <h4 class="descript_bien"> Couchage </h4>
                <p class="texte_bien" id="descript_bien_texte"> 6 voyageurs, 3 chambres, 2 lits double et 2 lits simple </p>
            </div>
            <div class="separ_bien"></div>
            <div class="texte_maison">
                <h4 class="descript_bien"> Description</h4>
                <p class="texte_bien"> Magnifique maison spacieuse sur l'eau. Rénover en 2018, cette maison est parfaite pour vour ressourcez et à 15min en voiture de la ville 
            </div>
            <div class="separ_bien"></div>
            <div class="avis">
                <h4 class="descript_bien"> Avis</h4>
                <p class="texte_bien">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia odit blanditiis, quaerat laborum omnis minus ad exercitationem itaque quam illo? Ut consectetur excepturi dicta architecto asperiores illum nostrum animi tempore.<p>
            </div>
            <div class="separ_bien"></div>
            <div class="equipement_maison">
                <h4 class="descript_bien"> Equipements</h4>
                <section class="sect_equip">
                    <div class="block_equip">
                        <p class="texte_bien">Wi-Fi</p>
                        <p class="texte_bien">Télévision</p>
                        <p class="texte_bien">Chauffage</p>
                        <p class="texte_bien">Lave-vaiselle</p>
                    </div>
                    <div class="block_equip">
                        <p class="texte_bien">Ustensiles de cuisine</p>
                        <p class="texte_bien">Réfrigérateur</p>
                        <p class="texte_bien">Micro-ondes</p>
                        <p class="texte_bien">Draps</p>
                    </div>
                </section>

            </div>
        </section>

        <div class="overlay" id="overlayModal">
        
        </div>

        <!-- Fenêtre Pop-up -->
        <div class="modal_login" id="modalLogin">
            <p>
                Achat effectué
            </p>
            <button id="btn_popUp">Retour</button>
        </div>

        <section class="achat_bien">
            <div id="adresse" class="block_bien_achat">
                <p>15 allé des Moulins</p>
            </div>
            <div id="prix_bien" class="block_bien_achat">
                <p>78 €/Nuits </p>
            </div>
            <div id="Note" class="block_bien_achat">
                <p>4.7/5 </p>
            </div>
            <div class="paye_bien" id="loginBtn">
                <button class="btn_paye">Payer</button>
            </div>
        </section>

    </section>
    <div class="map_bien">
                        <iframe class="block_map_bien" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6237.949634657117!2d2.202881636606942!3d48.9013921951677!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e664617939e9d9%3A0xadb1defcb14c8ad9!2sPARIS%20YNOV%20CAMPUS!5e0!3m2!1sfr!2sfr!4v1583511775431!5m2!1sfr!2sfr" width="500" height="330" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
    </div>

    </main>
</body>

<?php include("inc/footer.inc.php"); ?>
