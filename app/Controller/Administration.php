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

    public function system()
    {
        $this->verifyPermission();
        // code
    }

    public function products()
    {
        $this->verifyPermission();

        if (isset($_POST['modeloSubmit']))
        {
            $this->model->setTableName('produtos');
            $this->model->set('modelo', $_POST['nomeModelo']);
            $this->model->set('preco', $_POST['preco']);
            $this->model->set('description', $_POST['descricaoModelo']);
            $this->model->record();
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

    public function gallery()
    {
        // TODO: implementar add de imagens pras galerias
    }

    public function edit_modelo($id)
    {
        $this->verifyPermission();
        // code
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
                header('Location: ' . WEB_ROOT . '/administration/itens');
            }
            elseif ($_POST['submit'] == 'update')
            {
                $this->model->set('id', $id);
                $this->model->set('tamanho', $_POST['tamanho']);
                $this->model->set('status', $_POST['status']);

                foreach ($this->variables['produtos'] as $produto)
                {
                    if ($produto['modelo'] == $_POST['idProduto']) $idProduto = $produto['id'];
                }

                $this->model->set('idProduto', $idProduto);

                $this->model->record();
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
        // code
    }

    public function editUser($id)
    {
        $this->verifyPermission();
        // code
    }

}