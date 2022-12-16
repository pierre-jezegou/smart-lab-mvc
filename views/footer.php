<footer>
    <div class="hour">
        <div id="MyClockDisplay" class="clock" onload="showTime()"></div>
        <div>
        Dernière connexion : <?php echo($_SESSION["last_connection"])?>
        </div>
    </div>
    <div class="connexionSillage">
        <div id="pingSillage" class="indicator"></div>
        <div class="indicator_text">
            <div class="text">
                Connexion à Sillage
            </div>
            <div id="NextPing" class="clock" onload="NextTimePing()"></div>
        </div>
        <div class="indicator_link"><a href="monitoring"><span class="material-symbols-outlined">insights</span></a></div>
    </div>
</footer>