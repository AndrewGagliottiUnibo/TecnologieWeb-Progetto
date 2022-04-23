<nav>
    <div id="top-nav">
        <a class="logo-holder" aria-label="Pagina Principale"
            href="<?php echo ROOT_URL;?>public?page=homepage">CacPlus</a>

        <button id="hamburger" aria-label="Menù Navigazione" aria-expanded="false">
            <div id="nav-icon3">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div>
        </button>
    </div>


    <div id="main-nav">
        <ul>
            <li>
                <a href="<?php echo ROOT_URL;?>public?page=login">Profilo</a>
            </li>
            <li>
                <a href="<?php echo ROOT_URL;?>shop?page=cart">Carrello</a>
            </li>
            <li>
                <a class="collapsable" href="<?php echo ROOT_URL;?>shop?page=catalogo">Catalogo</a>
            </li>
            <li>
                <a class="collapsable" href="#">Notifiche</a>
            </li>
            <li>
                <a class="collapsable" href="<?php echo ROOT_URL;?>public?page=info">Info e Contatti</a>
            </li>
            <li>
                <a class="collapsable" href="<?php echo ROOT_URL;?>public?page=chi_siamo">Chi Siamo</a>
            </li>
        </ul>
    </div>
</nav>