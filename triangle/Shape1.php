<?php

class Shape1
{
    public string $name;
    public string $color;

    public function __construct($name,$color)
    {
        $this->name = $name;
        $this->color = $color;
    }

    public function show(): string
    {
        return " My name is ". $this->name." and my color is ".$this->color;
    }

}