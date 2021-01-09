<?php

$container['events'] = function () {
    return new Zend\EventManager\EventManager;
};

$container['db'] = function () {
    $host = 'localhost';
    $db = 'pp_project_manager';
    $username = 'postgres';
    $password = 'docker';
    $dsn = "pgsql:host=$host;port=5432;dbname=$db";

    $options = [
      \PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'
    ];

    $pdo = new \PDO($dsn, $username, $password, $options);

    $pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);

    return $pdo;
};
