<?php

namespace App\Controllers;

use App\Models\Users;

class UserController
{
    public function index($container, $request)
    {
        return 'index';
    }

    public function create($container, $request)
    {
        return 'create';
    }

    public function show($container, $request)
    {
        $user = new Users($container);
        $user->create(['name' => 'João']);
        $data = $user->get($request->attributes->get(1));
        return $data;
    }

    public function update($container, $request)
    {
        return 'update';
    }

    public function delete($container, $request)
    {
        return 'delete';
    }
}
