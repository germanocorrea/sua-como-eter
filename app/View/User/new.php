<br>
<div class="row">
    <h2><i class="fi-torsos-female-male"></i> Novo Cliente</h2>
    <hr>
    <div class="medium-6 small-12 columns">
        <h3>A maior loja de suéteres do Brasil!</h3>
        <p>Nihil natus explicabo occaecati inventore. Minima laudantium natus est non dolorem. Ducimus possimus porro quos. Aliquam reiciendis molestiae perspiciatis quam qui eius et. Ex eos sunt quasi iusto. Rerum sapiente voluptas eum veniam quia esse explicabo.</p>

        <div class="row cadastrolist callout">
            <div class="medium-6 columns">
                <ul style="list-style: none">
                    <li><i class="cadastroicon fi-heart"></i> Favoritos</li>
                    <li><i class="cadastroicon fi-trees"></i> Sustentáveis</li>
                    <li><i class="cadastroicon fi-pricetag-multiple"></i> Preço Acessível</li>
                </ul>
            </div>
            <div class="medium-6 columns">
                <ul style="list-style: none">
                    <li><i class="cadastroicon fi-check"></i> Qualidade</li>
                    <li><i class="cadastroicon fi-check"></i> Segurança</li>
                    <li><i class="cadastroicon fi-check"></i> Facilidade</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="medium-6 small-12 columns">
        <h3>Cadastro</h3>
        <form action="<?php echo WEB_ROOT ?>/user/new" method="post" novalidate data-abide="">
            <div data-abide-error class="alert callout" style="display: none;">
                <p><i class="fi-alert"></i> Há erros no seu cadastro!</p>
            </div>
            <div class="row">
              <div class="medium-6 columns">
                <label>Nome Completo
                  <input name="name" type="text" placeholder="nome" aria-describedby="describeName" required>
                  <span class="form-error">Nome inválido</span>
                  <p class="help-text" id="describeName">Nome completo, sem abreviações.</p>
                </label>
              </div>
                <div class="medium-6 columns">
                    <label>Nome de usuário
                        <input name="username" type="text" placeholder="Nome de usuário" aria-describedby="describeUsername" required pattern="alpha_numeric">
                        <span class="form-error">Nome de usuário inválido</span>
                        <p class="help-text" id="describeUsername">Pode haver números, sem espaço, acentos ou underline.</p>
                    </label>
                </div>
            </div>

            <div class="row">
              <div class="medium-12 columns">
                <label>Email
                  <input name="email" type="text" placeholder="Email" required pattern="email">
                  <span class="form-error">Email inválido!</span>
                </label>
              </div>
            </div>

<!--            <div class="row">-->
<!--                <div class="medium-6 columns">-->
<!--                    <label>Tipo de Cartão de Crédito-->
<!--                        <input name="creditCard" type="text" placeholder="Cartão de Crédito" aria-describedby="cartaoTipo" required pattern="card">-->
<!--                        <span class="form-error">Cartão inválido</span>-->
<!--                        <p class="help-text" id="cartaoTipo">Informe seu cartão de crédito</p>-->
<!--                    </label>-->
<!--                  </div>-->
<!--                <div class="medium-6 columns">-->
<!--                    <label>Número do Cartão de Crédito-->
<!--                        <input name="creditCardNum" type="text" placeholder="Número do Cartão de Crédito" aria-describedby="cartao" required pattern="cvv">-->
<!--                        <span class="form-error">Número do cartão inválido</span>-->
<!--                        <p class="help-text" id="cartao">Informe seu cartão de crédito</p>-->
<!--                    </label>-->
<!--                </div>-->
<!--            </div>-->

            <div class="row">
                <div class="medium-6 columns">
                    <label>Senha
                        <input name="password" type="password" id="password" placeholder="Senha" aria-describedby="describePassword" required pattern="alpha_numeric">
                        <span class="form-error">Senha inválida!</span>
                    </label>
                    <p class="help-text" id="describePassword">Pode haver letras maiúsculas, minúsculas e números.</p>
                </div>
                <div class="medium-6 columns">
                    <label>Repita a senha
                        <input type="password" placeholder="Senha" aria-describedby="describeRePassword" required pattern="alpha_numeric" data-equalto="password">
                        <span class="form-error">Senhas devem coincidir!</span>
                    </label>
                    <p class="help-text" id="describeRePassword">Digite a sua senha novamente.</p>
                </div>
            </div>
            <div class="row">
              <fieldset class="medium-12 columns">
                <button class="button" type="submit" name="submit" value="Submit">Cadastrar</button>
                <button class="button secondary" type="reset" value="Reset">Limpar Campos</button>
              </fieldset>
            </div>
        </form>
    </div>
</div>