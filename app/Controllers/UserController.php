<?php

namespace App\Controllers;

use App\Models\Users;

class UserController
{
    public function show($container, $params)
    {
        $user = new Users($container);
        $data = $user->get($params[1]);
        return 'Meu nome é  ' . $data['name'];
    }
}
