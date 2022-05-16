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

  // stampato un messaggio per l'utente
  echo ($_SESSION['user_id']);
}

$id = htmlspecialchars($_GET['id']);
$productsMgr = new ProductManager();
$product = $productsMgr->get($id);

?>

<section class="single_product">
  <div>
    <img class="product_photo" src="<?php echo IMAGE_URL . $product->image . ".png" ?>" alt="">
    <h3><?php echo $product->name ?></h3>
    <p><?php echo $product->price ?></p>
    <p><?php echo $product->description ?></p>
  </div>

  <?php if ($usrLogged) : ?>
    <input id="btn-add" name="add_to_cart" type="button" value="Aggiungi al carrello">
  <?php else : ?>
    <input id="btn-not-log" name="add_to_cart" type="button" value="Aggiungi al carrello">
  <?php endif; ?>


</section>