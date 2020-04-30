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
        echo "<br>Hi, my name is $this->name, i am a $this->type, my weight is $this->weight !";
    }
}

class Rex extends Dinosaurus
{
    public $speed;

    public function __construct($name, $type, $weight,$speed)
    {
        $this->speed=$speed;
        parent::__construct($name, $type, $weight);
    }

    public function whoYou() {
        echo "<br>Hi, my name is $this->name, i am a $this->type, my weight is $this->weight, i run with speed $this->speed !";
    }
}

class Diplodoc extends Dinosaurus
{
    public $eat;

    public function __construct($name, $type, $weight, $eat)
    {
        $this->eat=$eat;
        parent::__construct($name, $type, $weight);
    }

    public function whoYou() {
        echo "<br>Hi, my name is $this->name, i am a $this->type, my weight is $this->weight, i love eat $this->eat!";
    }
}

$dinosaurus1=new Dinosaurus('dino','noname','1000');
$dinosaurus1->whoYou();

$Rex=new Rex('Rex','хищник','500','100');
$Rex->whoYou();

$Diplodoc=new Diplodoc('Diplodoc', 'травоядный', '1000','shit');
$Diplodoc->whoYou();



