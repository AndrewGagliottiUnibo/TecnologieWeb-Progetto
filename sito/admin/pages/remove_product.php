<?php
//fetch data from database
$result;

$stmt = $mysqli->prepare("SELECT * FROM products");
$stmt->execute(); // esegue la query appena creata.
$result = $stmt->get_result();
?>

<h1>Rimuovi Prodotto</h1>


<form action="?page=process_remove_product" method="post">
    <label for="name_products">Seleziona il prodotto
        <select name="selected_product_name" id="name_products">
            <?php while ($row = mysqli_fetch_array($result)) { ?>
                <option value="<?php echo $row['name']; ?>"><?php echo $row['name']; ?></option>
            <?php } ?>
        </select>
    </label><br>
    <input type="submit" value="Rimuovi Prodotto">
</form>