<?php
include_once ('circle.php');
include_once ('cylinder.php');
include_once ('Rectangle.php');
include_once ('square.php');
$circle = new Circle("circle1",5);
echo "Circle Area is:"." ". $circle->calculatorArea()."<br/>";
echo "Circle Perimeter is:". " ". $circle->calculatorPerimeter()."<br/>";

$cylinder = new Cylinder("cylinder1",5,10);
echo "Cylinder Area is:"." ". $cylinder->calculatorArea()."<br/>";
echo "Cylinder Volume is:"." ".$cylinder->calculatorVolume()."<br/>";

$rectangle = new Rectangle("rectangle1",5,10);
echo "Rectangle Area is:". " ". $rectangle->calculatorArea()."<br/>";
echo "Rectangle Perimeter:"." ". $rectangle->calculatorPerimeter()."<br/>";

$square = new Square("square",10);
echo "Square Area is:"." ". $square->calculatorPerimeter()."<br/>";
echo "Square Area is:"." ". $square->calculatorArea();