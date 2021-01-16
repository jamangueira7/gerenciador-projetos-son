<?php

$router->add('GET','/api/projects', 'SON\Framework\Tasks\Controllers\ProjectsController::index');
$router->add('POST','/api/projects', 'SON\Framework\Tasks\Controllers\ProjectsController::create');

$router->add('GET','/api/sections', 'SON\Framework\Tasks\Controllers\SectionsController::index');
$router->add('POST','/api/sections', 'SON\Framework\Tasks\Controllers\SectionsController::create');

$router->add('GET','/api/tasks', 'SON\Framework\Tasks\Controllers\TasksController::index');
$router->add('POST','/api/tasks', 'SON\Framework\Tasks\Controllers\TasksController::create');

$router->add('GET','/api/subtasks', 'SON\Framework\Tasks\Controllers\SubTasksController::index');
$router->add('POST','/api/subtasks', 'SON\Framework\Tasks\Controllers\SubTasksController::create');
