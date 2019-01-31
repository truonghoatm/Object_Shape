<?php
include_once ('Shape.php');
class Rectangle extends Shape
{
public $height;
public $width;
function __construct($name,$height,$width)
{
    parent::__construct($name);
    $this->height=$height;
    $this->width = $width;
}
public function calculatorArea(){
    return $this->width * $this->height;
}
public function calculatorPerimeter(){
    return 2*($this->height+$this->width);
}
}