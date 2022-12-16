<?php $title = "Réinitialisation | SmartLab"?>
<?php ob_start(); ?>
<section class="page_miniform">
    <div class="centering">
        <div class="formulaire">
            <form method="post" action="/reset_password/done">
                <h1>Récupération du mot de passe</h1>
                <p class="description">Saisissez l'adresse mail associée à votre compte, un nouveau mot de passe vous sera envoyé</p>
                <input type="text" placeholder="Entrer l'adresse mail utilisateur" name="email" autofocus required>
                <input class="submit" type="submit" value="Envoyer"> 
                <div class="erreur">Adresse mail invalide</div>
            </form>
        </div>
        
    </div>
</section>

<?php $content = ob_get_clean(); ?>
<?php require('layout.php') ?>