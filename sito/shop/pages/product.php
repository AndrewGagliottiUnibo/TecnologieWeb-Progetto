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
$msg = "";

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
    $msg = "Aggiunto al carrello!";
    echo($_SESSION['user_id']);
  } else {
    $msg = 'Ricorda: attualmente non sei loggato. Accedi per poter aggiungere gli elementi al carrello';
  }
}

$id = htmlspecialchars($_GET['id']);
$productsMgr = new ProductManager();
$product = $productsMgr->get($id);
//Print check
//echo($_SESSION['user_id']);
?>

<div class="alert">
  <h3 class><?php echo $msg;
        $msg = ""; ?></h3>
</div>
<section class="single_product">
  <div>
    <img src="<?php echo IMAGE_URL . $product->image . ".png" ?>" alt="">
    <h3><?php echo $product->name ?></h3>
    <p><?php echo $product->price ?></p>
    <p><?php echo $product->description ?></p>
  </div>
  <form method="post">
    <input name="add_to_cart" type="submit" value="Aggiungi al carrello">
    <input type="button" value="Delete">
  </form>
</section>