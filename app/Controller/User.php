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
            $_SESSION['user_type'] = $existing_user['type'];
            header('Location: ' . WEB_ROOT . '/produto/cart');
        }
    }

    public function new($type = null)
    {

        if (isset($_POST['submit']))
        {
            $this->model->set('name', $_POST['name']);
            $this->model->set('username', $_POST['username']);
            $this->model->set('email', $_POST['email']);
            $this->model->set('password', $_POST['password']); // TODO: criptografar isso
            $this->model->set('type', (!$type) ? 'client' : 'employee');
            $this->model->record();
        }
        if ($this->verifyLoggedSession() and $_SESSION['user_type'] != 'admin') header('Location: ' . WEB_ROOT);
    }

    public function logout()
    {
        session_destroy();
        header('Location: ' . WEB_ROOT);
    }

    public function configuration()
    {
        // code
    }

    public function profile($profile)
    {
        if ($profile != $_SESSION['user'])
            if ($this->verifyLoggedSession() and $_SESSION['user_type'] != 'admin')
                header('Location: ' . WEB_ROOT);
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