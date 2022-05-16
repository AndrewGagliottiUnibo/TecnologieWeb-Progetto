<?php
require_once ROOT_PATH . "/sito/inc/init.php";
require_once ROOT_PATH . "/sito/script/functions.php";

if (isset($_POST['email'], $_POST['password'],  $_POST['confirm'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm =$_POST['confirm'];
    //  Check if product already exist
    if (isANewProduct($mysqli, $email)) {
        echo "E-mail already exist";
        return;
    }
    // Trying to upload image
    if (!uploadNewProductImage($mysqli, $email, $password, $confirm)) {
        echo "Modify product failed";
        return;
    }
    // Modifying current product
    if (!($stmt = $mysqli->prepare("UPDATE products SET email = ?, password = ?, image = ?, description = ? WHERE email = ?"))) {
        return;
    }
    $stmt->bind_param('sssss', $email, $password, $confirm, $description, $selected_product_email);
    $stmt->execute();
    echo "Prodotto modificato con successo";
}
