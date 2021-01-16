<?php

namespace SON\Framework\Tasks\Controllers;

use SON\Framework\Controller;

class SectionsController extends Controller
{
    protected function getModel(): string
    {
        return 'sections_model';
    }

    public function listByProject($c, $request)
    {
        $id = $request->query->get('id');

        return $c['sections_model']->all(['project_id' => $id]);
    }
}
