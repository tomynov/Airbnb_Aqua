<?php include("inc/header.inc.php"); ?>

<?php

    $result = $pdo->query("SELECT * FROM hebergement WHERE deletion_flag = 0 ORDER BY id_hebergement DESC");
    $resa = 0;
    while ($hebergement = $result->fetch(PDO::FETCH_OBJ) and $resa <5)  { 
    $resa++;

?>

<body>

    <main>

    <section class="sect_reser">
        <div class="map">
                        <iframe class="block_map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6237.949634657117!2d2.202881636606942!3d48.9013921951677!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e664617939e9d9%3A0xadb1defcb14c8ad9!2sPARIS%20YNOV%20CAMPUS!5e0!3m2!1sfr!2sfr!4v1583511775431!5m2!1sfr!2sfr" width="500" height="330" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
        </div>

        <section class="sect_reser_img">
            
            <div class="prez_img">               
                <a href="bien.php"><div class="block_img_reser" id="img_reser_1" title="Voir le bien"></div></a>
                <a href="bien.php"><div class="block_img_reser" id="img_reser_2" title="Voir le bien"></div></a>
            </div>

            <div class="prez_img">               
                <a href="bien.php"><div class="block_img_reser" id="img_reser_3" title="Voir le bien"></div></a>
                <a href="bien.php"><div class="block_img_reser" id="img_reser_4" title="Voir le bien"></div></a>
            </div>

        </section>
        <?php } ?>
    </section>

    </main>

</body>

<?php include("inc/footer.inc.php"); ?>
