<?php

include_once 'Circle.php';
include_once 'Rectangle.php';
include_once 'Square.php';

$circle = new Circle('circle',10);
$circle->resizeTo(2);
echo $circle->show() . '. Area is: ' . $circle->calculateArea() . '. Perimeter is: ' . $circle->calculatePerimeter();
echo '<br>';

$rectangle = new Rectangle('ractangle',10,5);
$rectangle->resizeTo(2);
echo $rectangle->show() . '. Area is: ' . $rectangle->calculateArea() . '. Perimeter is: ' . $rectangle->calculatePerimeter();
echo '<br>';

$square = new Square('square',10);
$square->resizeTo(2);
echo $square->show() . '. Area is: ' . $square->calculateArea() . '. Perimeter is: ' . $square->calculatePerimeter();