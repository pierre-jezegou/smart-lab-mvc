<?php $title = "Patient | SmartLab"?>
<?php ob_start(); ?>

<section class="page_patient">


    <section class="partient_informations top_bar">
        <a href="/patients" class="left-side">
            <div class="icon material-symbols-outlined"> arrow_back_ios</div>
            <p><?=$patient->getFullName();?></p>
        </a>
        <div class="right-side">
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
                    <?=$patient->getPatientId()?>
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
                    78 <span class="unit">kg</span> / 171 <span class="unit">cm</span>
                </div>
            </div>
            
        </div>

        <div class="patient_data_element">
            <span class="icon material-symbols-outlined">medical_information</span>
            <div class="text">
                <div class="nomenclature">Informations</div>
                <div class="data">
                    Informations
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
                    Créatinine  
                </div>
            </div>
        </div>

        <div class="patient_data_element">
            <span class="icon material-symbols-outlined">monitor_heart</span>
            <div class="text">
                <div class="nomenclature">Signes vitaux</div>
                <div class="data">
                    Signes vitaux  
                </div>
            </div>
        </div>
    </section>

    <section class="prescriptions prescriptions_data">
        <div class="sidebar">
            <div class="title">Données Laboratoire</div>
            <div class="scrollable">
                <div class="labo_data">
                    <div class="texte">
                        <div class="line">
                            <div class="laboratoire">Date : <?php echo("2022-12-04")?></div>
                        </div>
                        <div class="line">
                            <div class="parametre">Data : <?php echo("PA Systolique");?> </div>
                            <div class="valeur"><?php echo("127.00 mmHg")?></div>
                        </div>
                        <div class="line">
                            <div class="reference">Référence : <?php echo("")?></div>
                            <div class="observation"><?php echo('')?></div>
                        </div>
                    </div>
                </div>

                <div class="labo_data">
                    <div class="texte">
                        <div class="line">
                            <div class="laboratoire">Date : <?php echo("2022-12-04")?></div>
                        </div>
                        <div class="line">
                            <div class="parametre">Data : <?php echo("PA Systolique");?> </div>
                            <div class="valeur"><?php echo("127.00 mmHg")?></div>
                        </div>
                        <div class="line">
                            <div class="reference">Référence : <?php echo("")?></div>
                            <div class="observation"><?php echo('')?></div>
                        </div>
                    </div>
                </div>

                <div class="labo_data">
                    <div class="texte">
                        <div class="line">
                            <div class="laboratoire">Date : <?php echo("2022-12-04")?></div>
                        </div>
                        <div class="line">
                            <div class="parametre">Data : <?php echo("PA Systolique");?> </div>
                            <div class="valeur"><?php echo("127.00 mmHg")?></div>
                        </div>
                        <div class="line">
                            <div class="reference">Référence : <?php echo("")?></div>
                            <div class="observation"><?php echo('')?></div>
                        </div>
                    </div>
                </div>

                <div class="labo_data">
                    <div class="texte">
                        <div class="line">
                            <div class="laboratoire">Date : <?php echo("2022-12-04")?></div>
                        </div>
                        <div class="line">
                            <div class="parametre">Data : <?php echo("PA Systolique");?> </div>
                            <div class="valeur"><?php echo("127.00 mmHg")?></div>
                        </div>
                        <div class="line">
                            <div class="reference">Référence : <?php echo("")?></div>
                            <div class="observation"><?php echo('')?></div>
                        </div>
                    </div>
                </div>

                <div class="labo_data">
                    <div class="texte">
                        <div class="line">
                            <div class="laboratoire">Date : <?php echo("2022-12-04")?></div>
                        </div>
                        <div class="line">
                            <div class="parametre">Data : <?php echo("PA Systolique");?> </div>
                            <div class="valeur"><?php echo("127.00 mmHg")?></div>
                        </div>
                        <div class="line">
                            <div class="reference">Référence : <?php echo("")?></div>
                            <div class="observation"><?php echo('')?></div>
                        </div>
                    </div>
                </div>

                <div class="labo_data">
                    <div class="texte">
                        <div class="line">
                            <div class="laboratoire">Date : <?php echo("2022-12-04")?></div>
                        </div>
                        <div class="line">
                            <div class="parametre">Data : <?php echo("PA Systolique");?> </div>
                            <div class="valeur"><?php echo("127.00 mmHg")?></div>
                        </div>
                        <div class="line">
                            <div class="reference">Référence : <?php echo("")?></div>
                            <div class="observation"><?php echo('')?></div>
                        </div>
                    </div>
                </div>

                <div class="labo_data">
                    <div class="texte">
                        <div class="line">
                            <div class="laboratoire">Date : <?php echo("2022-12-04")?></div>
                        </div>
                        <div class="line">
                            <div class="parametre">Data : <?php echo("PA Systolique");?> </div>
                            <div class="valeur"><?php echo("127.00 mmHg")?></div>
                        </div>
                        <div class="line">
                            <div class="reference">Référence : <?php echo("")?></div>
                            <div class="observation"><?php echo('')?></div>
                        </div>
                    </div>
                </div>

                <div class="labo_data">
                    <div class="texte">
                        <div class="line">
                            <div class="laboratoire">Date : <?php echo("2022-12-04")?></div>
                        </div>
                        <div class="line">
                            <div class="parametre">Data : <?php echo("PA Systolique");?> </div>
                            <div class="valeur"><?php echo("127.00 mmHg")?></div>
                        </div>
                        <div class="line">
                            <div class="reference">Référence : <?php echo("")?></div>
                            <div class="observation"><?php echo('')?></div>
                        </div>
                    </div>
                </div>

                <div class="labo_data">
                    <div class="texte">
                        <div class="line">
                            <div class="laboratoire">Date : <?php echo("2022-12-04")?></div>
                        </div>
                        <div class="line">
                            <div class="parametre">Data : <?php echo("PA Systolique");?> </div>
                            <div class="valeur"><?php echo("127.00 mmHg")?></div>
                        </div>
                        <div class="line">
                            <div class="reference">Référence : <?php echo("")?></div>
                            <div class="observation"><?php echo('')?></div>
                        </div>
                    </div>
                </div>

                <div class="labo_data">
                    <div class="texte">
                        <div class="line">
                            <div class="laboratoire">Date : <?php echo("2022-12-04")?></div>
                        </div>
                        <div class="line">
                            <div class="parametre">Data : <?php echo("PA Systolique");?> </div>
                            <div class="valeur"><?php echo("127.00 mmHg")?></div>
                        </div>
                        <div class="line">
                            <div class="reference">Référence : <?php echo("")?></div>
                            <div class="observation"><?php echo('')?></div>
                        </div>
                    </div>
                </div>

                
            </div>
        </div>

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
                            <td class="simple-item"><span class="icon <?php if($alerts>0) echo("red"); else echo("green");?> material-symbols-outlined alert"><?php if($alerts>0) echo('error');else echo("priority_high");?></span></td>
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
</section>


<?php $content = ob_get_clean(); ?>
<?php require('layout.php') ?>