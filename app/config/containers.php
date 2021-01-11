<?php

$container['events'] = function () {
    return new Zend\EventManager\EventManager;
};

$container['settings'] = function () {
    $host = 'localhost';

    return [
        'db' => [
            'dsn' => "pgsql:host=$host;port=5432",
            'database' => 'pp_project_manager',
            'username' => 'postgres',
            'password' => 'docker',
            'options' => [
                \PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'
            ],
        ]
    ];
};

$container['db'] = function ($container) {

    $dsn = $container['settings']['db']['dsn'] . ';dbname=' . $container['settings']['db']['database'];
    $username = $container['settings']['db']['username'];
    $password = $container['settings']['db']['password'];
    $options = $container['settings']['db']['options'];

    $pdo = new \PDO($dsn, $username, $password, $options);

    var_dump($dsn);
    $pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);

    return $pdo;
};

$container['users_model'] = function ($c) {
    return new \App\Models\Users($c);
};

return $container;
