<?php
/**
 * Created by PhpStorm.
 * User: ggcorrea
 * Date: 05/10/16
 * Time: 21:10
 */

namespace Controller;


class Produto extends Controller
{
    public function index()
    {
        $this->variables['products'] = $this->model->search('all');

        $this->model->setTableName('images');
        $this->variables['images'] = $this->model->search('all');
    }

    public function view($productId)
    {
        if ($productId == '/' || $productId == null) header('Location: ' . WEB_ROOT . '/produto');

        $product = $this->model->search('one', ['conditions' => ['id = ?' => (int) $productId]]);
        $this->variables['product_id'] = $productId;
        $this->variables['product_name'] = $product->get('modelo');
        $this->variables['product_description'] = $product->get('description');

        $this->model->setTableName('itens');
        $itens = $this->model->search('all', ['conditions' => ['idProduto = ?' => (int) $productId]]);
        foreach ($itens as $item)
        {
            $this->variables['available_sizes'][$item['tamanho']] = $item['tamanho'];
        }

        $this->model->setTableName('images');
        $images = $this->model->search('all', ['conditions' => ['idProduto = ?' => (int) $productId]]);
        $this->variables['images_src'] = [
            'main' => 'http://placehold.it/650x350',
            'secondary' => [
                'http://placehold.it/250x200',
                'http://placehold.it/250x200',
                'http://placehold.it/250x200',
                'http://placehold.it/250x200',
            ]
        ];
    }

    public function cart()
    {
        // code
    }
}