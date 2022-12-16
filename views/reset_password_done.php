<?php $title = "Mail envoyé | SmartLab"?>
<?php ob_start(); ?>

<section  class="information">
    <div class="container">
        <div>
            <h1>Récupération du mot de passe</h1>
            <p class="envoi">Un message contenant votre <strong>nouveau mot de passe</strong> vous a été envoyé à l'adresse mail suivante :</p>
                <p class="mail"><?=$mail?></p>
            <p class="description">Si vous ne recevez aucun message, c'est que l'adresse mail fournie n'est reliée à aucun compte.<br>Pour créer un nouveau compte, contactez votre administrateur système.</p>
        </div>
        
    </div>
</section>
<?php $content = ob_get_clean(); ?>
<?php require('layout.php') ?>