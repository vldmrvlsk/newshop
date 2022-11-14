<section class="catalog">
    <div class="container">
        <h1 class="catalog-title">Каталог товаров</h1>
        <ul class="products-list">

            <?php while ($item = $result->fetch()) {?>
            <li>
                <a class="products-card" href="product.php?product_id=<?echo $item['id'] ?>">
                    <h3><?= $item['name'] ?></h3>
                    <p><?= $item['description'] ?></p>
                    <span class="price"><del><?= $item['price'] ?></del><?= $item['price'] ?></span>
                    <img src=""<?= $item['image_url'] ?>" widht="156" height="120" alt="<?= $item['name'] ?> ">
                </a>
            </li>
            <?php }; ?>
        </ul>
    </div>
</section>
