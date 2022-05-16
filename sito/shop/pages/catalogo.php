<?php
$productsMgr = new ProductManager();
$products = $productsMgr->getAll();
?>

<section class="catalogo">
    <h3>Catalogo</h3>

    <div class="cards">
        <ul>
            <?php foreach ($products as $product) : ?>

                <li class="card">
                    <div class="img"><img src="<?php echo IMAGE_URL . $product->image ?>" alt=""></div>
                    <div class="text">
                        <h4><a href="<?php echo ROOT_URL . "shop/?page=product&id=" . $product->id ?>"><?php echo $product->name ?></a></h4>
                        <p class="price">&euro;<?php echo $product->price ?></p>
                    </div>
                </li>

            <?php endforeach; ?>
        </ul>
    </div>
</section>