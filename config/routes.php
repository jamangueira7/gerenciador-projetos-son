<?php

use App\Models\Users;

$router->add('GET','/', function () {
    return 'Estamos na homepage';
});

$router->add('GET','/projects/(\d+)', function ($params) use ($container) {

});
