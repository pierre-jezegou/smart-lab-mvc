<header>
    <div class="interface-alert">Logiciel en cours de développement : les données sont fictives - les résultats ne sont pas utilisables</div>
    <div class="container_topbar">
        <a href="index.php" class="left_topbar">
            <div class="image">
                <img src="images/favicon.ico" alt="logo">
            </div>
            <div class="logo_site">
                <div class="product_name">SmartLab</div>
                <div class="entreprise">Living Lab</div>
            </div>
        </a>
        <div class="right_topbar">
            <a href="index.php" class="to_home"><span class="material-symbols-outlined">home</span></a>
            <a href="index.php" class="pin"><span class="material-symbols-outlined">star</span></a>
            <a class="logout" href="data/logout.php"><span class="material-symbols-outlined">logout</span></a>
            <div class="profile">
                <div class="image">
                    <img src="images/avatar.png" alt="profile_image">
                </div>
                <div class="informations">
                    <div class="name">
                        <?php echo($_SESSION['complete-name']);?>
                    </div>
                    <div class="status">
                        <?php echo($_SESSION['statut']);?>
                    </div>
                </div>
                
            </div>
    <!-- <div class="profile connexion">
        <span class="material-symbols-outlined">login</span>
        <div>Connexion</div> 
    </div> -->
    
</div>
    </div>
</header>