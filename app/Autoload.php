<?php
/**
 * Created by PhpStorm.
 * User: ggcorrea
 * Date: 04/10/16
 * Time: 10:56
 * @brief MVC classes autoload based on namespaces
 */

spl_autoload_register('loadClass');

function loadClass($class)
{

    $require = explode('\\', $class);

    $require = implode(DIRECTORY_SEPARATOR, $require);

    require APP_DIR . DIRECTORY_SEPARATOR . $require . '.php';

}
