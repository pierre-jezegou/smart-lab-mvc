<?php $title = "Patients | SmartLab"?>
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
            <table class="patient_table">
                <thead>
                    <tr class="ligne">
                        <th>Check</th>
                        <th>Alerte</th>
                        <th>Attente</th>
                        <th>Prénom</th>
                        <th>Nom</th>
                        <th>ipp / iep</th>
                        <th>Service</th>
                        <th>Age</th>
                        <th>Sexe</th>
                        <th>Suivi</th>
                        <th>Date entrée</th>
                        <th>Date sortie</th>
                    </tr>
                </thead>
                <tbody>
                <?php foreach($patients->patients_data as $patient):?>
                    <tr>
                        <td><a href="patient/<?php echo $patient->getPatientId();?>" class="link_patient"><span class="icon secondary material-symbols-outlined">fact_check</span></a></td>
                        <?php $alerts = rand(0,9); $restantes = rand(0,9);?>
                        <td class="simple-item"><div class="icon <?php if($alerts>0) echo("red");?>"><?php if($alerts>0) echo($alerts);else echo("-");?></div></td>
                        <td class="simple-item"><div class="icon <?php if($restantes>0) echo("green");?>"><?php if($restantes>0) echo($restantes);else echo("-");?></div></td>
                        <td><?php echo $patient->getName();?></td>
                        <td><?php echo $patient->getSurname();?></td>
                        <td class="ipp_iep"><?php $patient->getPatientId();?></td>
                        <td class="icon_text">Service</td>
                        <td><?php $age = 59; echo($age);?></td>
                        <td class="icon_text"><span class="icon material-symbols-outlined blue">male</span>
                        <div>Masculin</div>
                        </td>
                        <td><?php echo $patient->followed();?></td>
                        <td><?php echo "start";?></td>
                        <td><?php echo "end";?></td>
                    </tr>
                <?php endforeach;?>
                </tbody>
            </table>
        </div>
    </section>
</section>


<?php $content = ob_get_clean(); ?>
<?php require('layout.php') ?>