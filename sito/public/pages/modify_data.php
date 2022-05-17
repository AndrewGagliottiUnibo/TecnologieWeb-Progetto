<h1>Modifica le tue credenziali</h1>

<form action="?page=process_modify_data" method="post" enctype="multipart/form-data">

    <label for="password_old">Vecchia Password </label>
    <input id="password_old" type="password" name="oldPassword" required>

    <label for="password_field">Password </label>
    <input id="password_field" type="password" name="password" onchange='check();' required>

    <label for="confirmation_field">Conferma la password </label>
    <input id="confirmation_field" type="password" name="confirm" onchange='check();' required>
    <span id='message'></span>

    <input class="commit_button" type="submit" value="Aggiorna" onclick="formModifyHhash(this.form, this.form.password_old, this.password_field);">
</form>