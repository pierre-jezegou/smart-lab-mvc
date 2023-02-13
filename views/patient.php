<?php $title = "Patient | SmartLab"?>
<?php ob_start();?>

<section class="page_patient">


    <section class="partient_informations top_bar">
        <a href="/patients" class="left-side">
            <div class="icon material-symbols-outlined"> arrow_back_ios</div>
            <p><?=$patient->getFullName();?></p>
        </a>
        <div class="right-side">
            <?php if(!($lastAdmission->getDeathTime()==null)):?>
            <a class="red">
                <span class="icon material-symbols-outlined">problem</span>
                <div class="text">Mort le : <?= $lastAdmission->getDeathTime()?></div>
            </a>
            <?php endif;?>
            <a>
                <span class="icon material-symbols-outlined">person</span>
                <div class="text">Données patient</div>
            </a>
            <a>
                <span class="icon material-symbols-outlined">phone</span>
                <div class="text">Coordonnées</div>
            </a>
            <a>
                <span class="icon material-symbols-outlined">local_hospital</span>
                <div class="text">Localisation</div>
            </a>
            <a>
                <span class="icon material-symbols-outlined">person_search</span>
                <div class="text">Observations</div>
            </a>
            <a>
                <span class="icon material-symbols-outlined">emergency_recording</span>
                <div class="text">Suivi</div>
            </a>
        </div>
    </section>



    <section class="patient_data">
        <div class="patient_data_element">
            <span class="icon material-symbols-outlined">fingerprint</span>
            <div class="text">
                <div class="nomenclature">ipp/iep</div>
                <div class="data ipp_iep">
                    <?=$patient->getPatientId() ."/". $lastAdmission->getAdmissionId()?>
                </div>
            </div>
        </div>

        <div class="patient_data_element">
            <span class="icon material-symbols-outlined">wc</span>
            <div class="text">
                <div class="nomenclature">Sexe & Age</div>
                <div class="data">
                    <?=$patient->getGender()?> / 59 <span class="unit">ans</span>
                </div>
            </div>
        </div>

        <div class="patient_data_element">
            <span class="icon material-symbols-outlined">straighten</span>
            <div class="text">
                <div class="nomenclature">Poids/Taille</div>
                <div class="data">
                    <?=$patient->getWeight()?> <span class="unit">kg</span> / 171 <span class="unit">cm</span>
                </div>
            </div>
            
        </div>

        <div class="patient_data_element">
            <span class="icon material-symbols-outlined">medical_information</span>
            <div class="text">
                <div class="nomenclature">Admission</div>
                <div class="data">
                    <?= ucfirst(strtolower($lastAdmission->getAdmissionType()))?>
                </div>
            </div>
        </div>

        <div class="patient_data_element">
            <span class="icon material-symbols-outlined">allergies</span>
            <div class="text">
                <div class="nomenclature">Allergies</div>
                <div class="data">
                    Allergies  
                </div>
            </div>
        </div>

        <div class="patient_data_element">
            <span class="icon material-symbols-outlined">labs</span>
            <div class="text">
                <div class="nomenclature">Créatinine</div>
                <div class="data">
                    <?= $patient->getLastCreatinine()?>  
                </div>
            </div>
        </div>

        <div class="patient_data_element">
            <span class="icon material-symbols-outlined">monitor_heart</span>
            <div class="text">
                <div class="nomenclature">Signes vitaux</div>
                <div class="data">
                    <?= $patient->getLastHeartRate() . " / " . $patient->getLastPressure()?> 
                </div>
            </div>
        </div>
    </section>

    <section class="prescriptions prescriptions_data">
        <div class="sidebar">
            <div class="title">Données Laboratoire</div>
            <div class="scrollable">
            <?php foreach($events->events_data as $event):?>
                <div class="labo_data">
                    <div class="texte">
                        <div class="line">
                            <div class="laboratoire">Date : <?= $event->getCharttime()?></div>
                            <div class="secondary admission_id">Admission : <?=$event->getHadmId()?></div>
                        </div>
                        <div class="line">
                            <div class="parametre">Data : <?= $event->getLabel()?></div>
                            <div class="valeur"><?= $event->getCompleteDrug()?></div>
                        </div>
                        <div class="line observations">
                            <div class="secondary reference">Référence : <?= "référence"?></div>
                            <div class="secondary observation"><?= "pas d'observation"?></div>
                        </div>
                    </div>
                </div>
            <?php endforeach;?>
                
            </div>
        </div>

        <?=$section_content?>
</section>


<?php $content = ob_get_clean(); ?>
<?php require('layout.php') ?>