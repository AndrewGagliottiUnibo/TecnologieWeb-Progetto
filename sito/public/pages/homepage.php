<header>
    <?php include ROOT_PATH . "/sito/template/banner.php";?>
</header>

<?php
    $productsMgr = new ProductManager();
    $products = $productsMgr->get_highlighted();
?>

<section class="evidenza">
    <h3>In Evidenza</h3>

    <div class="cards">
        <ul>
            <?php foreach($products as $product) : ?>

            <li class="card">
                <div class="img"><img src="<?php echo IMAGE_URL . $product->image . ".png"?>" alt=""></div>
                <div class="text">
                    <h4><a
                            href="<?php echo ROOT_URL."shop/?page=product&id=".$product->id ?>"><?php echo $product->name ?></a>
                    </h4>
                    <p class="price">&euro;<?php echo $product->price ?></p>
                </div>
            </li>

            <?php endforeach; ?>
        </ul>
    </div>
</section>

<section class="vai_catalogo">
    <a href="<?php echo ROOT_URL;?>shop?page=catalogo">Vai al catalogo</a>
</section>