<?php include("inc/header.inc.php"); ?>

<?php 

if (!empty($_GET)) {

    $result = $pdo->query("SELECT * FROM users WHERE id_users = $_GET[id]");
    $user = $result->fetch(PDO::FETCH_OBJ);
}

?>

<body>

    <div class="h1-form-user">
        <h1>Bienvenue sur votre page de profil <?php echo $user->nom; echo " "; echo $user->prenom;?></h1>
    </div>

    <section class="info-user"> <!--bordure-->
        <div class="bloc-profil">
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
            <div class="modif">
                <a href="modif.php?id=<?php echo $user->id_users;?>" alt="modif profile"><button class="button-modif"> Modifier </button></a>
                <a href="index.php" alt="retour à l'accueil"><button class="button-deco"> Déconnexion </button></a>
            </div>
        </div>
    </section>
     
    <div class="center-line">
        <div class="line">
            <!--trait de séparation-->
        </div>
    </div>

    <section class="user-location">
        <h2> Mes hébergements </h2>
        <a href="biens.php?id=<?php echo $user->id_users; ?>" alt="Gestion des herbergements"><button class="bouton-biens"> Gérer mes <br> hébergements </button></a>
        <div class="info-bloc1">

        </div>
    </section>

</body>

<?php include("inc/footer.inc.php"); ?>
