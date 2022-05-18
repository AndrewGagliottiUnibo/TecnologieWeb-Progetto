<?php
//fetch data from database
$stmt = $mysqli->prepare("SELECT * FROM products");
$stmt->execute(); // esegue la query appena creata.
$result = $stmt->get_result();
?>


<h1>Modifica un prodotto</h1>

<form action="?page=process_modify_product" method="post" enctype="multipart/form-data">
    <label for="name_products">Seleziona il prodotto</label>
    <select name="selected_product_name" id="name_products">
        <?php while ($row = mysqli_fetch_array($result)) { ?>
            <option value="<?php echo $row['name']; ?>"><?php echo $row['name']; ?></option>
        <?php } ?>
    </select>


    <label for="product_name_field">Nome</label><br>
    <input id="product_name_field" type="text" name="name" required>

    <label for="product_price_field">Prezzo</label><br>
    <input id="product_price_field" type="number" min="0" step="0.01" name="price" required>

    <label for="product_image_field">Immagine</label><br>
    <input id="product_image_field" type="file" accept="image/*" name="image" required>

    <label for="product_description_field">Descrizione</label><br>
    <textarea rows="5" cols="33" id="product_description_field" name="description"></textarea>

    <input class="commit_button" type="submit" value="Modifica">
</form>