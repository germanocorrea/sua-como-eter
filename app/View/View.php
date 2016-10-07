<?php
/**
 * Created by PhpStorm.
 * User: ggcorrea
 * Date: 04/10/16
 * Time: 10:54
 */

namespace View;


class View
{
    private $controller;
    private $action;
    private $values;

    public function __construct($controller, $action)
    {
        $this->action = $action;
        $this->controller = ucfirst($controller);

        // TODO: carregar assets
    }

    public function assign($values)
    {
        $this->values = $values;
    }

    public function __destruct()
    {
        require APP_DIR . DIRECTORY_SEPARATOR . 'View' . DIRECTORY_SEPARATOR . $this->controller . DIRECTORY_SEPARATOR . $this->action . '.php';
    }

}