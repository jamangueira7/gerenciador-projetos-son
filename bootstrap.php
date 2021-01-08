<?php

require __DIR__.'/vendor/autoload.php';

$router = new \SON\Framework\Router;

$router->add('GET','/', function () {
    return 'Estamos na homepage';
});

$router->add('GET','/projects/(\d+)', function ($params) {
    return 'Estamos listando o projetos de id: ' . $params[1];
});

echo $router->run();
