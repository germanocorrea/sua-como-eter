<!--TODO: dropdown de administração-->
<!DOCTYPE html>
<html class="no-js" lang="pt-BR" dir="ltr">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?php echo APP_NAME; ?></title>
        <?php echo $this->loadAssets('css'); ?>
        <?php echo $this->loadAssets('fonts'); ?>
    </head>
    <body>
        <div class="top-bar">
            <div class="row">
                <div class="top-bar-title">
                    <a href="<?php echo WEB_ROOT ?>"><img src="<?php echo WEB_ROOT ?>/assets/img/logo.svg" style="height: 40px; width: auto" alt="<?php echo APP_NAME; ?>"></a>
                </div>
                <div class="top-bar-left">

                </div>
                <div class="top-bar-right">
                    <ul class="dropdown menu" data-dropdown-menu="" role="menubar" data-dropdownmenu="9j1fi1-dropdownmenu">
                        <?php if ($values->have_cart) '<li role="menuitem" tabindex="0"><a href="#" tabindex="-1"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Cart</a></li>'; ?>
                        <li class="has-submenu is-dropdown-submenu-parent is-down-arrow" role="menuitem" tabindex="0" title="One" aria-haspopup="true">
                            <a href="#" tabindex="-1"><i class="fi-torso" aria-hidden="true"></i> <?php echo $values->user_name; ?></a>
                            <ul class="submenu menu vertical is-dropdown-submenu first-sub" data-submenu="" aria-hidden="true" tabindex="-1" role="menu">
                                <?php foreach ($values->user_dropdown as $item): ?>
                                <li role="menuitem" class="is-submenu-item is-dropdown-submenu-item" tabindex="0"><a href="<?php echo $item[1]; ?>" tabindex="-1"><?php echo $item[0]; ?></a></li>
                                <?php endforeach;?>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <?php require  APP_DIR . DIRECTORY_SEPARATOR . 'View' . DIRECTORY_SEPARATOR . $this->controller . DIRECTORY_SEPARATOR . $this->action . '.php'; ?>
        <footer class="row column">
            <hr>
            <p><i class="fi-social-zurb" style="font-size: 1.5em"></i> Construído com ZURB Foundation</p>
        </footer>
        <?php echo $this->loadAssets('js', 'vendor'); ?>
        <?php echo $this->loadAssets('js'); ?>
    </body>
</html>
