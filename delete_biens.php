<?php include("inc/header.inc.php"); ?>

<body>

<?php

    $pdo->exec("UPDATE hebergement SET deletion_flag = 1 WHERE id_hebergement = $_GET[id]");

?>

    <div class="supp-form">
        <p>Votre hébergement à bien été supprimé et n'est plus visible par les visiteurs d'aquabnb.</p>
        <a href="biens.php" alt="retour à ses hebergements"><button> Retour à vos biens </button></a>
    </div>

</body>