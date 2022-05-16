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

//Var used for print alert to user
$msg = "btn-add";

if (isset($_POST['add_to_cart'])) {
  if (login_check($mysqli) == true) {
    $productId = htmlspecialchars($_GET['id']);
    // addToCart Logic
    $cm = new CartManager();
    $cartId = $cm->getCurrentCartId();

    echo $cartId;

    // aggiumngi al carrello "cartId" il prodotto "productId"
    $cm->addToCart($productId, $cartId);

    // stampato un messaggio per l'utente
    $msg = "btn-add";
    echo($_SESSION['user_id']);
  } else {
    $msg = 'btn-not-log';
  }
} else {
  $msg = 'btn-not-log';
}

$id = htmlspecialchars($_GET['id']);
$productsMgr = new ProductManager();
$product = $productsMgr->get($id);
//Print check
//echo($_SESSION['user_id']);
?>

<section class="single_product">
  <div>
    <img class="product_photo" src="<?php echo IMAGE_URL . $product->image . ".png" ?>" alt="">
    <h3><?php echo $product->name ?></h3>
    <p><?php echo $product->price ?></p>
    <p><?php echo $product->description ?></p>
  </div>
  <form method="post">
  <?php 
    //Gestione dell'alert via js
    if($msg === "btn-add") {
      echo "
      <input class=\"btn-add\" name=\"add_to_cart\" type=\"submit\" value=\"Aggiungi al carrello\">
      <input class=\"delete\" type=\"button\" value=\"Delete\">
  ";

    } else if($msg === "btn-not-log") {
      echo "
      <input class=\"btn-not-log\" name=\"add_to_cart\" type=\"submit\" value=\"Aggiungi al carrello\">
      <input class=\"btn-not-log\" name=\"remove_from_cart\" type=\"button\" value=\"Delete\">
      ";
      $msg = "btn-add";
    }
  ?>
  </form>
</section>