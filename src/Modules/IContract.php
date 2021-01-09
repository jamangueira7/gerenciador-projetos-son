<?php

namespace SON\Framework\Modules;

interface IContract
{
    public function getNamespace() :array;
    public function getContainerConfig() :string;
    public function getEventConfig() :string;
    public function getMiddlewareConfig() :string;
    public function getRouterConfig() :string;
}
