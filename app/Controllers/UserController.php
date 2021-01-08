<?php

namespace App\Controllers;

use App\Models\Users;

class UserController
{
    public function show($container, $request)
    {

        $user = new Users($container);
        $user->create(['name' => 'João']);
        $data = $user->get($request->attributes->get(1));
        return $data;
    }
}
