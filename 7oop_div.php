<?php

class InstructionDiv {
    public $title = 'New title';
    public $titleFontSize = 20;
    public $divBody = 'Text text text';
    public $divBodyFontSize = 15;
    public $border ='1px solid black';
    public $bg;

    public function __construct( $title,
                                 $divBody,
                                 $border='2px solid red',
                                 $bg='gray',
                                 $titleFontSize=20,
                                 $divBodyFontSize=14)
    {
        $this->title =$title;
        $this->titleFontSize =$titleFontSize;
        $this->divBody =$divBody;
        $this->divBodyFontSize =$divBodyFontSize;
        $this->border =$border;
        $this->bg =$bg;
    }
    public function printDiv() {
        echo "<div style='border: {$this->border}; background: {$this->bg}; font-size: {$this->divBodyFontSize}px'>
        <h2 style='font-size: {$this->titleFontSize}'>{$this->title}</h2>
        <span>{$this->divBody}</span>
        </div><br>";
    }
}

class InstructionDivImage extends InstructionDiv
{
    public $image;

    public function __construct($title, $divBody, $border = '2px solid red', $bg = 'gray',$image, $titleFontSize = 20, $divBodyFontSize = 14)
    {
        $this->image=$image;
        parent::__construct($title, $divBody, $border, $bg, $titleFontSize, $divBodyFontSize);
    }
    public function printDiv() {
        echo "<div style='border: {$this->border}; background: {$this->bg}; font-size: {$this->divBodyFontSize}px'>
        <h2 style='font-size: {$this->titleFontSize}'>{$this->title}</h2>
        <span>{$this->divBody}</span>
        <img src='{$this->image}' width='100'>
        </div><br>";
    }
}

class InstructionDivText extends InstructionDiv
{
    public $text;

    public function __construct($title, $divBody, $border = '2px solid red', $bg = 'gray',$text, $titleFontSize = 20, $divBodyFontSize = 14)
    {
        $this->text=$text;
        parent::__construct($title, $divBody, $border, $bg, $titleFontSize, $divBodyFontSize);
    }
    public function printDiv() {
        echo "<div style='border: {$this->border}; background: {$this->bg}; font-size: {$this->divBodyFontSize}px'>
        <h2 style='font-size: {$this->titleFontSize}'>{$this->title}</h2>
        <span>{$this->divBody}</span>
        <span>{$this->text}</span>
        </div><br>";
    }
}

class InstructionDivLink extends InstructionDiv
{
    public $link;

    public function __construct($title, $divBody, $border = '2px solid red', $bg = 'gray',$link, $titleFontSize = 20, $divBodyFontSize = 14)
    {
        $this->link=$link;
        parent::__construct($title, $divBody, $border, $bg, $titleFontSize, $divBodyFontSize);
    }
    public function printDiv() {
        echo "<div style='border: {$this->border}; background: {$this->bg}; font-size: {$this->divBodyFontSize}px'>
        <h2 style='font-size: {$this->titleFontSize}'>{$this->title}</h2>
        <span>{$this->divBody}</span>
        <a href='{$this->link}'>Link</a>
        </div><br>";
    }
}

$div1 = new InstructionDiv('Hi','awdajwndwadbawjh','2px solid red','gren');
$div1 -> printDiv();

$div2 = new InstructionDivImage('Hi','awdajwndwadbawjh','2px solid red','gren','images/background.jpg');
$div2 -> printDiv();

$div3 = new InstructionDivText('Hi','awdajwndwadbawjh','2px solid red','gren','ololo');
$div3 -> printDiv();

$div4 = new InstructionDivLink('Hi','awdajwndwadbawjh','2px solid red','gren','http://test1project.pzdk.ru/');
$div4 -> printDiv();