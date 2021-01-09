<?php

$composer = require __DIR__.'/vendor/autoload.php';

$modules = [
    __DIR__ . '/app/Module.php' => 'App\Module'
];
$app = new \SON\Framework\App($composer, $modules);
$app->run();
