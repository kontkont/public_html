<?php

class InstructionObject1
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
        echo "<br> text $this->properties1 text $this->properties2 text $this->properties3";
    }
}

$object1=new InstructionObject1('properties1', 'properties2', 'properties3');
$object1->someFunction();

class InstructionObject2 extends InstructionObject1
{
    public $properties4;

    public function __construct($properties1, $properties2, $properties3, $properties4)
    {
        $this->properties4=$properties4;
        parent::__construct($properties1, $properties2, $properties3);
    }

    public function someFunction() {
        echo "<br> text $this->properties1 text $this->properties2 text $this->properties3 text $this->properties4";
    }
}

$object2=new InstructionObject2('properties1', 'properties2', 'properties3','properties4');
$object2->someFunction();
