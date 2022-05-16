<?php
require_once ROOT_PATH . "/sito/inc/init.php";
if (isset($_POST['name'], $_POST['price'],  $_FILES['image'],  $_POST['description'])) {
    $name = $_POST['name'];
    $price = $_POST['price'];
    $description = $_POST['description'];
    $imageName = $_FILES["image"]["name"];
    // logica di aggiunta prodotto
    //controllo se il prodotto esiste già
    if ($stmt = $mysqli->prepare("SELECT name FROM products WHERE name = ? LIMIT 1")) {
        $stmt->bind_param("s", $name);
        $stmt->execute();
        $stmt->store_result();
        $stmt->fetch();
        if ($stmt->num_rows == 0) {
            // Gestisco l'immagine e carico il nuovo prodotto al db
            $target_dir = ROOT_PATH . "/immagini/";
            $target_file = $target_dir . basename($imageName);
            $uploadOk = 1;
            $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
            // Check if image file is a actual image or fake image
            $check = getimagesize($_FILES["image"]["tmp_name"]);
            if ($check !== false) {
                move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);
                if ($insert_stmt = $mysqli->prepare("INSERT INTO products (name, price, image, description) VALUES (?, ?, ?, ?)")) {
                    $insert_stmt->bind_param('ssss', $name, $price, $imageName, $description);
                    // Esegui la query ottenuta.
                    $insert_stmt->execute();
                    echo "Aggiunta del prodotto eseguita con successo!";
                }
                $uploadOk = 1;
            } else {
                echo "Il file non è un immagine";
                $uploadOk = 0;
            }
        } else {
            echo "prodotto già esistente";
        }
    }
}
