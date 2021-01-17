<?php

namespace App\Controllers;

use SON\Framework\Controller;

class UserController extends Controller
{
    protected function getModel() : string
    {
        return 'users_model';
    }

    public function register($container, $request)
    {
        return $container['users_model']->create($request->request->all());
    }

    public function getToken($container, $request)
    {
        return $container['users_model']->create($request->request->all());
    }

    public function getCurrentUser($container, $request)
    {
        return $container['users_model']->create($request->request->all());
    }
}
