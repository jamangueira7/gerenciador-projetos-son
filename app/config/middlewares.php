<?php

$middlewares = [
  'before' => [],
  'after' => [],
];

$app->addMiddleware('before', function ($c) {
    session_start();
});

$app->addMiddleware('before', function ($c) {
    //proteção das rotas da API
});

/*
$app->addMiddleware('after', function ($c) {
    echo 'after';
});

$app->addMiddleware('after', function ($c) {
    echo 'after 2';
});*/
