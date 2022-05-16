<?php
require_once ROOT_PATH . "/sito/inc/init.php";
if (isset($_POST['selected_product_name'])) {
    $selected_product_name = $_POST['selected_product_name'];
    if (!($stmt = $mysqli->prepare("SELECT id FROM products WHERE name = ?"))) {
        return;
    }
    $stmt->bind_param('s', $selected_product_name);
    $stmt->execute();
    $result = $stmt->get_result();
    $product_id = mysqli_fetch_array($result)['id'];

    if (!($stmt = $mysqli->prepare("DELETE FROM cart_item WHERE product_id = ?"))) {
        return;
    }
    $stmt->bind_param('s', $product_id);
    $stmt->execute();

    if (!($stmt = $mysqli->prepare("DELETE FROM products WHERE name = ?"))) {
        return;
    }
    $stmt->bind_param('s', $selected_product_name);
    $stmt->execute();
    echo "Prodotto rimosso con successo";
}
