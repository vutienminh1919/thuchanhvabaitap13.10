<?php

class Circle1
{
    public string $name;
    protected float $radius;
    protected string $color;


    public function __construct($name, $radius, $color)
    {
        $this->name = $name;
        $this->radius = $radius;
        $this->color = $color;
    }

    public function getRadius(): float
    {
        return $this->radius;
    }

    public function setRadius(float $radius): void
    {
        $this->radius = $radius;
    }

    public function area()
    {
        return number_format(pi() * $this->radius * $this->radius,2) ;
    }

    public function __toString(): string
    {
        $str =  "name: " . $this->name . "<br>" . "radius: " . $this->radius . "<br>" . "color:" . $this->color . "<br>" . "area: " . $this->area();
    return $str;
    }

}