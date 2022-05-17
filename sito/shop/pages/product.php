<?php
require_once ROOT_PATH . "/sito/script/functions.php";

// Prevent from direct access
if (!defined('ROOT_URL')) {
  die;
}

if (!isset($_GET['id'])) {
  Header('Location ' . ROOT_URL);
  exit;
}

$usrLogged = false;
if (login_check($mysqli) == true) {
  $usrLogged = true;
  $productId = htmlspecialchars($_GET['id']);
  // addToCart Logic
  $cm = new CartManager();
  $cartId = $cm->getCurrentCartId();

  echo $cartId;

  // aggiumngi al carrello "cartId" il prodotto "productId"
  $cm->addToCart($productId, $cartId);
}

$id = htmlspecialchars($_GET['id']);
$productsMgr = new ProductManager();
$product = $productsMgr->get($id);

?>

<section class="single_product">
  <div class="product_info">
    <img class="product_photo" src="<?php echo IMAGE_URL . $product->image ?>" alt="">
    <h3><?php echo $product->name ?></h3>
    <p class="price"><?php echo $product->price ?> €</p>
    <p class="product_description"><?php echo $product->description ?></p>
  </div>

  <?php if ($usrLogged) : ?>
    <input id="btn-add" name="add_to_cart" type="button" value="Aggiungi al carrello">
  <?php else : ?>
    <input id="btn-not-log" name="add_to_cart" type="button" value="Aggiungi al carrello">
  <?php endif; ?>


</section>