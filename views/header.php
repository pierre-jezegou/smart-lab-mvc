<header>
    <div class="alert-message">Logiciel en cours de développement : les données sont fictives - les résultats ne sont pas utilisables</div>
    <div class="container-topbar">
        <a href="/" class="left-topbar">
            <div class="image">
                <img src="../public/images/favicon.ico" alt="logo">
            </div>
            <div class="logo-site">
                <div class="product-name">SmartLab</div>
                <div class="entreprise">Living Lab</div>
            </div>
        </a>

        <div class="right-topbar">
            <a href="<?=$_SERVER['REQUEST_URI']?>" class="navbar-button"><span class="material-symbols-outlined">sync </span></a>
            <?php if(isset($_SESSION['isLogged']) and $_SESSION['isLogged']===true):?>
            <?php if($_SESSION["function"]==="Administrateur") echo('<a href="/admin" class="navbar-button"><span class="material-symbols-outlined">settings</span></a>')?>
            <a href="/logout" class="navbar-button"><span class="material-symbols-outlined">logout</span></a>
            <a href="/" class="navbar-button"><span class="material-symbols-outlined">home</span></a>
            <a href="/" class="profile">
                <div class="profile-picture">
                    <img src="../public/images/avatar.png" alt="Avatar">
                </div>
                <div class="pharmacist-data">
                    <p class="name"><?php echo $_SESSION["full_name"]?></p>
                    <p class="function"><?php echo $_SESSION["function"]?></p>
                </div>
            </a>
            <?php else:?>
            <a href="/" class="navbar-button"><span class="material-symbols-outlined">help</span></a>
            <?php endif;?>
        </div>
        
    </div>
</header>
