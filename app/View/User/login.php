<div class="row medium-3 small-12">

</div>
<br>
<div class="row columns medium-3 small-12 callout">
    <div class="small-12 columns">
        <div class="row">
            <h2 style="font-size: x-large;">Login</h2>
        </div>
        <div class="row">
            <form action="<?php echo WEB_ROOT ?>/user/login" method="post">
                <div class="small-12 columns">
                    <label for="username">Usuário</label>
                    <input type="text" name="username" id="username" placeholder="Nome de Usuário">
                </div>
                <div class="small-12 columns">
                    <label for="password">Senha</label>
                    <input type="password" name="password" id="password" placeholder="Senha">
                </div>
                <div class="small-12 columns">
                    <div class="expanded button-group">
                        <button class="button" type="submit">Login</button>
                        <button class="secondary button">Criar conta</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>