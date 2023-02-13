<?php ob_start(); ?>

<section class="table_page">
            <div class="header">
                <h1>Prescriptions - Alertes & Informations</h1>
            </div>
            
            <div class="scrollable">
                <table class="prescriptions_table">
                    <thead>
                        <tr class="ligne">
                            <th>Alerte</th>
                            <th>id</th>
                            <th>date</th>
                            <th>Medicament</th>
                            <th>Posologie</th>
                            <th>Fréquence</th>
                            <th>Statut</th>
                            <th>IP</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php foreach($prescriptions->prescriptions_data as $prescription):?>
                        <tr class="<?php if($prescription->getStatus()==="Invalide")"cancelled"?>">
                            <?php $alerts = $prescription->getAlert();?>
                            <td class="simple-item"><a href="/prescription/<?=$prescription->getRowId()?>" class="icon <?php if($alerts>0) echo("red"); else echo("green");?> material-symbols-outlined alert"><?php if($alerts>0) echo('error');else echo("priority_high");?></a></td>
                            <td class="id_prescription"><?= $prescription->getRowId()?></td>
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
        </div>
    </section>

<?php $section_content = ob_get_clean(); ?>