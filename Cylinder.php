<?php


class Cylinder extends Circle
{
    public $height;
    public function __construct($name, $radius, $color, $height)
    {
        parent::__construct($name, $radius, $color);
        $this->height = $height;
    }

    public function calculateArea(){
        return parent::calculateArea() *2 + parent::calculatePerimeter()*$this->height;
    }
    public function calculateVolume(){
        return parent::calculateArea() * $this->height;
    }
    public function toString()
    {
        return "Name: " . $this->name . " Radius: " . $this->radius . " Color: " . $this->color ." Height: ".$this->height.
            " Area: " . $this->calculateArea() . " Perimeter: " . $this->calculatePerimeter();
    }
}