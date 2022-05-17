<h1>Aggiungi un prodotto</h1>

<form action="?page=process_add_product" method="post" enctype="multipart/form-data">
    <label for="product_name_field">Nome</label>
    <input id="product_name_field" type="text" name="name" required>


    <label for="product_price_field">Prezzo</label>
    <input id="product_price_field" type="number" min="0" step="0.01" name="price" required>

    <label for="product_image_field">Immagine</label>
    <input id="product_image_field" type="file" accept="image/*" name="image" required>

    <label for="product_description_field">Descrizione</label>
    <textarea id="product_description_field" rows="5" name="description"></textarea>

    <input class="commit_button" type="submit" value="Aggiungi">
</form>