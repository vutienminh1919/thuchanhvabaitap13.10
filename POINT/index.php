<?php
include_once "Point2D.php";
include_once "Point3D.php";
$point2d = new Point2D(1, 2);
$point2d->setXY(3, 4);
echo("2D: " . $point2d->toString());
echo "<br>";
$point3d = new Point3D(1, 2, 3);
$point3d->setXYZ(5, 6, 7);
echo("3D: " . $point3d->toString());
