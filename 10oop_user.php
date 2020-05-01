<?php

class User1
{
    public $name;
    public $surname;
    public $age;

    public function __construct($name,$surname,$age)
    {
        $this->name=$name;
        $this->surname=$surname;
        $this->age=$age;
    }

    public function printInfo()
    {
        echo "$this->name $this->surname $this->age <br>";
    }
}

class UserGood extends User1
{
    public $goodPost;

    public function __construct($name, $surname, $age, $goodPost)
    {
        $this->goodPost=$goodPost;
        parent::__construct($name, $surname, $age);
    }

    public function printInfo()
    {
        echo "$this->name $this->surname $this->age $this->goodPost<br>";
    }
}

class UserBad extends User1
{
    public $shitPost;

    public function __construct($name, $surname, $age, $shitPost)
    {
        $this->shitPost=$shitPost;
        parent::__construct($name, $surname, $age);
    }

    public function printInfo()
    {
        echo "$this->name $this->surname $this->age $this->shitPost<br>";
    }
}

$user1=new User1('Igor','Popov','22');
$user1->printInfo();

$user2=new UserGood('Egor','Vandalov','43','12');
$user2->printInfo();

$user3=new UserBad('Grigory','Rasputin','12','25');
$user3->printInfo();