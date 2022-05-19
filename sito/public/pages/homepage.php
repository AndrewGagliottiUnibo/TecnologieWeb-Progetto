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
                <div class="img"><img src="<?php echo IMAGE_URL . $product->image?>" alt=""></div>
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

<div class="cookie-container">
      <p class="cookie-declaration">
        Utiliziamo i cookie nel nostro sito per garantire un corretto funzionamento del servizio. Per ulteriori informazioni controlla la nostra
        <a href="<?php echo ROOT_URL; ?>public?page=info">cookie policy.</a>.
      </p>

      <button class="cookie-btn">
        Okay
      </button>
    </div>
