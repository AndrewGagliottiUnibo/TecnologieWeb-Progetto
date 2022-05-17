<?php
//fetch data from database
$result;

$stmt = $mysqli->prepare("SELECT * FROM members WHERE id = 10");
$stmt->execute(); // esegue la query appena creata.
$result = $stmt->get_result();
?>


<h1>Modifica le tue credenziali</h1>

<form action="?page=process_modify_data" method="post" enctype="multipart/form-data">
    <label for="email_field">E-mail </label>
    <input id="product_name_field" type="text" name="email" required>

    <label for="email_field">E-mail </label>
    <input id="product_name_field" type="text" name="email" required>

    <label for="password_field">Password </label>
    <input id="product_price_field" type="password" name="password" required>

    <label for="confirmation_field">Conferma la password </label>
    <input id="product_price_field" type="password" name="confirm" required>

    <input class="commit_button" type="submit" value="Aggiorna le credenziali">
</form>