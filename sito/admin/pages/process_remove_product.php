<?php
require_once ROOT_PATH . "/sito/inc/init.php";
if (isset($_POST['selected_product_name'])) {
    $selected_product_name = $_POST['selected_product_name'];
    // logica di rimozione del prodotto

    // delete from carts
    if ($stmt = $mysqli->prepare("SELECT id FROM products WHERE name = ?")) {
        $stmt->bind_param('s', $selected_product_name);
        $stmt->execute(); // esegue la query appena creata.
        $result = $stmt->get_result();
        $product_id = mysqli_fetch_array($result)['id'];

        if ($stmt = $mysqli->prepare("DELETE FROM cart_item WHERE product_id = ?")) {
            $stmt->bind_param('s', $product_id);
            $stmt->execute(); // esegue la query appena creata.
            $stmt->store_result();
            $stmt->fetch();
            echo "product removed";
        }
    }

    // delete from products list
    if ($stmt = $mysqli->prepare("DELETE FROM products WHERE name = ?")) {
        $stmt->bind_param('s', $selected_product_name);
        $stmt->execute(); // esegue la query appena creata.
        $stmt->store_result();
        $stmt->fetch();
        echo "product removed";
    }
}
