<br>
<div class="row">
    <h2>Editar Item</h2>
    <hr>
    <!--  TODO: colocar icone no título  -->
    <form action="<?php echo WEB_ROOT; ?>/administration/edit_item/<?php echo $values->id; ?>" method="post">
        <div class="medium-6 columns">
            <div class="row">
              <div class="small-12 columns">
                <label>Modelo
                    <select name="idProduto" id="modelo">
                        <?php foreach ($values->produtos as $modelo): ?>
                            <option value="<?php echo $modelo['modelo'] ?>"><?php echo $modelo['modelo'] ?></option>
                        <?php endforeach; ?>
                    </select>
                </label>
              </div>
            </div>
        </div>
        <div class="small-3 columns">
            <label>Tamanho
                <?php echo $this->renderSelect(['PP', 'P', 'M', 'G', 'GG'], 'tamanho') ?>
            </label>
        </div>
        <div class="small-3 columns">
            <p>Disponibilidade</p>
            <input type="radio" name="status" value="1" id="disponivel" <?php if ($values->status == 1) echo 'checked'; ?>><label for="disponivel">Disponível</label>
            <input type="radio" name="status" value="2" id="indisponivel" <?php if ($values->status == 2) echo 'checked'; ?>><label for="indisponivel">Indisponível</label>
        </div>
        <div class="row">
            <div class="medium-12 columns">
                <button class="button" type="submit" name="submit" value="update">Atualizar item</button>
                <button class="button alert" type="submit" name="submit" value="remove">Excluir item</button>
            </div>
        </div>
    </form>
</div>