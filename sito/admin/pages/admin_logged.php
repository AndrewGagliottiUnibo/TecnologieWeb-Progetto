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

if (isset($_POST['update-data'])) {
    header("location:" . ROOT_URL . "admin?page=modify_data");
}
?>

<h2 class="adminWelcome">Bentornato!</h2>
<div class="dbOperations">
    <h3 class="adminOperation">Aggiungi prodotti</h3>
    <p class="operationDescription">
        Inserimento di prodotti nel catalogo
    </p>
    <a class="gotoSpecific" href="<?php echo ROOT_URL . "admin?page=add_product" ?>">Prosegui</a>

    <h3 class="adminOperation">Modifica prodotti</h3>
    <p class="operationDescription">
        Modifica di nome, prezzo, descrizione di ogni elemento del catalogo
    </p>
    <a class="gotoSpecific" href="<?php echo ROOT_URL . "admin?page=modify_product" ?>">Prosegui</a>

    <h3 class="adminOperation">Rimuovi prodotti</h3>
    <p class="operationDescription">
        Rimozione di un elemento dal catalogo
    </p>
    <a class="gotoSpecific" href="<?php echo ROOT_URL . "admin?page=remove_product" ?>">Prosegui</a>

    <h3 class="adminOperation">Aggiorna le credenziali</h3>
    <p class="operationDescription">
        Aggiorna le tue e-mail e password
    </p>
    <a class="gotoSpecific" href="<?php echo ROOT_URL . "public?page=modify_data" ?>">Prosegui</a>
</div>