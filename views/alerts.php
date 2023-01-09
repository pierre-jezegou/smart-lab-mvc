<?php $title = "Alertes | SmartLab"?>
<?php ob_start(); ?>

<section class="page_patients table_page">
    <section>
        <div class="header">
            <h1>Liste des alertes</h1>
            <div class="description">
            Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?
            </div>
        </div>
        <div class="scrollable">
        <table class="prescriptions_table">
                    <thead>
                        <tr class="ligne">
                            <th>Alerte</th>
                            <th>id</th>
                            <th>N° Patient</th>
                            <th>Nom & Prénom</th>
                            <th>Date Naissance</th>
                            <th>Sexe</th>
                            <th>Date début de prise</th>
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
                        ?>
                        <tr class="<?php if($prescription->getStatus()==="Invalide")"cancelled"?>">
                            <?php $alerts = $prescription->getAlert();?>
                            <td class="simple-item"><span class="icon <?php if($alerts>0) echo("red"); else echo("green");?> material-symbols-outlined alert"><?php if($alerts>0) echo('error');else echo("priority_high");?></span></td>
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
                    <?php endforeach;?>    
                    </tbody>
                </table>
        </div>
    </section>
</section>


<?php $content = ob_get_clean(); ?>
<?php require('layout.php') ?>