<br>
<div class="row">
    <h2><i class="fi-shopping-bag"></i> Produtos</h2>
    <hr>
    <div class="row columns">
        <div class="small-12 columns">
            <div class="callout">
                <h3>Adicionar Produto</h3>
                <div class="row columns">
                    <form method="post" action="<?php echo WEB_ROOT ?>/administration/itens" novalidate data-abide="">
                        <div class="row">
                            <div class="small-12 medium-6 columns">
                                <label>Modelo
                                    <select name="modelo" id="modelo">
                                        <?php foreach ($values->produtos as $modelo): ?>
                                            <option value="<?php echo $modelo['modelo'] ?>"><?php echo $modelo['modelo'] ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </label>
                            </div>
                            <div class="small-12 medium-6 columns">
                                <label>Tamanho
                                    <select name="tamanho" id="tamanho">
                                        <option value="PP">PP</option>
                                        <option value="P">P</option>
                                        <option value="M">M</option>
                                        <option value="G">G</option>
                                        <option value="GG">GG</option>
                                    </select>
                                </label>
                            </div>
                        </div>
                        <div class="row">
                            <fieldset class="small-12 columns">
                                <button class="button" type="submit" value="Submit" name="itemSubmit">Adicionar Produto</button>
                            </fieldset>
                        </div>
                    </form>
                </div>
            </div>







            <div class="row collapse">
                <div class="medium-3 columns">
                    <ul class="tabs vertical" id="example-vert-tabs" data-tabs>
                        <li class="tabs-title is-active"><a href="#panel1v" aria-selected="true">Disponíveis</a></li>
                        <li class="tabs-title"><a href="#panel2v">Indisponíveis</a></li>
                    </ul>
                </div>
                <div class="medium-9 columns">
                    <div class="tabs-content vertical" data-tabs-content="example-vert-tabs">
                        <div class="tabs-panel is-active" id="panel1v">
                            <h3>Produtos Disponíveis</h3>
                            <table class="stack">
                                <thead summary="produtos disponíveis">
                                <tr>
                                    <th width="">ID</th>
                                    <th width="">Modelo</th>
                                    <th width="">Tamanho</th>
                                    <th width="">Link</th>
                                    <th width="">Operações</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php foreach ($values->available_itens as $item): ?>
                                    <tr>
                                        <td><?php echo $item['id']; ?></td>
                                        <?php
                                        foreach ($values->produtos as $modelo)
                                        {
                                            if ($modelo['id'] == $item['idProduto'])
                                            {
                                                echo '<td>' . $modelo['modelo'] . '</td>';
                                            }
                                        }
                                        ?>
                                        <td><?php echo $item['tamanho']; ?></td>
                                        <td><a href="<?php echo WEB_ROOT; ?>/produto/view/<?php echo $item['id']; ?>">Produto na Loja</a></td>
                                        <td style="float: right;"><a class="button" href="<?php echo WEB_ROOT; ?>/administration/edit-item/<?php echo $item['id']; ?>">Editar</a></td>
                                    </tr>
                                <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                        <div class="tabs-panel" id="panel2v">
                            <h3>Produtos Indisponíveis</h3>
                            <table class="stack">
                                <thead summary="produtos indisponíveis">
                                <tr>
                                    <th width="">ID</th>
                                    <th width="">Modelo</th>
                                    <th width="">Tamanho</th>
                                    <th width="">Operações</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php foreach ($values->unavailable_itens as $item): ?>
                                    <tr>
                                        <td><?php echo $item['id']; ?></td>
                                        <?php
                                        foreach ($values->produtos as $modelo)
                                        {
                                            if ($modelo['id'] == $item['idProduto'])
                                            {
                                                echo '<td>' . $modelo['modelo'] . '</td>';
                                            }
                                        }
                                        ?>
                                        <td><?php echo $item['tamanho']; ?></td>
                                        <td><a href="<?php echo WEB_ROOT; ?>/produto/view/<?php echo $item['id']; ?>">Produto na Loja</a></td>
                                        <td style="float: right;"><a class="button" href="<?php echo WEB_ROOT; ?>/administration/edit-item/<?php echo $item['id']; ?>">Editar</a></td>
                                    </tr>
                                <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>