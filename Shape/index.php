<?php
include_once "Shape.php";
include_once "Circle.php";
include_once "Cylinder.php";
include_once "Rectangle.php";
include_once "Square.php";

$circle = new Circle(minh,3);
echo $circle->name."<br>";
echo ($circle->area()."<br>");
echo ($circle->perimeter()."<br>");

$cylinder = new Cylinder(minh,3,10);
echo $cylinder->name."<br>";
echo ($cylinder->area()."<br>");
echo ($cylinder->perimeter()."<br>");

$rectangle = new Rectangle(minh,5,6);
echo $rectangle->name."<br>";
echo ($rectangle->area()."<br>");
echo ($rectangle->perimeter()."<br>");

$square = new Square(minh,5);
echo $square->name."<br>";
echo ($square->area()."<br>");
echo ($square->perimeter()."<br>");

