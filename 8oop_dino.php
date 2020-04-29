<?php

class Dinosaurus
{
    public $name;
    public $type;
    public $wеight;

    public function __construct($name, $type,$wеight)
    {
        $this->name=$name;
        $this->type=$type;
        $this->wеight=$wеight;
    }

    public function whoYou() {
        echo "Hi, my name is $this->name, i am a $this->type, my weight is $this->wеight ! ";
    }
}

$dinosaurus1=new Dinosaurus('rex','hunter','1000');
$dinosaurus1->whoYou();



class InstructionObject
{
    public $properties1;
    public $properties2;
    public $properties3;

    public function __construct($properties1, $properties2, $properties3) {
        $this->properties1=$properties1;
        $this->properties2=$properties2;
        $this->properties3=$properties3;
    }

    public function someFunction() {
        echo "text $this->properties1 text $this->properties2 text $this->properties3";
    }
}

$object1=new InstructionObject('properties1', 'properties2', 'properties3');
$object1->someFunction();

