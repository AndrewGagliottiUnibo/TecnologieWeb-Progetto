<?php
require_once ROOT_PATH . "/sito/inc/init.php";

/**
 * Return the state of the upload operation
 */
function uploadNewProductImage($mysqli, $name, $price, $imageName, $description)
{
    $target_dir = ROOT_PATH . "/immagini/";
    $target_file = $target_dir . basename($imageName);
    // Check if image file is a actual image or fake image
    $check = getimagesize($_FILES["image"]["tmp_name"]);
    if ($check === true) {
        return false;
    }
    move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);
    // Insert new image product
    if (!($insert_stmt = $mysqli->prepare("INSERT INTO products (name, price, image, description) VALUES (?, ?, ?, ?)"))) {
        return false; // Connection to db failed
    }
    $insert_stmt->bind_param('ssss', $name, $price, $imageName, $description);
    $insert_stmt->execute();
    return true;
}

/**
 * Check if the product doesn't already exist
 */
function isANewProduct($mysqli, $name)
{
    if (!($stmt = $mysqli->prepare("SELECT name FROM products WHERE name = ? LIMIT 1"))) {
        return false; // Connection to db failed
    }
    $stmt->bind_param("s", $name);
    $stmt->execute();
    $stmt->store_result();
    $stmt->fetch();
    if ($stmt->num_rows != 0) {
        return false; // Existing product
    }
    return true; // Is a new product
}


if (isset($_POST['name'], $_POST['price'],  $_FILES['image'],  $_POST['description'])) {
    $name = $_POST['name'];
    $price = $_POST['price'];
    $description = $_POST['description'];
    $imageName = $_FILES["image"]["name"];
    if (!isANewProduct($mysqli, $name)) {
        return;
    }
    if (!uploadNewProductImage($mysqli, $name, $price, $imageName, $description)) {
        return;
    }
    // New Product
    echo "success";
}
