<?php $title = "Nouveau compte | SmartLab"?>
<?php ob_start(); ?>

<section class="page_miniform">
    <div class="centering">
        <div class="formulaire">
            <form method="post" action="/admin/register/new_account">
                <h1>Nouveau compte<br>SmartLab</h1>
                <p>Nom</p>
                <input type="text" name="surname" autofocus required>
                <p>Prénom</p>
                <input type="text" name="name" required>
                <p>Adresse mail</p>
                <input type="text" name="email" required>
                <p>Numéro de téléphone</p>
                <input type="phone" name="phone" required>
                <p>Fonction</p>
                <select class="menu" name="function" id="fonction">
                    <option value="Administrateur">Administrateur</option>
                    <option value="Pharmacien">Pharmacien</option>
                    <option value="Médecin">Médecin</option>
                    <option value="Étudiant">Etudiant</option>
                </select>
                <!-- <div class ="mdp">Mot de passe</div>
                <input type="password" name="mdp"> -->
                <input class="submit" type="submit" value="Créer le compte">
                <div class="erreur">Veuillez vérifier les champs complétés</div>
            </form>
        </div>
    </div>
</section>

<?php $content = ob_get_clean(); ?>
<?php require('layout.php') ?>