<?php

namespace App\Controllers;

use App\Models\Users;

class UserController
{
    public function index($container, $request)
    {
        $user = new Users($container);
        return $user->all();
    }

    public function create($container, $request)
    {
        $user = new Users($container);
        return $user->create($request->request->all());
    }

    public function show($container, $request)
    {
        $user = new Users($container);
        $conditions = ['id' => $request->attributes->get(1)];
        return $user->get($conditions);
    }


    public function update($container, $request)
    {
        $user = new Users($container);
        $conditions = ['id' => $request->attributes->get(1)];
        return $user->update($conditions, $request->request->all());
    }

    public function delete($container, $request)
    {
        $user = new Users($container);
        $conditions = ['id' => $request->attributes->get(1)];
        return $user->delete($conditions);
    }
}
