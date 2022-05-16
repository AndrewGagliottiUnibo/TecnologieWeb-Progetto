<form action="?page=process_add_product" method="post" enctype="multipart/form-data">
    Nome: <input type="text" name="name" placeholder="Nome del prodotto"><br>
    Prezzo: <input type="number" min="0" step="0.01" name="price" placeholder="0.00"><br>
    Immagine: <input type="file" accept="image/*" name="image"><br>
    Descrizione: <input type="text" name="description" placeholder="Aggiungi una descrizione"><br>
    <input type="submit">
</form>