<?php

class Car
{
    public $engine;

    public function __construct($newEngine)
    {
        $this->engine=$newEngine;
    }

    public function engineOn ()
    {
        $this->engine->on();
    }

    public function engineOff ()
    {
        $this->engine->off();
    }
}

class Engine
{
    public function on ()
    {
        echo 'on';
    }

    public function off ()
    {
        echo 'off';
    }
}

$engine1=new Engine;
$car1=new Car($engine1);

$car1->engineOn();
$car1->engineOff();