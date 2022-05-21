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
                <a href="<?php echo ROOT_URL; ?>public?page=login"><button class="material-icons" name="all">account_circle</button> Profilo</a>
            </li>
            <?php if (isAdmin($mysqli)) : ?>
                <li>
                    <a href="<?php echo ROOT_URL; ?>admin?page=admin_logged"><button class="material-icons" name="all">manage_accounts</button> Admin</a>
                </li>
            <?php else : ?>
                <li>
                    <a href="<?php echo ROOT_URL; ?>shop?page=cart"><button class="material-icons" name="all">shopping_cart</button> Carrello</a>
                </li>
            <?php endif; ?>
            <li>
                <a class="collapsable" href="<?php echo ROOT_URL; ?>shop?page=catalogo"><button class="material-icons" name="all">shop_2</button> Catalogo</a>
            </li>
            <li>   
                <a class="collapsable" href="<?php echo ROOT_URL; ?>public?page=notification"><button class="material-icons" name="all">notifications</button> Notifiche</a>
            </li>
            <li>
                <a class="collapsable" href="<?php echo ROOT_URL; ?>public?page=info"><button class="material-icons" name="all">info</button> Info e Contatti</a>
            </li>
            <li>
                <a class="collapsable" href="<?php echo ROOT_URL; ?>public?page=chi_siamo"><button class="material-icons" name="all">work_outline</button> Chi Siamo</a>
            </li>
        </ul>
    </div>
</nav>