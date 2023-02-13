<?php $title = "Alertes | SmartLab"?>
<?php ob_start(); ?>

<section class="page_patients table_page">
    <section>
        <div class="header"> <!-- Code le bandeau supérieur contenant le titre de la page -->
            <h1>Liste des alertes</h1>
            <div class="description">
            Regroupe la liste de toutes les alertes détectées et qui restent à traiter.</div>
        </div>
        <div class="scrollable">
        <table class="prescriptions_table">
                    <thead>
                        <tr class="ligne"> <!-- Code le titre des lignes à affichées -->
                            <th>Alerte</th>
                            <th>id</th>
                            <th>N° Patient</th>
                            <th>Nom & Prénom</th>
                            <th>Date de Naissance</th>
                            <th>Sexe</th>
                            <th>Date de début de prise</th>
                            <th>Medicament</th>
                            <th>Posologie</th>
                            <th>Fréquence</th>
                            <th>Statut</th>
                            <th>IP</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php foreach($prescriptions->prescriptions_data as $line):?> 
                        <?php
                            $prescription = $line[0]; 
                            $patient = $line[1];
                        ?><!-- préparation des données pour leur affichage -->
                        <tr class="<?php if($prescription->getStatus()==="Invalide")"cancelled"?>">
                            <?php $alerts = $prescription->getAlert();?>
                            <td class="simple-item"><a href="/prescription/<?=$prescription->getRowId()?>" class="icon <?php if($alerts>0) echo("red"); else echo("green");?> material-symbols-outlined alert"><?php if($alerts>0) echo('error');else echo("priority_high");?></a></td>
                            <td class="id_prescription"><?= $prescription->getRowId()?></td>
                            <td class="id_prescription"><?= $prescription->getSubject()?></td>
                            <td><?= $patient->getFullName()?></td>
                            <td><?= $patient->getDateOfDeath()?></td>
                            <?php $gender_infos = $patient->getGenderInfos($patient->getGender());?>
                            <td class="icon_text"><span class="icon material-symbols-outlined <?=$gender_infos['color']?>"><?=$gender_infos['icon']?></span>
                                <div><?=$gender_infos['fullletter']?></div>
                            </td>
                            <td><?= $prescription->getStart()?></td>
                            <td><?= $prescription->getDrug()?> <p class="secondary"><?=$prescription->getStrenght()?></p></td>
                            <td><?= $prescription->getCompleteDose()?></td>
                            <td><?php echo("-");?></td>
                            <td><?= $prescription->getStatus()?></td>
                            <td><?= $prescription->getComment()?></td>
                        </tr>
                    <?php endforeach;?><!-- Code permettant de récupérer les données nécessaires au bon affichage de cette page -->
                    </tbody>
                </table>
        </div>
    </section>
</section>


<?php $content = ob_get_clean(); ?>
<?php require('layout.php') ?>
