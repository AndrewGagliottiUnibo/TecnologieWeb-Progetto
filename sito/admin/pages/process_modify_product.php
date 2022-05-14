<?php
require_once ROOT_PATH . "/sito/inc/init.php";
if (isset($_POST['name'], $_POST['price'],  $_POST['image'],  $_POST['description'], $_POST['selected_product_name'])) {
    $name = $_POST['name'];
    $price = $_POST['price'];
    $image = $_POST['image'];
    $description = $_POST['description'];
    $selected_product_name = $_POST['selected_product_name'];
    // logica di modifica del prodotto
    // controllo se il prodotto esiste già
    if ($stmt = $mysqli->prepare("UPDATE products SET name = ?, price = ?, image = ?, description = ? WHERE name = ?")) {
        $stmt->bind_param('sssss', $name, $price, $image, $description, $selected_product_name);
        $stmt->execute(); // esegue la query appena creata.
        $stmt->store_result();
        $stmt->fetch();
    }
}
