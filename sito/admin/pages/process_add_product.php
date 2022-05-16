<?php
require_once ROOT_PATH . "/sito/inc/init.php";
require_once ROOT_PATH . "/sito/script/functions.php";


if (isset($_POST['name'], $_POST['price'],  $_FILES['image'],  $_POST['description'])) {
    $name = $_POST['name'];
    $price = $_POST['price'];
    $description = $_POST['description'];
    $imageName = $_FILES["image"]["name"];
    //  Check if product already exist
    if (!isANewProduct($mysqli, $name)) {
        echo "Product already exist";
        return;
    }
    // Trying to upload image
    if (!uploadNewProductImage($mysqli, $name, $price, $imageName, $description)) {
        echo "Adding new product failed";
        return;
    }
    // Insert new product
    if (!($insert_stmt = $mysqli->prepare("INSERT INTO products (name, price, image, description) VALUES (?, ?, ?, ?)"))) {
        return; // Connection to db failed
    }
    $insert_stmt->bind_param('ssss', $name, $price, $imageName, $description);
    $insert_stmt->execute();
    echo "Prodotto aggiunto con successo";
}
