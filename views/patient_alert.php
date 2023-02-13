<?php ob_start(); ?>
<section class="table_page prescription_page">
    <div class="header">
        <a href="<?=$_SERVER['HTTP_REFERER'];?>" class="icon_back">
            <div class="material-symbols-outlined icon"> arrow_back_ios</div>
            <p>Retour aux prescriptions</p>
        </a>
        <h1>Formulaire de prescription</h1>
    </div>

    <div class="form-div">
        <form method="get" action="page_d_accueil.html">
		<h1><?=$prescription->getDrug();?></h1>            
            <div class="forme">
                <div class="group">
                    <div class="medicament">Modifier le médicament :</div>
                    <div class="med"><input type="text" name="medicament" value="<?=$prescription->getDrug()?>"></div>
                </div>
                <div class="group">
                <div class="medicament">Modifier la forme :</div>
                    <div class="med"><input type="text" name="form_unit" value="<?=$prescription->getFormUnit()?>"></div>
                </div>
            </div>
            
            <div class="forme">
                <div class="group">
                    <div class="duree">Voie d'administration :</div>
                    <select class="menu_voie" name="voie" id="voie" value="Prout">
                        <option value="PO" <?php if($prescription->getRoute()==="PO") echo "selected"?> >PO</option>
                        <option value="PR">PR</option>
                        <option value="SC">SC</option>
                        <option value="ORAL">ORAL</option>
                        <option value="IV">IV</option>
                        <option value="IH">IH</option>
                        <option value="NU">NU</option>
                        <option value="IV DRIP">IV DRIP</option>
                        <option value="TP">TP</option>
                        <option value="OU">OU</option>
                        <option value="NG">NG</option>
                        <option value="OD">OD</option>
                        <option value="OS">OS</option>
                        <option value="ID">ID</option>
                        <option value="VG">VG</option>
                        <option value="IVPCA">IVPCA</option>
                        <option value="J TUBE">J TUBE</option>
                        <option value="IV BOLUS">IV BOLUS</option>
                        <option value="BOTH EYES">BOTH EYES</option>
                        <option value="RIGHT EYE">RIGHT EYE</option>
                        <option value="SL">SL</option>
                        <option value="TD">TD</option>
                        <option value="PB">PB</option>
                        <option value="NEB">NEB</option>
                    </select>
                </div>

                <div class="group">
                    <div class ="dose">Dose :</div>

                    <div class="forme">
                        <input class="nb" type ="number" name="quantite">
                        <select class="unite" name="unite" selected="mg">
                            <option value="g">g</option>
                            <option value="mg">mg</option>
                            <option value="cl">cl</option>
                            <option value="ml">ml</option>
                            <option value="gelule">gélule(s)</option>
                            <option value="comprimé">comprimé(s)</option>
                            <option value="sachet">sachet(s)</option>
                            <option value="ampoule">ampoule(s)</option>
                        </select>
                    </div>
                    </div>
                </div>
            <div class="forme">
                <div class="group">
                    <div class = "Frequence">Fréquence :</div>
                    <select class="menu" name="frequence" id="frequence">
                        <option value="1">1 fois par jour</option>
                        <option value="2">2 fois par jour</option>
                        <option value="3">3 fois par jour</option>
                        <option value="4">4 fois par jour</option>
                        <option value="h">Toutes les heures</option>
                        <option value="semaine">1 fois par semaine</option>
                        <option value="mois">1 fois par mois</option>
                    </select>
                </div>
                <div class =group1>
                    <div class = "temporalite">Temporalité de prise :</div>
                    <div class="choix">
                        <div class=choice-temp>
                            <input type="checkbox" name="1">
                            <label for="1">Au lever</label>
                        </div>
                        <div class=choice-temp>
                            <input type="checkbox" name="2">
                            <label for="2">Au coucher</label>
                        </div>
                        <div class=choice-temp>
                            <input type="checkbox" name="3">
                            <label for="3">Matin</label>
                        </div>
                        <div class=choice-temp>
                            <input type="checkbox" name="4">
                            <label for="4">Midi</label>
                        </div>
                        <div class=choice-temp>
                            <input type="checkbox" name="5">
                            <label for="5">Soir</label>
                        </div>
                        <div class=choice-temp>
                            <input type="checkbox" name="6">
                            <label for="6">Nuit</label>
                        </div>
                        <div class=choice-temp>
                            <input type="checkbox" name="7">
                            <label for="7">Indifférent</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="forme">
                <div class="group">
                    <div class ="last">Dernière administration :</div>
                    <input type="date" name="date1" value="10/12/2022">
                </div>
                <div class ="group1">
                    <div class ="next">Prochaine administration prévue :</div>
                    <input type="date" name="date2">
                </div>
            </div>
        </form>
        
        <div class = "validation">
            <input class="validate" type="submit" value="Valider la prescription">
            <input class="alert" type="submit" value="Créer une alerte pour cette prescription">
            <input class="refuse" type="submit" value="Refuser la prescription">
        </div>
    </div>
    
</section>

<?php $section_content = ob_get_clean(); ?>
