<header>
    <?php include "./template/banner.php" ?>
</header>

<?php
    $productsMgr = new ProductManager();
    $products = $productsMgr->get_highlighted();
?>

<section class="evidenza">
    <h2>In Evidenza</h2>

    <?php foreach($products as $product) : ?>

        <div class="card">
            <h5 class="product_title"><?php echo $product->name ;?></h5>
            <img src="<?php 
                            $img = "http://localhost/tw/immagini/" . $product->image . ".jpg";
                            echo($img);?>" 
                alt="<?php echo $product->name ;?>" />
            <p class="price"><?php echo $product->price ;?></p>
            <p><?php echo $product->description ;?></p>
        </div>
    <?php endforeach; ?>

</section>

<section>
    <button type="button">Visita il catalogo</button>
</section>