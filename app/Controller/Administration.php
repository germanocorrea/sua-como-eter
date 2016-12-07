<?php
/**
 * Created by PhpStorm.
 * User: ggcorrea
 * Date: 07/10/16
 * Time: 15:39
 */

namespace Controller;


class Administration extends Controller
{

    public function index()
    {
        $this->verifyPermission();
        // code
    }

    public function products()
    {
        $this->verifyPermission();

        if (isset($_POST['modeloSubmit']))
        {
            $this->recordProductData();
            $this->variables['alert'] = '<script>sweetAlert("Oba!","Modelo cadastrado com sucesso!");</script>';
        }
        $this->model->setTableName('produtos');
        $this->variables['produtos'] = $this->model->search('all');
    }

    public function itens()
    {
        $this->verifyPermission();

        if (isset($_POST['itemSubmit']))
        {
            $this->model->setTableName('produtos');
            $modelo = $this->model->search('one', [
                'conditions' => [
                    'modelo = ?' => $_POST['modelo']
                ]
            ]);
            $this->model->setTableName('itens');
            $this->model->set('idProduto', $modelo->get('id'));
            $this->model->set('tamanho', $_POST['tamanho']);
            $this->model->set('status', 1);
            $this->model->record();
            $this->variables['alert'] = '<script>sweetAlert("Oba!","Item cadastrado com sucesso!");</script>';
        }

        $this->model->setTableName('produtos');
        $this->variables['produtos'] = $this->model->search('all');

        $this->model->setTableName('itens');
        foreach ($this->model->search('all') as $item)
        {
            if ($item['status'] == 1) $this->variables['available_itens'][] = $item;
            else $this->variables['unavailable_itens'][] = $item;
        }
    }

    public function edit_product($id)
    {
        $this->verifyPermission();

        $this->model->setTableName('produtos');

        if (isset($_POST['submit']))
        {
            if ($_POST['submit'] == 'remove')
            {
                $this->model->deleteById($id);
                header('Location: ' . WEB_ROOT . '/administration/products?alert=Modelo removido com sucesso!');
            }
            elseif ($_POST['submit'] == 'update')
            {
                $this->recordProductData($id);
            }
            $this->variables['alert'] = '<script>sweetAlert("Oba!","Modelo alterado com sucesso!");</script>';
        }

        $produto = $this->model->search('one', [
            'conditions' => [
                'id = ?' => $id
            ]
        ]);

        $this->setProductData($produto);
    }

    public function edit_item($id)
    {
        $this->verifyPermission();

        $this->model->setTableName('produtos');
        $this->variables['produtos'] = $this->model->search('all');
        // TODO: colocar o modelo do item como primeiro item da lista

        $this->model->setTableName('itens');

        if (isset($_POST['submit']))
        {
            if ($_POST['submit'] == 'remove')
            {
                $this->model->deleteById($id);
                header('Location: ' . WEB_ROOT . '/administration/itens?alert=Item removido com sucesso!');
            }
            elseif ($_POST['submit'] == 'update')
            {
                $this->model->set('id', $id);
                $this->model->set('tamanho', $_POST['size']);
                $this->model->set('status', $_POST['status']);

                foreach ($this->variables['produtos'] as $produto)
                {
                    if ($produto['modelo'] == $_POST['idProduto']) $idProduto = $produto['id'];
                }

                $this->model->set('idProduto', $idProduto);

                $this->model->record();
                $this->variables['alert'] = '<script>sweetAlert("Oba!","Item alterado com sucesso!");</script>';
            }
        }

        $item = $this->model->search('one', [
            'conditions' => [
                'id = ?' => (int) $id
            ]
        ]);

        $this->variables['id'] = $item->get('id');
        $this->variables['idProduto'] = $item->get('idProduto');
        $this->variables['tamanho'] = $item->get('tamanho');
        $this->variables['status'] = $item->get('status');
    }

    public function users()
    {
        $this->verifyPermission();

        $this->model->setTableName('users');
        $users = $this->model->search('all');
        $admins = [];
        $clients = [];
        foreach ($users as $user)
        {
            if ($user['type'] == 'admin') $admins[] = $user;
            else $clients[] = $user;
        }

        $this->variables['admins'] = $admins;
        $this->variables['clients'] = $clients;

    }

    public function edit_user($id)
    {
        $this->verifyPermission();

        $this->model->setTableName('users');

        if (isset($_POST['submit']))
        {
            $this->model->set('id', $id);
            $this->model->set('status', $_POST['status']);
            $this->model->set('type', $_POST['type']);
            $this->model->record();
            header('Location: ' . WEB_ROOT . '/administration/users?alert=Usuário modificado com sucesso!');
        }

        $this->variables['id'] = $id;
        $user = $this->model->search('one', [
            'conditions' => [
                'id = ?' => $id
            ]
        ]);
        $this->variables['status'] = $user->get('status');
        $this->variables['type'] = $user->get('type');
    }

    private function recordProductData($id = null)
    {

        $this->model->setTableName('produtos');

        if ($id != null) $this->model->set('id', $id);
        $this->model->set('modelo', $_POST['nomeModelo']);
        $this->model->set('preco', $_POST['preco']);
        $this->model->set('description', $_POST['descricaoModelo']);
        if (isset($_FILES['img']) && $_FILES['img']['name'] != null) $this->model->set('imgAddress', $this->fileUpload($_FILES['img']));

        $this->model->record();
    }

    private function setProductData($produto)
    {
        $this->variables['id'] = $produto->get('id');
        $this->variables['modelo'] = $produto->get('modelo');
        $this->variables['preco'] = $produto->get('preco');
        $this->variables['description'] = $produto->get('description');
    }

}