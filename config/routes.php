<?php

$router->add('GET','/', function () use ($container) {
    $pdo = $container['db'];
    var_dump($pdo);
    return 'Estamos na homepage';
});

$router->add('GET','/projects/(\d+)', function ($params) {
    return 'Estamos listando o projetos de id: ' . $params[1];
});
