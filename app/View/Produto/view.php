<br>
<div class="row">
    <div class="medium-6 columns">
        <img class="thumbnail" src="<?php echo $values->image_src; ?>">
    </div>
    <div class="medium-6 columns">
        <h3><?php echo $values->product_name; ?></h3>
        <p><?php echo $values->product_description; ?></p>
        <?php if ($values->available_sizes): ?>
        <form name="buyProduct">
            <div class="row">
                <div class="large-6 columns">
                    <div class="row">
                        <div class="large-12 columns">
                            <label for="size">Size</label>
                        </div>
                        <div class="large-12 columns">
                            <?php echo $this->renderSelect($values->available_sizes, 'size'); ?>
                        </div>
                    </div>
                </div>
                <div class="large-6 columns">
                    <div class="row">
                        <div class="large-12 columns">
                            <label for="middle-label">Quantidade</label>
                        </div>
                        <div class="large-12 columns">
                            <input type="number" name="quantity" value="1" id="middle-label">
                        </div>
                    </div>
                </div>
            </div>

            <button class="button large expanded">Comprar</button>
        </form>
        <?php endif;?>
        <?php if (!$values->available_sizes): ?>
        <br>
        <div class="callout alert">Produto Indisponível</div>
        <?php endif;?>
    </div>
</div>