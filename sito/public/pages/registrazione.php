<?php
require_once ROOT_PATH . "/sito/script/functions.php";
?>
<h1>Registrazione</h1>
<section id="accessPoint">
    <form action="?page=process_registration" method="post" name="registration_form">
        <label for="registration_username">Username
            <input id="registration_username" type="text" name="username" />
        </label><br />
        <label for="registration_email">E-mail
            <input id="registration_email" type="text" name="email" />
        </label><br />
        <label for="registration_password">Password
            <input id="registration_password" type="password" name="p" id="password" />
        </label><br />
        <input type="submit" value="Registrati" onclick="formhash(this.form, this.form.registration_password)" />
    </form>
</section>
<section id="about">
    <article id="trattamento">
        <h2>Sul trattamento dei dati:</h2>
        <p>Questo sito web utilizza cookie di tipo tecnico (per consentire il corretto funzionamento del sito e rendere più rapido e migliore il suo utilizzo). Non usufruiamo di ulteriori strumenti o cookie di diverso tipo da quelli sopracitati, ne ci affidiamo ad aziende di terze parti per la loro gestione o per poter garantire il corretto funzionamento del sito web.</p>
        <p>Per quanto concerne i dettagli sulla privacy e il trattamento dei dati, vi rimandiamo alla sezione <a href="<?php echo ROOT_URL; ?>public?page=info">Info e Contatti</a>.</p>
        <p> <span id="important">Registrandoti a questo sito dichiari di aver accettato la politica sul trattamento dei dati e sull'utilizzo di cookie tecnici per garantire il corretto funzionamento dei nostri servizi</span>.</p>
    </article>
    <aside id="pageFiller"></aside>
</section>