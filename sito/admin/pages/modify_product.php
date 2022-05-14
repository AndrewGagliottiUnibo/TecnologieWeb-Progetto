<?php
//fetch data from database
$result;

$stmt = $mysqli->prepare("SELECT * FROM products");
$stmt->execute(); // esegue la query appena creata.
$result = $stmt->get_result();
?>




<form action="?page=process_modify_product" method="post">
    <label for="name_products">Product Name</label>
    <select name="selected_product_name" id="name_products">
        <?php while ($row = mysqli_fetch_array($result)) { ?>
            <option value="<?php echo $row['name']; ?>"><?php echo $row['name']; ?></option>
        <?php } ?>
    </select>
    Nome: <input type="text" name="name"><br>
    Prezzo: <input type="number" step="0.01" name="price"><br>
    Immagine: <input type="text" name="image"><br>
    Descrizione: <input type="text" name="description"><br>
    <input type="submit">
</form>