<div class="row columns medium-3 small-12 callout">
    <form action="<?php echo WEB_ROOT; ?>/administration/edit-user/<?php echo $values->id; ?>" method="post">
        <div class="row">
            <fieldset class="small-12 columns">
                <legend>Status</legend>
                <input type="radio" name="status" value="1" id="Ativostatus" <?php if ($values->status == 1) echo 'checked'; ?>><label for="Ativostatus">Ativo</label>
                <input type="radio" name="status" value="0" id="Inativostatus" <?php if ($values->status == 0) echo 'checked'; ?>><label for="Inativostatus">Inativo</label>
                <!--input[type=radio name= value= id=]>label[for=] -->
            </fieldset>
        </div>
        <div class="row">
          <fieldset class="small-12 columns">
            <legend>Tipo</legend>
            <input type="radio" name="type" value="admin" id="Administradortipo" <?php if ($values->type == 'admin') echo 'checked'; ?>><label for="Administradortipo">Administrador</label>
            <input type="radio" name="type" value="client" id="Clientetipo"  <?php if ($values->type == 'client') echo 'checked'; ?>><label for="Clientetipo">Cliente</label>
            <!--input[type=radio name= value= id=]>label[for=]-->
          </fieldset>
        </div>
        <div class="row">
          <fieldset class="small-12 columns">
            <button class="button" name="submit" type="submit" value="Submit">Alterar Usuário</button>
          </fieldset>
        </div>
    </form>
</div>