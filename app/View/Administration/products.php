<div class="row">
    <h2><i class="fi-shopping-bag"></i> Modelos</h2>
    <hr>
    <div class="row columns">
        <div class="small-12 columns">
            <div class="callout">
                <h3>Adicionar Modelo</h3>
                <div class="row columns">
                    <form method="post" enctype="multipart/form-data" action="<?php echo WEB_ROOT ?>/administration/products" novalidate data-abide="">
                        <div class="row">
                            <div class="medium-6 columns">
                                <div class="medium-12 columns">
                                    <label>Nome
                                        <input name="nomeModelo" type="text" placeholder="Nome do modelo" required pattern="alpha">
                                        <span class="form-error">Nome inválido</span>
                                    </label>
                                </div>
                                <div class="medium-12 columns">
                                    <label>Preço
                                        <input name="preco" type="number" placeholder="Preço" required pattern="number">
                                        <span class="form-error">Preço inválido</span>
                                    </label>
                                </div>
                                <div class="medium-12 columns">
                                    <label>Imagem
                                        <input id="img" type="file" name="img" required>
                                        <span class="form-error">Arquivo inválido</span>
                                    </label>
                                </div>
                            </div>
                            <div class="medium-6 columns">
                                <label>Descrição
                                    <textarea name="descricaoModelo" id="descricao" rows="3" placeholder="Descrição do modelo" aria-describedby="modelodesc" required></textarea>
                                    <span class="form-error">Descrição inválida</span>
                                    <p class="help-text" id="modelodesc">Descrição curta e sucinta</p>
                                </label>
                            </div>
                        </div>
                        <div class="row">
                          <fieldset class="small-12 columns">
                            <button class="button" type="submit" name="modeloSubmit" value="Submit">Adicionar Modelo</button>
                          </fieldset>
                        </div>
                    </form>
                </div>
            </div>
            <table class="stack">
                <thead summary="">
                <tr>
                    <th width="">ID</th>
                    <th width="">Nome</th>
                    <th width="">Preço</th>
                    <th width="">Descrição</th>
                    <th width="">Link</th>
                    <th width="">Operações</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($values->produtos as $modelo): ?>
                    <tr>
                        <td><?php echo $modelo['id']; ?></td>
                        <td><?php echo $modelo['modelo']; ?></td>
                        <td><?php echo $modelo['preco']; ?></td>
                        <td><?php echo $modelo['description']; ?></td>
                        <td><a href="<?php echo WEB_ROOT; ?>/produto/view/<?php echo $modelo['id']; ?>">Produto na Loja</a></td>
                        <td style="float: right;"><a class="button" href="<?php echo WEB_ROOT; ?>/administration/edit-product/<?php echo $modelo['id']; ?>">Editar</a></td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>