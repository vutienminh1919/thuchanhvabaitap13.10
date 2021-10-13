<?php
include_once "Circle1.php";
include_once "Cylinder1.php";

$circle1 = new Circle1(circle,4,"blue");
echo ($circle1->__toString());
echo "<br>";

$cylinder1 = new Cylinder1(cylinder,10,"red",10);
echo ($cylinder1->__toString());
