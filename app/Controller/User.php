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
        if (isset($_SESSION['user'])) header('Location: '. WEB_ROOT);

        if (isset($_POST['username']))
        {
            if ($_POST['username'] != null || $_POST['password'] != null)
            {
                $users = $this->model->search('all');
                $existing_user = null;
                foreach ($users as $user)
                {
                    if ($user['username'] == $_POST['username']) $existing_user = $user;
                }
                if ($existing_user == null) header('Location: ' . WEB_ROOT . '/user/login');
                if ($existing_user['password'] != $_POST['password'])
                {
                    $this->logout();
                    header('Location: ' . WEB_ROOT . '/user/login');
                }
                else
                {
                    $_SESSION['user'] = $_POST['username'];
                    $_SESSION['user_type'] = $existing_user['type'];
                    header('Location: ' . WEB_ROOT);
                }
            }
            else
            {
                $this->variables['alert'] = '<script>sweetAlert("Opa!","Parece que você deixou algum campo em braco :/","error");</script>';
            }
        }
    }

    public function new($type = null)
    {

        if (isset($_POST['submit']))
        {
            if (
                $_POST['name'] != '' ||
                $_POST['name'] != null ||
                $_POST['username'] != '' ||
                $_POST['username'] != null ||
                $_POST['password'] != '' ||
                $_POST['password'] != null ||
                $_POST['email'] != '' ||
                $_POST['email'] != null
            )
            {
                $this->model->set('name', $_POST['name']);
                $this->model->set('username', $_POST['username']);
                $this->model->set('email', $_POST['email']);
                $this->model->set('password', $_POST['password']); // TODO: criptografar isso
                $this->model->set('type', (!$type) ? 'client' : 'employee');
                $this->model->record();
                $this->variables['alert'] = '<script>sweetAlert("Oba!","O usuário foi cadastrado com sucesso!");</script>';
            }
            else
            {
                $this->variables['alert'] = '<script>sweetAlert("Opa!","Parece que você deixou algum campo em braco :/","error");</script>';
            }
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
        $this->model->setTableName('users');
        if (isset($_POST['submit']))
        {
            $user = $this->model->search('one', [
                'conditions' => [
                    'username = ?' => $_SESSION['user']
                ]
            ]);
            $this->model->set('id', $user->get('id'));
            $this->model->set('name', $_POST['name']);
            $this->model->set('username', $_POST['username']);
            $this->model->set('email', $_POST['email']);

            $this->model->record();
            $this->variables['alert'] = '<script>sweetAlert("Oba!","Os dados foram alterados com sucesso!");</script>';
        }
        $user = $this->model->search('one', [
            'conditions' => [
                'username = ?' => $_SESSION['user']
            ]
        ]);

        $this->variables['name'] = $user->get('name');
        $this->variables['username'] = $user->get('username');
        $this->variables['email'] = $user->get('email');
    }

    public function profile($profile)
    {
        if ($profile != $_SESSION['user'])
            if ($this->verifyLoggedSession() and $_SESSION['user_type'] != 'admin')
                header('Location: ' . WEB_ROOT);
    }

    public function change_password()
    {
        if (isset($_POST['submit']))
        {
            $this->model->setTableName('users');
            $this->model->set('id', $this->discoverUserId());
            $this->model->set('password', $_POST['password']);
            $this->model->record();
            $this->variables['alert'] = '<script>sweetAlert("Oba!","Senha modificada com sucesso!");</script>';
        }
    }

    private function discoverUserId()
    {
        $this->model->setTableName('users');
        $user = $this->model->search('one', [
            'conditions' => [
                'username = ?' => $_SESSION['user']
            ]
        ]);
        return $user->get('id');
    }

    public function delete()
    {
        if (isset($_POST['submit'])) if ($_SESSION['user'] == $_POST['username'])
        {
            $this->model->setTableName('users');
            $this->model->deleteByUniqueKey($_POST['username'], 'username');
            $this->logout();
        }
    }

}