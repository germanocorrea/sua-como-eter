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
        // TODO: verify if user exists
        // TODO: verify if password is correct
        // TODO: insert user in place
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