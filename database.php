<?php

require __DIR__ . '/vendor/autoload.php';

//retorna um container
$c = require __DIR__ . '/app/config/containers.php';
$c = new Pimple\Container($c);

$c['db'] = function () {
    $host = 'localhost';
    $db = 'template1 ';
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

if (!empty($argv[1]) and $argv[1] === 'fresh') {

    $c['db']->exec("DROP DATABASE IF EXISTS pp_project_manager");

    echo 'Database dropped' . PHP_EOL;
}

$files = scandir(__DIR__.'/database');

$c['db']->exec("CREATE DATABASE pp_project_manager");
echo 'Database created' . PHP_EOL;

foreach ($files as $file) {
    if (!is_dir(__DIR__.'/database/'. $file)) {
        $sql = file_get_contents(__DIR__.'/database/'. $file);
        $c['db']->exec($sql);

        echo $file.' is migrated' . PHP_EOL;
    }
}
