<?php

class Cylinder1 extends Circle1
{
    public int $height;

    public function __construct($name, $radius, $color, $height)
    {
        parent::__construct($name, $radius, $color);
        $this->height = $height;
    }

    public function getHeight(): int
    {
        return $this->height;
    }

    public function setHeight($height): void
    {
        $this->height = $height;
    }

    public function volume()
    {
        return parent::area() * $this->height;
    }

//    public function toString(): string
//    {
//        return "name: " . $this->name . "<br>" . "radius: " . $this->radius . "<br>" . "color:" . $this->color . "<br>" . "height: " . $this->height . "<br>" . "volume: " . $this->volume();
//
//    }
    public function __toString(): string
    {
        $str = "name: " . $this->name . "<br>" . "radius: " . $this->radius . "<br>" . "color:" . $this->color . "<br>" . "height: " . $this->height . "<br>" . "volume: " . $this->volume();
        return $str;
    }


}