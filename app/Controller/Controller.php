<?php
/**
 * Created by PhpStorm.
 * User: ggcorrea
 * Date: 04/10/16
 * Time: 10:54
 */

namespace Controller;


abstract class Controller
{
    protected $variables;

    protected $model;

    public function __construct()
    {
        session_start();
        $logged = ($this->verifyLoggedSession()) ? 'user' : 'guest';
        $this->defineUserMenu($logged);
    }

    public function setVariables($var, $value)
    {
        $this->variables[$var] = $value;
    }


    public function getVariables()
    {
        return (object) $this->variables;
    }

    public function setModel($model)
    {
        // $model_name = get_class($model);
        // NOTE: isso ai em cima depois era utilizado abaixo como $this->{$model_name} = $model
        // entretanto, não é possível manter isso por causa dos namespaces
        $this->model = $model;
    }

    public function verifyLoggedSession()
    {
        if (isset($_SESSION['user'])) return true;
        return false;
    }

    public function defineUserMenu($logged)
    {
        switch ($logged)
        {
            case 'guest':
                $this->variables['have_cart'] = false;
                $this->variables['user_name'] = 'Visitante';
                $this->variables['user_dropdown'] = [
                    ['Fazer Login', WEB_ROOT . '/user/login'],
                    ['Cadastre-se!', WEB_ROOT . '/user/new'],
                ];
                break;
            case 'user':
                $this->variables['have_cart'] = true;
                $this->variables['user_name'] = $_SESSION['user'];
                $this->variables['user_dropdown'] = [
                    ['Perfil', WEB_ROOT . '/user/profile'],
                    ['Configurações', WEB_ROOT . '/user/configuration'],
                    ['Sair', WEB_ROOT . '/user/logout'],
                ];
                break;
        }
        return true;
    }
}