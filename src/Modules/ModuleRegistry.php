<?php

namespace SON\Framework\Modules;

use SON\Framework\App;

class ModuleRegistry
{
    private $app;
    private $composer;
    private $modules = [];

    public function setApp(App $app)
    {
        $this->app = $app;
    }

    public function setComposer(App $composer)
    {
        $this->composer = $composer;
    }

    public function add(IContract $module)
    {
        $this->modules[] = $module;
    }

    public function run()
    {
        foreach ($this->modules as $module) {

        }
    }
}
