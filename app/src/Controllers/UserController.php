<?php

namespace App\Controllers;

use SON\Framework\Controller;

class UserController extends Controller
{
    protected function getModel() : string
    {
        return 'users_model';
    }
}
