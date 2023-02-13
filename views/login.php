<?php $title = "Connexion | SmartLab"?>
<?php ob_start(); ?>
<section class="login">
    <div class="container">
        <form class="login_form" action="logincheck" method="POST">
            <h1>SmartLab</h1>
            <div class="username">
                <label>Identifiant</label>
                <input class="champs_saisie" type="text" placeholder="Entrer le nom d'utilisateur" name="username" required>
            </div>
            
            <div class="password">
                <label>Mot de passe</label>
                <input class="champs_saisie" type="password" placeholder="Entrer le mot de passe" name="password" required>
            </div>
            <input type="submit" id='submit' value='Connexion'>
            <a href="/reset_password" class="reset_password">> Mot de passe oublié</a>
        </form>
        <?php if($_SESSION["isLogged"]===false) echo("<div class='erreur_form'> Erreur de connexion </div>");?>
    </div>
</section>

<script>
console.log("<?=$_SESSION["full_name"]?>");
</script>

<?php $content = ob_get_clean(); ?>
<?php require('layout.php') ?>