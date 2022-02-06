<header>
    <?php include "./template/banner.php" ?>
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
                    <h4><a href="#card-link"><?php echo $product->name ?></a></h4>
                    <p><?php echo $product->description ?></p>
                </div>
            </li>

            <?php endforeach; ?>
        </ul>
    </div>
</section>

<section class="vai_catalogo">
    <a href="<?php echo ROOT_URL;?>public?page=catalogo">Vai al catalogo</a>
</section>