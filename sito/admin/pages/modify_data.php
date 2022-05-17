<?php
//fetch data from database
$result;

$stmt = $mysqli->prepare("SELECT * FROM members WHERE id = 10");
$stmt->execute(); // esegue la query appena creata.
$result = $stmt->get_result();
?>


<h1>Modifica le tue credenziali</h1>

<form action="?page=process_modify_data" method="post" enctype="multipart/form-data">
    <label for="name_mail">Seleziona la mail
        <select name="selected_email" id="name_email">
            <?php while ($row = mysqli_fetch_array($result)) { ?>
                <option value="<?php echo $row['name']; ?>"><?php echo $row['name']; ?></option>
            <?php } ?>
        </select>
    </label><br>

    <label for="email_field">E-mail
        <input id="product_name_field" type="text" name="email" required>
    </label><br>

    <label for="password_field">Password
        <input id="product_price_field" type="password" name="password" required>
    </label><br>

    <label for="confirmation_field">Conferma la password
        <input id="product_price_field" type="password" name="confirm" required>
    </label><br>

    <input class="commit_button" type="submit" value="Aggiorna le credenziali">
</form>