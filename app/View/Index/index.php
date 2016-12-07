<div class="orbit" role="region" aria-label="Favorite Space Pictures" data-orbit>
    <ul class="orbit-container">
        <button class="orbit-previous" aria-label="previous"><span class="show-for-sr">Slide Anterior</span>&#9664;</button>
        <button class="orbit-next" aria-label="next"><span class="show-for-sr">Próximo Slide</span>&#9654;</button>
        <li class="orbit-slide is-active">
            <img src="<?php echo WEB_ROOT ?>/assets/img/carroussel_1.jpg">
        </li>
        <li class="orbit-slide">
            <img src="<?php echo WEB_ROOT ?>/assets/img/carroussel_2.jpg">
        </li>
        <li class="orbit-slide">
            <img src="<?php echo WEB_ROOT ?>/assets/img/carroussel_5.jpg">
        </li>
        <li class="orbit-slide">
            <img src="<?php echo WEB_ROOT ?>/assets/img/carroussel_4.jpg">
        </li>
    </ul>
</div>

<div class="row column text-center">
    <br>
    <h2>Produtos</h2>
    <hr>
</div>

<div class="row small-up-2 large-up-4">
    <?php foreach ($values->products as $product): ?>
    <div class="column">
        <img class="thumbnail" src="<?php echo $product['imgAddress'] ?>">
        <h5><?php echo $product['modelo'] ?></h5>
        <p>R$ <?php echo $product['preco'] ?></p>
        <a href="<?php echo WEB_ROOT . '/produto/view/' . $product['id'] ?>" class="button expanded">Ver Mais</a>
    </div>
    <?php endforeach; ?>
</div>