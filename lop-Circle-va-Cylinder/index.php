<?php
include_once "Circle.php";
include_once "Cylinder.php";

$circle = new Circle(10, 'red');
echo $circle->getArea();
echo "<br>";
echo $circle->__toString();

$cylinder = new Cylinder(12, 'yellow', 9);
echo $cylinder->getArea() . "<br>";
echo $cylinder->getCapacity();
echo "<br>";
echo $cylinder->__toString();
