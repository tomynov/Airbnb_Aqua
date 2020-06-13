<?php include("inc/header.inc.php"); ?>

<body>

    <main>

    <form class="" action="reser.php" method="post">
        <div class="recherche_head"> <!-- Barre de Recherche-->
            <div class="block_recherche"> 
                <label> Lieux </label>
                <input type="text" placeholder="Votre destination" required>
            </div>
            <div class="block_recherche"> 
                <label >Arrivée </label>
                <input type="date" placeholder="Date d'arrivé " required>
            </div>
            <div class="block_recherche"> 
                <label >Départ </label>
                <input type="date" placeholder="Date de départ " required>
            </div>
            <div class="block_recherche">
                <label> Voyageurs </label> 
                <input type="number" id="number" min="1" max="99" placeholder="Nombre de voyageurs" required>
            </div>
            <div class="block_recherche">
                <a href="reser.php">
                    <button typbe="submit"> <i class="fas fa-search"></i> Rechercher </button>
                </a>
            </div>
        </div>
    </form>

        <h1 id="title_main"> Voyager Différemment avec AquaBnb </h1> 
        <div class="block_main">    <!-- Premier Block -->

            <section class="sect_block_main">
                <div class="separ"></div>
                <h3 class="title_block_main" > Les Destinations préférées de nos Utilisateurs <i class="fas fa-heart"></i> </h3>
                <div class="separ"></div>
            </section>
            <section class="sect_img_main">
                <a href="reser.php">
                    <div class ="block_img_main" id="image_1" title="Voir la réservation">
                        <!-- <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Repellat recusandae aliquam ab omnis, aspernatur harum labore eligendi excepturi sequi deserunt totam ducimus, deleniti suscipit earum libero, fugit et necessitatibus placeat! -->
                        <!-- <img id="image_1"> -->
                    
                    </div>
                </a>
                <a href="reser.php">
                    <div class ="block_img_main" id="image_2" title="Voir la réservation">
                        <!-- <img id="image_2"> -->
                    </div>
                </a>
                <a href="reser.php">
                    <div class ="block_img_main" id="image_3" title="Voir la réservation">
                        <!-- <img id="image_3"> -->
                    </div>
                </a>
            </section>
        </div>
        
        <div class="block_main">     <!-- Deuxième Block -->
            <section class="sect_block_main">
                <div class="separ"></div>
                <h3 class="title_block_main" > En manque d'inspiration ? <i class="fas fa-plane-departure"></i> </h3>
                <div class="separ"></div>
            </section>
            <section class="sect_img_main">
                <div class ="block_img_main" id="image_4">
                    <!-- <img id="image_4"> -->
                </div>
            </section>
        </div>

        <div id="block_vide"></div> <!-- For Scroll -->

        <div class="block_main">     <!-- Troisième Block -->
            <section class="sect_block_main">
                <div class="separ"></div>
                <h3 class="title_block_main" > Contactez_nous <i class="fas fa-id-badge"></i> </h3>
                <div class="separ"></div>
            </section>
        </div>

    </main>

</body>

<?php include("inc/footer.inc.php"); ?>
