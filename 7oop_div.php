<?php

class InstructionDiv {
    public $title = 'New title';
    public $titleFontSize = 20;
    public $divBody = 'Text text text';
    public $divBodyFontSize = 15;
    public $border ='1px solid black';
    public $bg;

    public function __construct($title, $divBody, $border='2px solid red', $bg='gray', $titleFontSize=20, $divBodyFontSize=14)
    {
        $this->title =$title;
        $this->titleFontSize =$titleFontSize;
        $this->divBody =$divBody;
        $this->divBodyFontSize =$divBodyFontSize;
        $this->border =$border;
        $this->bg =$bg;
    }
    public function printObject() {
        echo "<div style='border: {$this->border}; background: {$this->bg}; font-size: {$this->divBodyFontSize}px'>
        <h2 style='font-size: {$this->titleFontSize}'>{$this->title}</h2>
        <span>{$this->divBody}</span>
        </div>";
    }
}

$div1 = new InstructionDiv('hi', 'gblfhfc');
$div1 -> printObject();
