<?php

$cm = new CartManager();
$cartId = $cm->getCurrentCartId();

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
var_dump($cart_total);
?>

<h1>Carrello</h1>

<aside>
    <h2><?php echo $cart_total['num_products'] ?> elementi nel carrello</h2>
    <h2>Totale €<?php echo $cart_total['total'] ?> </h2>
</aside>

<?php if (count($cart_items) > 0) : ?>
<section class="cart">
    <ul class="products">
        <?php foreach ($cart_items as $item) : ?>
        <li>
            <div>
                <h4><?php echo htmlspecialchars($item['name']); ?></h4>
                <p><?php echo htmlspecialchars($item['description']); ?></p>
                <p>€ <?php echo htmlspecialchars($item['single_price']); ?></p>
                <form method="post">
                    <div>
                        <input name="minus" type="submit" value="-">
                        <input type="hidden" name="product_id"
                            value="<?php echo htmlspecialchars($item['id']); ?>">
                        <span class="text-muted"><?php echo htmlspecialchars($item['quantity']); ?></span>
                        <input name="plus" type="submit" value="+">
                    </div>
                </form>
                <strong class="text-primary">€ <?php echo htmlspecialchars($item['total_price']); ?></strong>
            </div>
        </li>
        <?php endforeach; ?>
    </ul>
</section>
<?php else: ?>
    <section>
        <h1>Nesun articolo nel carrello!</h1>
    </section>
<?php endif; ?>