<?php
/**
 * Created by PhpStorm.
 * User: ggcorrea
 * Date: 07/10/16
 * Time: 15:36
 */

namespace Controller;


class User extends Controller
{

    public function login()
    {
        if (isset($_SESSION['user'])) header('Location: '. WEB_ROOT . '/produto/cart');

        if (isset($_POST['username']))
        {
            $users = $this->model->search('all');
            $existing_user = null;
            foreach ($users as $user)
            {
                if ($user['username'] == $_POST['username']) $existing_user = $user;
            }
            if ($existing_user == null) header('Location: ' . WEB_ROOT . '/user/login');
            if ($existing_user['password'] != $_POST['password']) header('Location: ' . WEB_ROOT . '/user/login');

            $_SESSION['user'] = $_POST['username'];
            header('Location: ' . WEB_ROOT . '/produto/cart');
        }
    }

    public function new()
    {
        // code
    }

    public function logout()
    {
        session_destroy();
    }

    public function configuration()
    {
        // code
    }

    public function profile()
    {
        // code
    }

    public function compras()
    {
        // code
    }

    public function acompanharCompra()
    {
        // code
    }

}