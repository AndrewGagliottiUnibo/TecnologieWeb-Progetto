<?php

$cm = new CartManager();
$cartId = $cm->getCurrentCartId();
$cart_total = $cm->getCartTotal($cartId);
$cart_items = $cm->getCartItems($cartId);
?>
<h1 class="title">Carrello</h1>


<?php if (count($cart_items) > 0) : ?>
    <aside>
        <h2><?php echo $cart_total['num_products'] ?> elementi nel carrello</h2>
        <h2>Totale €<?php echo $cart_total['total'] ?></h2>
    </aside>
    <section class="shopping-cart">
        <ul class="products">
            <?php foreach ($cart_items as $item) : ?>
                <li class="item-cart">

                    <div class="top">
                        <img src="<?php echo IMAGE_URL . $item['image'] ?>" alt="">
                        <div class="description">
                            <h3 class="product_name"><?php echo htmlspecialchars($item['name']); ?></h3>
                        </div>
                    </div>

                    <div class="bottom">
                        <div>
                            <p class="price">€<?php echo htmlspecialchars($item['total_price']); ?></p>
                        </div>

                        <form class="quantity-modifier">
                            <input class="item-qty" type="hidden" name="<?php echo htmlspecialchars($item['id']); ?>">
                            <label for="cart_button_minus"></label>
                            <input id="cart_button_minus" class="cart-btn cart_button" name="minus" type="button" value="-">
                            <span class="query_qty"><?php echo htmlspecialchars($item['quantity']); ?> </span>
                            <label for="cart_button_plus"></label>
                            <input id="cart_button_plus" class="cart-btn cart_button" name="plus" type="button" value="+">
                        </form>

                        <div class="buttons">
                            <form class="delete-btn">
                                <input class="item-qty" type="hidden" name="<?php echo htmlspecialchars($item['id']); ?>">
                                <label for="cart_button_remove"></label>
                                <input id="cart_button_remove" class="delete_button cart_button" name="delete" type="button" value=" Rimuovi ">
                            </form>
                        </div>
                    </div>

                </li>
            <?php endforeach; ?>
        </ul>

        <section class="purchase_sec">
            <div class="purchase_container">
                <a id="btn-pay" class="commit_button" href="<?php echo ROOT_URL; ?>shop?page=payment">Checkout</a>
            </div>
        </section>

    <?php else : ?>
        <h1>Nessun articolo nel carrello!</h1>
    <?php endif; ?>
    </section>