<?php

namespace SON\Framework;

use App\Models\Users;

abstract class Controller
{
    abstract protected function getModel() : string;

    public function index($container, $request)
    {
        return $container[$this->getModel()]->all();
    }

    public function create($container, $request)
    {
        return $container[$this->getModel()]->create($request->request->all());
    }

    public function show($container, $request)
    {
        $conditions = ['id' => $request->attributes->get(1)];
        return $container[$this->getModel()]->get($conditions);
    }


    public function update($container, $request)
    {
        $conditions = ['id' => $request->attributes->get(1)];
        return $container[$this->getModel()]->update($conditions, $request->request->all());
    }

    public function delete($container, $request)
    {
        $conditions = ['id' => $request->attributes->get(1)];
        return $container[$this->getModel()]->delete($conditions);
    }
}
