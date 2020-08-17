<?php

include_once ('Rectangle.php');
include_once 'Resizeable.php';
class Square extends Rectangle implements Resizeable
{
    public function __construct($name, $width)
    {
        parent::__construct($name, $width, $width);
    }

    public function calculateArea(){
        return pow($this->width,2);
    }

    public function calculatePerimeter(){
        return $this->width * 4;
    }

    public function resizeTo($number)
    {
        $this->width += $number;
    }
}