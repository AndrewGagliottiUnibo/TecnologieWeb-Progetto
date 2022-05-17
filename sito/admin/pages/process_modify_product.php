<?php
require_once ROOT_PATH . "/sito/inc/init.php";
require_once ROOT_PATH . "/sito/script/functions.php";

if (isset($_POST['name'], $_POST['price'],  $_FILES['image'],  $_POST['description'], $_POST['selected_product_name'])) {
    $name = $_POST['name'];
    $price = $_POST['price'];
    $imageName = $_FILES["image"]["name"];
    $description = $_POST['description'];
    $selected_product_name = $_POST['selected_product_name'];
    //  Check if product already exist
    if (!isANewProduct($mysqli, $name)) {
        echo "Product already exist";
        return;
    }
    // Trying to upload image
    if (!uploadNewProductImage($mysqli, $name, $price, $imageName, $description)) {
        echo "Modify product failed";
        return;
    }
    // Modifying current product
    if (!($stmt = $mysqli->prepare("UPDATE products SET name = ?, price = ?, image = ?, description = ? WHERE name = ?"))) {
        return;
    }
    $stmt->bind_param('sssss', $name, $price, $imageName, $description, $selected_product_name);
    $stmt->execute();
    echo "Prodotto modificato con successo";
}
