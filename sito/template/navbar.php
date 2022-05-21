<nav>
    <div id="top-nav">
        <a class="logo-holder" aria-label="Pagina Principale" href="<?php echo ROOT_URL; ?>public?page=homepage">CacPlus</a>

        <button id="hamburger" class="nav-icon3" aria-label="Menù Navigazione" aria-expanded="false">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
        </button>
    </div>


    <div id="main-nav">
        <ul>
            <li>
                <button class="material-icons" name="all">account_circle</button>
                <a href="<?php echo ROOT_URL; ?>public?page=login">Profilo</a>
            </li>
            <?php if (isAdmin($mysqli)) : ?>
                <li>
                    <button class="material-icons" name="all">manage_accounts</button>
                    <a href="<?php echo ROOT_URL; ?>admin?page=admin_logged">Admin</a>
                </li>
            <?php else : ?>
                <li>
                    <button class="material-icons" name="all">shopping_cart</button>
                    <a href="<?php echo ROOT_URL; ?>shop?page=cart">Carrello</a>
                </li>
            <?php endif; ?>
            <li>
                <button class="material-icons" name="all">shop_2</button>
                <a class="collapsable" href="<?php echo ROOT_URL; ?>shop?page=catalogo">Catalogo</a>
            </li>
            <li>
                <button class="material-icons" name="all">notifications</button>   
                <a class="collapsable" href="<?php echo ROOT_URL; ?>public?page=notification">Notifiche</a>
            </li>
            <li>
                <button class="material-icons" name="all">info</button>
                <a class="collapsable" href="<?php echo ROOT_URL; ?>public?page=info">Info e Contatti</a>
            </li>
            <li>
                <button class="material-icons" name="all">work_outline</button>
                <a class="collapsable" href="<?php echo ROOT_URL; ?>public?page=chi_siamo">Chi Siamo</a>
            </li>
        </ul>
    </div>
</nav>