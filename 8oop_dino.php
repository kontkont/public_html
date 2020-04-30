<?php

class Dinosaurus
{
    public $name;
    public $type;
    public $weight;

    public function __construct($name, $type,$weight)
    {
        $this->name=$name;
        $this->type=$type;
        $this->weight=$weight;
    }

    public function whoYou() {
        echo "Hi, my name is $this->name, i am a $this->type, my weight is $this->weight !";
    }
}

$dinosaurus1=new Dinosaurus('rex','hunter','1000');
$dinosaurus1->whoYou();



