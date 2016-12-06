<br>
<div class="row">
    <h2>Carrinho de Compras</h2>
    <? if (!empty($_SESSION['carrinho']['produtos'])): ?>
    <table summary="carrinho de compras">
        <thead>
            <tr>
                <th>Produto</th>
                <th>Tamanho</th>
                <th>Preço</th>
                <th>Operações</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach ($_SESSION['carrinho']['produtos'] as $produto): ?>
            <tr>
                <td><?php echo $produto['nome']; ?></td>
                <td><?php echo $produto['size']; ?></td>
                <td><?php echo $produto['preco']; ?></td>
                <td><a class="button alert" href="<?php echo WEB_ROOT; ?>/produto/removeFromCart/<?php echo $produto['id'] ?>">Remover</a></td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
    <?php if (isset($_SESSION['carrinho']['preco'])): ?>
    <div class="row">
        <span class="callout" style="float: right;">
            Preço Total: <b><?php echo $_SESSION['carrinho']['preco']; ?></b>
        </span>
    </div>
    <?php endif; ?>
    <div class="row">
        <div class="medium-12 columns">
            <a class="button" href="<?php echo WEB_ROOT; ?>/produto/confirmar-compra">Confirmar Compra</a>
            <a class="button secondary" href="<?php echo WEB_ROOT; ?>/produto/limparCarrinho">Limpar Carrinho</a>
        </div>
    </div>
    <? endif; ?>
</div>