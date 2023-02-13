<footer> <!-- page codant l'affichage du pied de page -->
    <div class="hour"> <!-- Affiche l'heure et l'heure de dernière connexion à SmartLab -->
        <div id="MyClockDisplay" class="clock" onload="showTime()"></div>
        <div>
        Dernière connexion : <?php echo($_SESSION["last_connection"])?>
        </div>
    </div>
    <div class="connexionSillage"> <!-- Indique l'état de connexion de Sillage -->
        <div id="pingSillage" class="indicator"></div> <!-- Permet d'afficher le rond de couleur associé à l'état de connexion -->
        <div class="indicator_text">
            <div class="text">
                Connexion à Sillage
            </div>
            <div id="NextPing" class="clock" onload="NextTimePing()"></div>
        </div>
        <div class="indicator_link"><a href="monitoring"><span class="material-symbols-outlined">insights</span></a></div> <!-- Icône -->
    </div>
</footer>
