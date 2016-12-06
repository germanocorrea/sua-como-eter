<br>
<div class="row">
    <div class="medium-6 columns">
        <img class="thumbnail" src="<?php echo WEB_ROOT . '/' . $values->img; ?>">
    </div>
    <div class="medium-6 columns">
        <h3><?php echo $values->product_name; ?></h3>
        <p><?php echo $values->product_description; ?></p>
        <?php if ($values->available_sizes): ?>
        <form action="<?php echo WEB_ROOT ?>/produto/addCart" method="post">
            <div class="row">
                <div class="large-12 columns">
                    <label for="size">Size</label>
                </div>
                <div class="large-12 columns">
                    <?php echo $this->renderSelect($values->available_sizes, 'size'); ?>
                </div>
            </div>

            <div class="row">
              <fieldset class="small-12 columns">
                <button class="button large expanded" name="submit" type="submit" value="<?php echo $values->product_id; ?>">Adicionar ao Carrinho</button>
              </fieldset>
            </div>
        </form>
        <?php endif;?>
        <?php if (!$values->available_sizes): ?>
        <br>
        <div class="callout alert">Produto Indisponível</div>
        <?php endif;?>
    </div>
</div>