<?php $title = "Monitoring | SmartLab"?>
<?php ob_start(); ?>

<section class="sav_section">
    <div class="left_side">
        <div class="connectivite_Sillage">
            <h1 class="title">
                Connexion à Sillage
            </h1>
            <div class="stats">
                <div class="graphic">
                    <?php for($i=1; $i<=$ping_sillage; $i++) echo("<div class='graphic_item'></div>");
                    for($i = $ping_sillage+1; $i<=10; $i++) echo("<div class='graphic_item gray'></div>")
                    ?>
                </div>
                <div class="pourcentage"><?=$ping_sillage*10?> %</div>
            </div>
            <div class="text">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
            Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
            </div>
        </div>
        

        <div class="contact_SAV">
            <h1 class="contact_SAV">Contacter le SAV</h1>
            <div class="email_phone">
                <div class="texte">Email :</div>
                <a href="mailto:assistance@smartlab.fr" class="coordonnee">assistance@smartlab.fr</a>
            </div>
            <div class="email_phone">
                <div class="texte">Téléphone : </div>
                <div class="coordonnee">+33 (0)x xx xx xx xx</div>
            </div>
        </div>
    </div>
    <!-- <div class="image">
        <img src="images/sav.png" alt="image_SAV">
    </div> -->
</section>

<?php $content = ob_get_clean(); ?>
<?php require('layout.php') ?>