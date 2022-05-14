<?php
require_once ROOT_PATH . "/sito/inc/init.php";
if (isset($_POST['name'], $_POST['price'],  $_POST['image'],  $_POST['description'])) {
    $name = $_POST['name'];
    $price = $_POST['price'];
    $image = $_POST['image'];
    $description = $_POST['description'];
    // logica di aggiunta prodotto
    //controllo se il prodotto esiste già
    if ($stmt = $mysqli->prepare("SELECT name FROM products WHERE name = ? LIMIT 1")) {
        $stmt->bind_param("s", $name);
        $stmt->execute(); // esegue la query appena creata.
        $stmt->store_result();
        $stmt->fetch();
        if ($stmt->num_rows == 0) {
            if ($insert_stmt = $mysqli->prepare("INSERT INTO products (name, price, image, description) VALUES (?, ?, ?, ?)")) {
                $insert_stmt->bind_param('ssss', $name, $price, $image, $description);
                // Esegui la query ottenuta.
                $insert_stmt->execute();
                echo "evviva gg";
            }
        } else {
            echo "prodotto già esistente";
        }
    }
}
