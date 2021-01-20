<?php

$container['projects_model'] = function ($c) {
    $id = $c['loggedUser']['user']->id;
    $projects = new SON\Framework\Tasks\Models\Projects($c);
    $projects->user_id = $id;

    return $projects;
};

$container['tasks_model'] = function ($c) {
    return new SON\Framework\Tasks\Models\Tasks($c);
};

$container['sections_model'] = function ($c) {
    return new SON\Framework\Tasks\Models\Sections($c);
};

$container['subtasks_model'] = function ($c) {
    return new SON\Framework\Tasks\Models\SubTasks($c);
};
