<div class="row">
    <div class="medium-6     columns">
        <h2>Dados do Usuário</h2>
        <ul>
            <li>Nome: <?php echo $values->name ?></li>
            <li>Nome de Usuário: <?php echo $values->username ?></li>
            <li>Número de Identificação: <?php echo $values->id ?></li>
            <li>Email: <?php echo $values->email ?></li>
            <li>Tipo de usuário: <?php echo ($values->type == 'admin') ? 'Administrador' : 'Cliente' ?></li>
        </ul>
    </div>
    <div class="medium-6 columns">
        <h2>Senha:</h2>
        <ul class="accordion" data-accordion data-allow-all-closed="true">
            <li class="accordion-item" data-accordion-item>
                <a href="#" class="accordion-title">Mostrar senha</a>
                <div class="accordion-content" data-tab-content>
                    Senha: <?php echo $values->password ?>
                </div>
            </li>
        </ul>
    </div>
</div>