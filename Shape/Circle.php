<?php

class Circle extends Shape
{
    public float $radius;

    public function __construct($name, $radius)
    {
        parent::__construct($name);
        $this->radius = $radius;
    }

    public function area()
    {
        return pi() * pow($this->radius * 2, 2);
    }

    public function perimeter()
    {
        return pi() * $this->radius * 2;
    }

}