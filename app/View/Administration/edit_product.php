<div class="row">
    <h2>Editar Modelo</h2>
    <form method="post" enctype="multipart/form-data" action="<?php echo WEB_ROOT ?>/administration/edit-product/<?php echo $values->id; ?>" novalidate data-abide="">
        <div class="row">
            <div class="medium-6 columns">
                <div class="medium-12 columns">
                    <label>Nome
                        <input name="nomeModelo" type="text" placeholder="Nome do modelo" value="<?php echo $values->modelo; ?>" required pattern="alpha">
                        <span class="form-error">Nome inválido</span>
                    </label>
                </div>
                <div class="medium-12 columns">
                    <label>Preço
                        <input name="preco" type="number" placeholder="Preço" value="<?php echo $values->preco; ?>" required pattern="number">
                        <span class="form-error">Preço inválido</span>
                    </label>
                </div>
                <div class="medium-12 columns">
                    <label>Imagem
                        <input id="img" type="file" name="img">
                        <p class="help-text">A imagem só é modificada se for realizado algum upload neste formulário. Não selecione uma imagem caso não queira modificar a imagem do modelo.</p>
                        <span class="form-error">Arquivo inválido</span>
                    </label>
                </div>
            </div>
            <div class="medium-6 columns">
                <label>Descrição
                    <textarea name="descricaoModelo" id="descricao" rows="3" placeholder="Descrição do modelo" aria-describedby="modelodesc" required><?php echo $values->description; ?></textarea>
                    <span class="form-error">Descrição inválida</span>
                    <p class="help-text" id="modelodesc">Descrição curta e sucinta</p>
                </label>
            </div>
        </div>
        <div class="row">
            <fieldset class="small-12 columns">
                <button class="button primary" type="submit" name="submit" value="update">Atualizar Modelo</button>
                <button class="button alert" type="submit" name="submit" value="remove">Excluir Modelo</button>
            </fieldset>
        </div>
    </form>
</div>