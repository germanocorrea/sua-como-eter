<?php
/**
 * Created by PhpStorm.
 * User: ggcorrea
 * Date: 06/10/16
 * Time: 16:03
 */

namespace Controller;


class Index extends Controller
{
    public  function index()
    {
        $this->model->setTableName('produtos');
        $this->variables['products'] = $this->model->search('all');
    }
}