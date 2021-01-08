<?php

namespace App\Controllers;

class UserController
{
    public function show($id)
    {
        $user = new Users($container);
        $data = $user->get($params[1]);
        return 'Meu nome é  ' . $data['name'];
    }
}
