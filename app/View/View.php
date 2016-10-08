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
    private $layout = 'default';

    public function __construct($controller, $action)
    {
        $this->action = $action;
        $this->controller = ucfirst($controller);
    }

    public function assign($values)
    {
        $this->values = $values;
    }

    public function render()
    {
        require APP_DIR . DIRECTORY_SEPARATOR . 'View' . DIRECTORY_SEPARATOR . 'layouts' . DIRECTORY_SEPARATOR . $this->layout . '.php';
    }

    private function loadAssets()
    {
        // TODO: carregar assets
    }

}