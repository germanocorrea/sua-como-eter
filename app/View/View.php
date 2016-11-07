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
        $values = $this->values;
        require APP_DIR . DIRECTORY_SEPARATOR . 'View' . DIRECTORY_SEPARATOR . 'layouts' . DIRECTORY_SEPARATOR . $this->layout . '.php';
    }

    private function loadAssets($type, $folder = false)
    {
        $assets_dir = ASSETS_DIR . DIRECTORY_SEPARATOR . $type . DIRECTORY_SEPARATOR;
        if ($folder) $assets_dir .= $folder . DIRECTORY_SEPARATOR;
        $dir = SERVER_DIR . DIRECTORY_SEPARATOR . $assets_dir;
        $http_location = WEB_ROOT . DIRECTORY_SEPARATOR . $assets_dir;
        $files = array_diff(scandir($dir), array('..', '.'));

        $return = '';

        $type = strtolower($type);
        foreach ($files as $file)
        {
            switch ($type)
            {
                case 'css':
                case 'stylesheet':
                case 'stylesheets':
                    $return .= '<link rel="stylesheet" href="'. $http_location . $file .'">
        ';
                    break;
                case 'js':
                case 'script':
                case 'scripts':
                case 'javascript':
                    $return .= '<script type="application/javascript" src="' . $http_location . $file .'"></script>
        ';
                    break;
                case 'font':
                case 'fonts':
                    break;
            }
        }
        return $return;
    }

    public function renderSelect(Array $array, $name)
    {
        $select = '<select name="' . $name . '" id="' . $name . '">';
        foreach ($array as $key => $value)
        {
            $select .= '<option value="' . $key . '">' . $value . '</option>';
        }
        $select .= '</select>';
        return $select;
    }
}