<?php

require __DIR__.'/vendor/autoload.php';

$router = new \SON\Framework\Router;

$router->add('/', function () {
    return 'Estamos na homepage';
});

$router->add('/projects', function () {
    return 'Estamos listando projetos';
});

echo $router->run();
