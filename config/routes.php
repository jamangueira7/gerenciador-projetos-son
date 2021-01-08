<?php

$router->add('GET','/', function () {
    return 'Estamos na homepage';
});

$router->add('GET','/projects/(\d+)', '\App\Controllers\UserController::show');

