<?php $title = "Page non trouvée | SmartLab"?>
<?php ob_start(); ?>

<div class="error_container">
    <h1>Erreur 404</h1>
    <p>Oops... La page que vous recherchez n'existe pas. </p>
    <p>
        Pour retourner à la page précédente, cliquer ici :<br>
        <button onclick="rtn()">Retour</button>
    </p>
</div>

<script>
    function rtn(){
        window.history.back();
    }
</script>

<?php $content = ob_get_clean(); ?>
<?php require('layout.php') ?>