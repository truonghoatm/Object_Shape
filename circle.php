<?php
include_once("Shape.php");

class Circle extends Shape
{
    public $radius;

    function __construct($name, $radius)
    {
        parent::__construct($name);
        return $this->radius = $radius;
    }

    public function calculatorArea()
    {
        return pi() * ($this->radius ** 2);
    }

    public function calculatorPerimeter()
    {
        return pi() * ($this->radius * 2);
    }
}
