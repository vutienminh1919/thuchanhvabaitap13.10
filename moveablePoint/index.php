<?php
include_once "Point.php";
include_once "MoveablePoint.php";

$moveablepoint = new MoveablePoint(2,3,5,6);
echo $moveablepoint->toString();
