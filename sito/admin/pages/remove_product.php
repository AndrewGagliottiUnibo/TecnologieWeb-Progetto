<?php
//fetch data from database
$result;

$stmt = $mysqli->prepare("SELECT * FROM products");
$stmt->execute(); // esegue la query appena creata.
$result = $stmt->get_result();
?>

<h1>Rimuovi Prodotto</h1>


<form action="?page=process_remove_product" method="post">
    <label for="name_products">Seleziona il prodotto</label>
    <select name="selected_product_name" id="name_products">
        <?php while ($row = mysqli_fetch_array($result)) { ?>
            <option value="<?php echo $row['name']; ?>"><?php echo $row['name']; ?></option>
        <?php } ?>
    </select>
    <input class="commit_button" type="submit" value="Rimuovi">
</form>