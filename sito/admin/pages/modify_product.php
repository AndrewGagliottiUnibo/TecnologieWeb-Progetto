<?php
//fetch data from database
$result;

$stmt = $mysqli->prepare("SELECT * FROM products");
$stmt->execute(); // esegue la query appena creata.
$result = $stmt->get_result();
?>


<h1>Modifica un prodotto</h1>

<form action="?page=process_modify_product" method="post" enctype="multipart/form-data">
    <label for="name_products">Seleziona il prodotto
        <select name="selected_product_name" id="name_products">
            <?php while ($row = mysqli_fetch_array($result)) { ?>
                <option value="<?php echo $row['name']; ?>"><?php echo $row['name']; ?></option>
            <?php } ?>
        </select>
    </label><br>

    <label for="product_name_field">Nome
        <input id="product_name_field" type="text" name="name" required>
    </label><br>

    <label for="product_price_field">Prezzo
        <input id="product_price_field" type="number" min="0" step="0.01" name="price" required>
    </label><br>

    <label for="product_image_field">Immagine
        <input id="product_image_field" type="file" accept="image/*" name="image" required>
    </label><br>

    <label for="product_description_field">Descrizione
        <textarea rows="5" cols="33" id="product_description_field" name="description"></textarea>
    </label><br>

    <input type="submit" value="Aggiungi il prodotto">
</form>