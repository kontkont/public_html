<?php

interface iProduct
{
    public function printCost();

    public function printCostNds();

    public function printBr();
}

class Product implements iProduct
{
    protected $name;
    protected $cost;
    protected $ves;
    protected $nds;

    public function __construct(string $name, int $cost, int $ves, int $nds=25)
    {
        $this->name=$name;
        $this->cost=$cost;
        $this->ves=$ves;
        $this->nds=$nds;
    }

    public function printCost()
    {
        echo "$this->name <p>Цена</p> $this->cost ";
    }

    public function printCostNds()
    {
        $costNds=$this->cost-$this->nds;
        echo "$this->name <p>Цена без ндс</p> $costNds ";
    }

    public function printBr()
    {
        echo "<br><br><br>";
    }
}

$product1=new Product('bread','50', '0.25' );
$product1->printCost();
$product1->printBr();
$product1->printCostNds();
$product1->printBr();

$product2=new Product('beer','70', '0.5');
$product2->printCost();
$product2->printBr();
$product2->printCostNds();
$product2->printBr();

$product3=new Product('arbuz','200', '10');
$product3->printCost();
$product3->printBr();
$product3->printCostNds();
$product3->printBr();

abstract class Product1
{
    protected $name;
    protected $cost;
    protected $ves;
    protected $nds;

    public static $objectNumber = 'Company number ';
    public static $counter = 0;

    public function __construct(string $name, int $cost, int $ves, int $nds=25, $objectNumber = 'Company number ')
    {
        $this->name=$name;
        $this->cost=$cost;
        $this->ves=$ves;
        $this->nds=$nds;

        $this->objectNumber=$objectNumber;

        echo (self::$objectNumber);
        echo ( ++self::$counter );
    }

    public abstract function printCost();

    public abstract function printBrBr();

    const YEAR_START=1984;
}

class Snikers extends Product1
{
    protected $fantik;

    public function __construct(string $name, int $cost, int $ves, string $fantik, int $nds = 25)
    {
        $this->fantik = $fantik;
        parent::__construct($name, $cost, $ves, $nds);
    }

    public function printCost()
    {
        echo "$this->name <p>Цена</p> $this->cost ";
    }

    public function printBrBr()
    {
        echo "<br><br>";
    }

    const YEAR_START=1985;

    public static function showCompanyInfo()
    {
        echo "SNIKERS ";
    }
}

class Cola extends Product1
{
    protected $tara;

    public function __construct(string $name, int $cost, int $ves, string $tara, int $nds = 25)
    {
        $this->tara=$tara;
        parent::__construct($name, $cost, $ves, $nds);
    }

    public function printCost()
    {
        echo "$this->name <p>Цена</p> $this->cost ";
    }

    public function printBrBr()
    {
        echo "<br><br>";
    }

    const YEAR_START=1986;

    public static function showCompanyInfo()
    {
        echo "COLA ";
    }
}

echo Snikers::showCompanyInfo() . Snikers::YEAR_START . "<br>";
$snikers1=new Snikers('snikers','45','0.1','big fantic');
$snikers1->printBrBr();
$snikers1->printCost();
$snikers1->printBrBr();

$snikers2=new Snikers('snikers smoll','15','0.05','smoll fantic');
$snikers2->printBrBr();
$snikers2->printCost();
$snikers2->printBrBr();

echo Cola::showCompanyInfo() . Cola::YEAR_START . "<br>";
$cola1=new Cola('cola', '55', '0.5','big banka' );
$cola1->printBrBr();
$cola1->printCost();
$cola1->printBrBr();

$cola2=new Cola('pepsi ', '25', '0.25','smoll banka' );
$cola2->printBrBr();
$cola2->printCost();
$cola2->printBrBr();

echo "Счетчик объектов класса Product1 - " . Product1::$counter;