<?php

$cm = new CartManager();
$cartId = $cm->getCurrentCartId();

if (isset($_POST['delete'])) {
    // rimuovo l'item dal carrello
    $productId = htmlspecialchars($_POST['product_id']);
    $cm->deleteFromCart($productId, $cartId);
    header('Location:'.ROOT_URL."shop?page=cart");
    exit;
}

if (isset($_POST['minus'])) {
  // rimuovo dal carrello
  $productId = htmlspecialchars($_POST['product_id']);
  $cm->removeFromCart($productId, $cartId);
  header('Location:'.ROOT_URL."shop?page=cart");
  exit;
}

if (isset($_POST['plus'])) {
  // aggiungo dal carrello
  $productId = htmlspecialchars($_POST['product_id']);
  $cm->addToCart($productId, $cartId);
  header('Location:'.ROOT_URL."shop?page=cart");
  exit;
}

$cart_total = $cm->getCartTotal($cartId);
$cart_items = $cm->getCartItems($cartId);
?>

<h1 class="title">Carrello</h1>

<aside>
    <h2><?php echo $cart_total['num_products'] ?> elementi nel carrello</h2>
    <h2>Totale €<?php echo $cart_total['total'] ?></h2>
</aside>

<?php if (count($cart_items) > 0) : ?>
<section class="shopping-cart">
    <ul class="products">
        <?php foreach ($cart_items as $item) : ?>
        <li class="item-cart">

            <div class="top">
                <img src="<?php echo IMAGE_URL . $item['image'] . ".png"?>" alt="">
                <div class="description">
                    <h3><?php echo htmlspecialchars($item['name']); ?></h3>
                </div>
            </div>

            <div class="bottom">
                <div>
                    <p>€<?php echo htmlspecialchars($item['total_price']);?></p>
                </div>

                <div>
                    <form method="post">
                        <input type="hidden" name="product_id" value="<?php echo htmlspecialchars($item['id']); ?>">
                        <!--
                            <input type="number" step="1" name="price"><br>
                        -->
                        <input name="minus" type="submit" value="-">
                        <span><?php echo htmlspecialchars($item['quantity']);?></span>
                        <input name="plus" type="submit" value="+">
                    </form>
                </div>

                <div class="buttons">
                    <form method="post">
                        <input type="hidden" name="product_id" value="<?php echo htmlspecialchars($item['id']); ?>">
                        <input name="delete" type="submit" value="delete">
                    </form>
                </div>
            </div>
            
        </li>
        <?php endforeach; ?>
    </ul>

    <?php else: ?>
    <h1>Nesun articolo nel carrello!</h1>
    <?php endif; ?>
</section>