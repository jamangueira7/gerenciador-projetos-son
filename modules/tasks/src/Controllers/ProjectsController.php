<?php

namespace SON\Framework\Tasks\Controllers;

use SON\Framework\Controller;

class ProjectsController extends Controller
{
    protected function getModel(): string
    {
        return 'projects_model';
    }
}
