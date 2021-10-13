<?php

class Rectangle extends Shape
{
    public int $width;
    public int $height;
    public function __construct($name,$width,$height)
    {
        parent::__construct($name);
        $this->width = $width;
        $this->height = $height;
    }

    public function area()
    {
        return $this->height*$this->width;
    }

    public function perimeter()
    {
     return ($this->width+$this->height)*2;
    }

}
