<!DOCTYPE html>
<html class="no-js" lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Sua Como Éter</title>
        <link rel="stylesheet" href="<?php echo WEB_ROOT; ?>/assets/css/foundation.css">
        <link rel="stylesheet" href="<?php echo WEB_ROOT; ?>/assets/css/app.css">
        <link rel="stylesheet" href="<?php echo WEB_ROOT; ?>/assets/css/font-awesome.min.css">
    </head>
    <body>
        <div class="top-bar">
            <div class="row">
                <div class="top-bar-left">
                    <img src="<?php echo WEB_ROOT ?>/assets/img/logo.svg" style="height: 50px" alt="<?php echo APP_NAME; ?>">
                </div>
                <div class="top-bar-title">
                    <ul class="menu">
                        <li><input type="search" placeholder="Search"></li>
                        <li><button type="button" class="button">Search</button></li>
                    </ul>
                </div>
                <div class="top-bar-right">
                    <ul class="dropdown menu" data-dropdown-menu="" role="menubar" data-dropdownmenu="9j1fi1-dropdownmenu">
<!--                        <li class="menu-text" role="menuitem" tabindex="0">-->
<!--                            -->
<!--                        </li>-->
                        <li role="menuitem" tabindex="0"><a href="#" tabindex="-1"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Cart</a></li>
                        <li class="has-submenu is-dropdown-submenu-parent is-down-arrow" role="menuitem" tabindex="0" title="One" aria-haspopup="true">
                            <a href="#" tabindex="-1"><i class="fa fa-user" aria-hidden="true"></i> Fulano de Tal</a>
                            <ul class="submenu menu vertical is-dropdown-submenu first-sub" data-submenu="" aria-hidden="true" tabindex="-1" role="menu">
                                <li role="menuitem" class="is-submenu-item is-dropdown-submenu-item" tabindex="0"><a href="#" tabindex="-1">Perfil</a></li>
                                <li role="menuitem" class="is-submenu-item is-dropdown-submenu-item" tabindex="0"><a href="#" tabindex="-1">Configurações</a></li>
                                <li role="menuitem" class="is-submenu-item is-dropdown-submenu-item" tabindex="0"><a href="#" tabindex="-1">Sair</a></li>
                            </ul>
                        </li>
<!--                        <li role="menuitem" tabindex="0"><a href="#" tabindex="-1">Login</a></li>-->
                    </ul>
                </div>
            </div>
        </div>
        <?php require  APP_DIR . DIRECTORY_SEPARATOR . 'View' . DIRECTORY_SEPARATOR . $this->controller . DIRECTORY_SEPARATOR . $this->action . '.php'; ?>
        <script src="<?php echo WEB_ROOT; ?>/assets/js/vendor/jquery.js"></script>
        <script src="<?php echo WEB_ROOT; ?>/assets/js/vendor/what-input.js"></script>
        <script src="<?php echo WEB_ROOT; ?>/assets/js/vendor/foundation.js"></script>
        <script src="<?php echo WEB_ROOT; ?>/assets/js/app.js"></script>
    </body>
</html>
