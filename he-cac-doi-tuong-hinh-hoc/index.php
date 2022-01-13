<?php
include_once "Shape.php";
include_once "Circle.php";
include_once "Cylinder.php";
include_once "Rectangle.php";

$circle = new Circle("Pii", 20);
echo $circle->show() ."<br>";
echo "Dien tich: " .$circle->calculateArea() ."<br>";
echo "Chu vi: " .$circle->calculatePerimeter() ."<br>";

$cylinder = new Cylinder("Pi's Cylinder", 15, 25);
echo $cylinder->show() ."<br>";
echo "Dien tich: " .$cylinder->calculateArea() ."<br>";
echo "Chu vi: " .$cylinder->calculatePerimeter() ."<br>";

$rectangle = new Rectangle("Pi's friend", 20, 15);
echo $rectangle->show() ."<br>";
echo "Dien tich: " .$rectangle->calculateArea() ."<br>";
echo "Chu vi: " .$rectangle->calculatePerimeter() ."<br>";