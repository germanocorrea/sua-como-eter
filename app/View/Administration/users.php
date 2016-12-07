<div class="row collapse">
    <h2>Usuários</h2>
    <div class="medium-3 columns">
        <ul class="tabs vertical" id="example-vert-tabs" data-tabs>
            <li class="tabs-title is-active"><a href="#panel1v" aria-selected="true">Administradores</a></li>
            <li class="tabs-title"><a href="#panel2v">Clientes</a></li>
        </ul>
    </div>
    <div class="medium-9 columns">
        <div class="tabs-content vertical" data-tabs-content="example-vert-tabs">
            <div class="tabs-panel is-active" id="panel1v">
                <table class="stack">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nome de Usuário</th>
                            <th>Nome</th>
                            <th>Email</th>
                            <th>Status</th>
                            <th>Operações</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($values->admins as $admin): ?>
                        <tr>
                            <td><?php echo $admin['id']; ?></td>
                            <td><?php echo $admin['username']; ?></td>
                            <td><?php echo $admin['name']; ?></td>
                            <td><?php echo $admin['email']; ?></td>
                            <td><?php echo ($admin['status'] == 1) ? 'Ativo' : 'Inativo'; ?></td>
                            <td><a href="<?php echo WEB_ROOT; ?>/administration/edit-user/<?php echo $admin['id'] ?>" class="button">Editar</a></td>
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
            <div class="tabs-panel" id="panel2v">
                <table class="stack">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nome de Usuário</th>
                        <th>Nome</th>
                        <th>Email</th>
                        <th>Status</th>
                        <th>Operações</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($values->clients as $client): ?>
                        <tr>
                            <td><?php echo $client['id']; ?></td>
                            <td><?php echo $client['username']; ?></td>
                            <td><?php echo $client['name']; ?></td>
                            <td><?php echo $client['email']; ?></td>
                            <td><?php echo ($client['status'] == 1) ? 'Ativo' : 'Inativo'; ?></td>
                            <td><a href="<?php echo WEB_ROOT; ?>/administration/edit-user/<?php echo $client['id'] ?>" class="button">Editar</a></td>
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>