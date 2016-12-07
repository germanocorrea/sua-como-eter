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
    }

    public function view($productId)
    {
        if ($productId == '/' || $productId == null) header('Location: ' . WEB_ROOT . '/produto');

        $product = $this->model->search('one', ['conditions' => ['id = ?' => (int) $productId]]);
        if ($product == null) header('Location: ' . WEB_ROOT . '/produto/not-found');

        $this->variables['product_id'] = $productId;
        $this->variables['product_name'] = $product->get('modelo');
        $this->variables['product_description'] = $product->get('description');
        $this->variables['product_status'] = $product->get('status');

        $this->model->setTableName('itens');
        $itens = $this->model->search('all', [
            'conditions' => [
                'idProduto = ?' => (int) $productId,
                'status = ?' => (int) 1
            ]
        ]);
        if ($itens != null)
        {
            foreach ($itens as $item)
            {
                $this->variables['available_sizes'][$item['tamanho']] = $item['tamanho'];
            }
        }
        else
        {
            $this->variables['available_sizes'] = false;
        }

        $this->variables['img'] = $product->get('imgAddress');
        if ($this->variables['img'] == null) $this->variables['img'] = 'http://placehold.it/650x350';
    }

    public function cart(){}

    private function getProdInfoByID($id)
    {
        $this->model->setTableName('produtos');
        $produto = $this->model->search('one', [
            'conditions' => [
                'id = ?' => $id
            ]
        ]);
        return [
            'nome' => $produto->get('modelo'),
            'preco' => $produto->get('preco')
        ];
    }

    public function addCart()
    {

        if (!isset($_SESSION['carrinho']['produtos'][$_POST['submit']])) {

            $_SESSION['carrinho']['produtos'][] = [
                'id' => $_POST['submit'],
                'size' => $_POST['size'],
                'nome' => $this->getProdInfoByID($_POST['submit'])['nome'],
                'preco' => $this->getProdInfoByID($_POST['submit'])['preco']
            ];

            $_SESSION['carrinho']['preco'] += $this->getProdInfoByID($_POST['submit'])['preco'];

        }

        header('Location: ' . WEB_ROOT . '/produto/cart?=Item adicionado ao carrinho com sucesso!');
    }

    public function limparCarrinho(){
        unset($_SESSION['carrinho']);
        header('Location: ' . WEB_ROOT . '/produto/cart?alert=Carrinho limpado com sucesso!');
    }

    public function removeFromCart($id)
    {
        foreach ($_SESSION['carrinho']['produtos'] as $key => $produto)
        {
            if ($produto['id'] == $id) unset($_SESSION['carrinho']['produtos'][$key]);
        }
        header('Location: ' . WEB_ROOT . '/produto/cart?alert=Item removido do carrinho com sucesso!');
    }

    public function confirmar_compra()
    {
        $this->model->setTableName('itens');
        foreach ($_SESSION['carrinho']['produtos'] as $produto)
        {
            $this->model->deleteById($produto['id']+0);
        }
        unset($_SESSION['carrinho']);
    }

    public function not_found() {}
}