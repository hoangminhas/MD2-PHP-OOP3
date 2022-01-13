<?php
include_once "Point2D.php";
include_once "Point3D.php";

$point2d = new Point2D(5, 3);
echo $point2d->getX() ." ".$point2d->getY();
$point2d->setXY(6, 9);
var_dump($point2d->getXY());

$point3d = new Point3D(1, 2, 3);
echo "<pre>";
echo $point3d->__toString();
$point3d->setZ(10);
echo $point3d->getZ();
$point3d->setXYZ(9,7,3);
echo "<br>";
print_r($point3d->getXYZ());
print $point2d;
echo $point3d;