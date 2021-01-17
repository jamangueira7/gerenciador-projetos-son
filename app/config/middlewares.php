<?php

$middlewares = [
  'before' => [],
  'after' => [],
];

$app->addMiddleware('before', function ($c) {
    session_start();
});

$app->addMiddleware('before', function ($c) {
    if (!preg_match('/^\/api\/*./', $c['router']->getCurrentUrl())) {
        return;
    }

    $data = (new \App\Controllers\UserController)->getCurrentUser($c);

    $c['loggedUser'] = function () use ($data) {
        return $data;
    };
});

/*
$app->addMiddleware('after', function ($c) {
    echo 'after';
});

$app->addMiddleware('after', function ($c) {
    echo 'after 2';
});*/
