<?php
  // Prevent from direct access
  if (! defined('ROOT_URL')) {
    die;
  }

  if (!isset($_GET['id'])) {
    Header('Location '. ROOT_URL);
    exit;
  }

  if (isset($_POST['add_to_cart'])) {

    echo "hi";
    $productId = htmlspecialchars($_GET['id']);
    // addToCart Logic
    $cm = new CartManager();
    $cartId = $cm->getCurrentCartId();

    echo $cartId;
  
    // aggiumngi al carrello "cartId" il prodotto "productId"
    $cm->addToCart($productId, $cartId);
  
    // stampato un messaggio per l'utente
    echo "Aggiunto al carrello!";
  }

  $id = htmlspecialchars($_GET['id']);
  $productsMgr = new ProductManager();
  $product = $productsMgr->get($id);
?>

<section class="single_product">
  <div>
    <img src="<?php echo IMAGE_URL . $product->image . ".png"?>" alt="">
    <h3><?php echo $product->name ?></h3>
    <p><?php echo $product->price ?></p>
    <p><?php echo $product->description ?></p>
  </div>
  <form method="post">
    <input name="add_to_cart" type="submit" value="Aggiungi al carrello">
    <input type="button" value="Delete">
  </form>   
</section>
