<?php $title = "Accueil | SmartLab"?>
<?php ob_start(); ?>
<section class="accueil content">
    <h1>
        Bienvenue <?=$_SESSION["full_name"];?>
    </h1>

    <div class="links">
        <a class="alerts" href="alerts">
            <span class="material-symbols-outlined">warning</span>
            <div class="link-title">Alertes</div>
            <div class="description">Texte de description de l'unité de direction (description des alertes et autres informations nécessaires à la compréhension du logiciel</div>
        </a>
        <a class="actions" href="patients">
            <span class="material-symbols-outlined">person</span>
            <div class="link-title">Patients</div>
            <div class="description">Texte de description de l'unité de direction (description des alertes et autres informations nécessaires à la compréhension du logiciel</div>
        </a>
        <a class="files" href="actions">
            <span class="material-symbols-outlined">list_alt</span>
            <div class="link-title">Suivi des actions</div>
            <div class="description">Texte de description de l'unité de direction (description des alertes et autres informations nécessaires à la compréhension du logiciel</div>
        </a>
        <a class="monitoring" href="monitoring">
            <span class="material-symbols-outlined">monitoring</span>
            <div class="link-title">Monitoring</div>
            <div class="description">Texte de description de l'unité de direction (description des alertes et autres informations nécessaires à la compréhension du logiciel</div>
        </a>
    </div>
</section>

<?php $content = ob_get_clean(); ?>
<?php require('layout.php') ?>