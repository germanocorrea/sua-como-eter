<br>
<div class="row columns medium-3 small-12 callout alert">
    <h2 style="font-size: x-large;">Apagar Conta</h2>
    <div class="row">
        <form action="<?php echo WEB_ROOT; ?>/user/delete" method="post">
              <div class="row columns">
                  <div class="small-12 columns">
                      <label>Nome de usuário
                          <input type="text" name="username" placeholder="Nome de Usuário" required>
                          <span class="form-error">Nome de usuário errado!</span>
                          <span class="help-text">É necessário informar seu nome de usuário para confirmar a ação.</span>
                      </label>
                  </div>
              </div>
              <div class="row columns">
                  <fieldset class="small-12 columns">
                      <button class="button alert" name="submit" type="submit" value="Submit">Excluir Conta</button>
                  </fieldset>
        </form>
              </div>
    </div>
</div>