<?php $title = "Page non trouvée | SmartLab"?>
<?php ob_start(); ?> <!--permet de fournir le contenu de la page au layout-->

<div class="error_container"> <!-- on définit ici le conteneur principal, où on trouve tout le texte et le bouton -->
    <h1>Erreur 404</h1>
    <p>Oops... La page que vous recherchez n'existe pas. </p>
    <p>
        Pour retourner à la page précédente, cliquer ici :<br>
        <button onclick="last_page()">Retour</button>
    </p>
</div>

<script> 
    function last_page(){
    window.history.back();
}
</script> <!-- code permettant au bouton Retour de fonctionner, accède à la page précédente -->

<?php $content = ob_get_clean(); ?> <!-- signale la fin du code à fournir -->
<?php require('layout.php') ?>
