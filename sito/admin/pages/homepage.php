<?php
if (isset($_POST['add_new_product'])) {
    header("location:" . ROOT_URL . "admin?page=add_product");
}

if (isset($_POST['modify_product'])) {
    header("location:" . ROOT_URL . "admin?page=modify_product");
}

if (isset($_POST['remove_product'])) {
    header("location:" . ROOT_URL . "admin?page=remove_product");
}
?>

<form method="post">
    <input name="add_new_product" type="submit" value="AGGIUNGI">
    <input name="modify_product" type="submit" value="MODIFICA">
    <input name="remove_product" type="submit" value="RIMUOVI">
</form>