<br>
<div class="row">
    <h2><i class="fi-torsos-female-male"></i> Configurações de Usuário</h2>
    <hr>
    <div class="medium-4 columns">
        <ul class="menu vertical callout">
            <li><a href="<?php echo WEB_ROOT; ?>/user/profile">Perfil</a></li>
            <li><a href="<?php echo WEB_ROOT; ?>/user/change-password">Trocar Senha</a></li>
            <li><a href="<?php echo WEB_ROOT; ?>/user/compras">Histórico</a></li>
            <li class="callout small alert"><a href="<?php echo WEB_ROOT; ?>/user/delete">Apagar Conta</a></li>
        </ul>
    </div>
    <div class="medium-8 columns">
        <form action="<?php echo WEB_ROOT; ?>/user/configuration" method="post">
            <div class="row">
              <div class="medium-6 columns">
                <label>Nome
                  <input type="text" value="<?php echo $values->name; ?>" name="name" placeholder="Nome" required>
                  <span class="form-error">Nome inválido</span>
                </label>
              </div>
              <div class="medium-6 columns">
                <label>Nome de usuário
                  <input type="text" value="<?php echo $values->username; ?>" name="username" placeholder="username" required>
                  <span class="form-error">Nome de usuário inválido</span>
                </label>
              </div>
            </div>
            <div class="row">
              <div class="small-12 columns">
                <label>Email
                  <input type="text" value="<?php echo $values->email; ?>" name="email" placeholder="seunome@email.com" required>
                  <span class="form-error">Email inválido</span>
                </label>
              </div>
            </div>
            <div class="row">
              <fieldset class="small-12 columns">
                <button class="button" type="submit" name="submit" value="Submit">Atualizar</button>
              </fieldset>
            </div>
        </form>
    </div>
</div>