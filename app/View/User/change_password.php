<br>
<div class="row columns medium-3 small-12 callout">
    <h2 style="font-size: x-large;">Modificar Senha</h2>
    <div class="row">
        <form action="<?php echo WEB_ROOT; ?>/user/configuration">
            <div class="small-12 columns">
              <label>Digite a nova senha
                <input type="password" name="password" id="password" placeholder="Digite a nova senha" aria-describedby="password" required >
                <span class="form-error">Senha inválida</span>
              </label>
              <p class="help-text" id="password">Senha deve x y z</p>
            </div>
            <div class="small-12 columns">
              <label>Digite novamente sua nova senha
                <input type="password" placeholder="Digite novamente sua nova senha" aria-describedby="repassword" required data-equalto="password">
                <span class="form-error">Senhas não coincidem</span>
              </label>
              <p class="help-text" id="repassword"></p>
            </div>
            <div class="row columns">
              <fieldset class="small-12 columns">
                <button class="button" type="submit" name="submit" value="Submit">Mudar Senha</button>
              </fieldset>
            </div>
        </form>
    </div>
</div>