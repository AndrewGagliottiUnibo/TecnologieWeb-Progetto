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
                <a href="<?php echo ROOT_URL; ?>public?page=login"><span class="material-icons">account_circle</span> Profilo</a>
            </li>
            <?php if (isAdmin($mysqli)) : ?>
                <li>
                    <a href="<?php echo ROOT_URL; ?>admin?page=admin_logged"><span class="material-icons">manage_accounts</span> Admin</a>
                </li>
            <?php else : ?>
                <li>
                    <a href="<?php echo ROOT_URL; ?>shop?page=cart"><span class="material-icons">shopping_cart</span> Carrello</a>
                </li>
            <?php endif; ?>
            <li>
                <a class="collapsable" href="<?php echo ROOT_URL; ?>shop?page=catalogo"><span class="material-icons">shop_2</span> Catalogo</a>
            </li>
            <li>   
                <a class="collapsable" href="<?php echo ROOT_URL; ?>public?page=notification"><span class="material-icons">notifications</span> Notifiche</a>
            </li>
            <li>
                <a class="collapsable" href="<?php echo ROOT_URL; ?>public?page=info"><span class="material-icons">info</span> Info e Contatti</a>
            </li>
            <li>
                <a class="collapsable" href="<?php echo ROOT_URL; ?>public?page=chi_siamo"><span class="material-icons">work_outline</span> Chi Siamo</a>
            </li>
        </ul>
    </div>
</nav>