<?php include("inc/header.inc.php"); ?>

<body>

<?php

    $pdo->exec("UPDATE hebergement SET deletion_flag = 1 WHERE id_hebergement = $_GET[id]");

?>

    <main>
        <div class="supp-form">
            <p>Votre hébergement à bien été supprimé et n'est plus visible par les visiteurs d'aquabnb.</p>
            <?php
                $result = $pdo->query("SELECT * FROM hebergement WHERE id_hebergement = $_GET[id] ORDER BY id_hebergement DESC");
                $retour = $pdo->exec($result);
            ?>
            <a href="biens.php?id=<?php echo $retour->id_user ?>" alt="retour à ses hebergements"><button> Retour à vos biens </button></a>
        </div>
    </main>

</body>