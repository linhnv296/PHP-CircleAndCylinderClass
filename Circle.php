<?php


class Circle
{
    public $name;
    public $radius;
    public $color;

    public function __construct($name, $radius, $color)
    {
        $this->name = $name;
        $this->radius = $radius;
        $this->color = $color;
    }

    /**
     * @param mixed $color
     */
    public function setColor($color)
    {
        $this->color = $color;
    }

    /**
     * @return mixed
     */
    public function getColor()
    {
        return $this->color;
    }

    /**
     * @param mixed $radius
     */
    public function setRadius($radius)
    {
        $this->radius = $radius;
    }

    /**
     * @return mixed
     */
    public function getRadius()
    {
        return $this->radius;
    }

    public function calculateArea()
    {
        return pi() * pow($this->radius, 2);
    }

    function calculatePerimeter()
    {
        return pi() * $this->radius * 2;
    }

    public function toString()
    {
        return "Name: " . $this->name . " Radius: " . $this->radius . " Color: " . $this->color .
            " Area: " . $this->calculateArea() . " Perimeter: " . $this->calculatePerimeter();
    }
}