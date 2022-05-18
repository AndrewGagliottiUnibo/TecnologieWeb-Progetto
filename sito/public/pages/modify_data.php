<h1>Modifica le tue credenziali</h1>

<form action="?page=process_modify_data" method="post">

    <label for="password_old">Vecchia Password </label>
    <input id="password_old" type="password" name="old_password">

    <label for="password_new">Password </label>
    <input id="password_new" type="password" name="new_password" onchange='check();'>

    <label for="password_confirmation">Conferma la password </label>
    <input id="password_confirmation" type="password" name="confirm" onchange='check();'>
    <span id='message'></span>

    <input class="commit_button" type="submit" value="Aggiorna" onclick="formModifyHash(this.form, this.form.password_old, this.form.password_new, this.form.password_confirmation );">
</form>