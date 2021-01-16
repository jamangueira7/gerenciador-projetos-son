<?php

namespace SON\Framework\Tasks\Controllers;

use SON\Framework\Controller;

class SubTasksController extends Controller
{
    protected function getModel(): string
    {
        return 'subtasks_model';
    }
}
