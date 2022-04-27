<script type="text/javascript" src="../script/sha512.js"></script>
<script type="text/javascript" src="../script/forms.js"></script>
<?php 
require_once ROOT_PATH . "/sito/script/functions.php";
require_once ROOT_PATH . "/sito/public/pages/process_login.php";

if(isset($_GET['error'])) { 
   echo 'Error Logging In!';
}
?>
<?php if(login_check($mysqli) == false) :?>
    <form action="?page=process_login" method="post" name="login_form">
    Email: <input type="text" name="email" /><br />
    Password: <input type="password" name="p" id="password"/><br />
    <input type="button" value="Login" onclick="formhash(this.form, this.form.password);" />
    </form>


<?php else: ?>
<form action="?page=logout" method="post" name="logout_form">
   <input type="submit" value="Logout"/>
</form>

<?php endif; ?>



<h1>Sezione di accesso all'account personale</h1>
    <section id="accessPoint">
        <form method="POST">
            <div id="container">
                <h2>Inserisci qui i tuoi dati personali</h2>
            </div>
            <div id="email">
                <label for="email">Email: <input type="email" name="email"></label>
            </div>
            <div id="input">
                <label for="email">Password: <input type="password" name="email"></label>
            </div>
            <button type="submit" name="login">login</button>
        </form>
    </section>
    <section id="about">
        <article id="registration">
            <h2>Non sei ancora registrato? Registrati ora senza costi aggiuntivi!</h2>
                <a href="<?php echo ROOT_URL;?>public?page=registrazione">Registrazione</a>
        </article>
        <article id="trattamento">
            <h2>Sul trattamento dei dati:</h2>
            <p>Questo sito web utilizza cookie di tipo tecnico (per consentire il corretto funzionamento del sito e rendere più rapido e migliore il suo utilizzo). Non usufruiamo di ulteriori strumenti o cookie di diverso tipo da quelli sopracitati, ne ci affidiamo ad aziende di terze parti per la loro gestione o per poter garantire il corretto funzionamento del sito web.</p>
            <p>Per quanto concerne i dettagli sulla privacy e il trattamento dei dati, vi rimandiamo alla sezione <a href="<?php echo ROOT_URL;?>public?page=info">Info e Contatti</a>.</p>
        </article>
    </section>
    <aside id="pageFiller"></aside>