<?php include("inc/header.inc.php"); ?>

<body>

    <main>

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
                <a href="">
                    <button typbe="submit"> <i class="fas fa-search"></i> Rechercher </button>
                </a>
            </div>
        </div>

        <h1 id="title_main"> Voyager Différemment avec AquaBnb </h1> 
        <div class="block_main">
            <div class="separ"></div>
            <h3 class="title_block_main" > Les Destinations préférées de nos Utilisateurs <i class="fas fa-heart"></i> </h3>
            <div class="separ"></div>
        </div>
        <div class="block_main">
            <div class="separ"></div>
            <h3 class="title_block_main" > En manque d'inspiration ? <i class="fas fa-plane-departure"></i> </h3>
            <div class="separ"></div>
        </div>
        <div class="block_main">
            <div class="separ"></div>
            <h3 class="title_block_main" > Contactez_nous <i class="fas fa-heart"></i> </h3>
            <div class="separ"></div>

        </div>
    </main>

</body>