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