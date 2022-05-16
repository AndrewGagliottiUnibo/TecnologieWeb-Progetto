<h1>Aggiungi un prodotto</h1>

<form action="?page=process_add_product" method="post" enctype="multipart/form-data">
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
        <textarea id="product_description_field" rows="5" cols="33" name="description"></textarea>
    </label><br>

    <input type="submit" value="Aggiungi il prodotto">
</form>