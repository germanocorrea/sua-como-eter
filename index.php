<?php
/**
 * @brief system router and controller, model and view loader
 */
require 'app/Autoload.php';

define('APP_DIR', './app');

if (isset($_SERVER['PATH_INFO'])
    && strlen($_SERVER['PATH_INFO'])
    && $_SERVER['PATH_INFO'] != '/')
    $path = explode('/', $_SERVER['PATH_INFO']);
else $path[1] = 'index';

$route['controller'] = isset($path[1]) ? $path[1] : null;
$route['action'] = isset($path[2]) && !empty($path[2]) ? $path[2] : 'index';
$route['value'] = isset($path[3]) && !empty($path[3]) ? $path[3] : null;

$model = '\Model\\' . ucfirst($route['controller']);
$controller = '\Controller\\' . ucfirst($route['controller']);

$controller_object = new $controller;
$controller_object->setModel(new $model);
$controller_object->{$route['action']}($route['value']);

$view_variables = $controller_object->getVariables();

$view = new \View\View($route['controller'], $route['action']);
$view->assign($view_variables);