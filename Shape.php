<?php
class Shape
{
    public $name;
    function __construct($name)
    {
        return $this->name = $name;
    }
    public function sho(){
        return "I am a shape. My name is $this->name";
    }
}