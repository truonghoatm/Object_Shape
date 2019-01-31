<?php
include_once('circle.php');

class Cylinder extends Circle
{
    public $height;

    function __construct($name, $radius, $height)
    {
        parent::__construct($name, $radius);
        $this->height = $height;
    }

    public function calculatorArea()
    {
        return parent::calculatorArea() * 2 + parent::calculatorPerimeter() * $this->height;
    }

    public function calculatorVolume()
    {
        return parent::calculatorArea() * $this->height;
    }
}