<?php

namespace SON\Framework\Tasks\Controllers;

use SON\Framework\Controller;

class TasksController extends Controller
{
    protected function getModel(): string
    {
        return 'tasks_model';
    }

    public function listByProject($c, $request)
    {
        $id = $request->query->get('id');

        return $c['tasks_model']->getByProjectID($id);
    }
}
