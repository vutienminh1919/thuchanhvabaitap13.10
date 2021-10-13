<?php

class Triangle extends Shape1
{
    protected float $side1 ;
    protected float $side2 ;
    protected float $side3 ;

    public function __construct($name, $color, $side1, $side2, $side3)
    {
        parent::__construct($name, $color);
        $this->side1 = $side1;
        $this->side2 = $side2;
        $this->side3 = $side3;
    }

    /**
     * @return float
     */
    public function getSide1(): float
    {
        return $this->side1;
    }

    /**
     * @param float $side1
     */
    public function setSide1(float $side1): void
    {
        $this->side1 = $side1;
    }

    /**
     * @return float
     */
    public function getSide2(): float
    {
        return $this->side2;
    }

    /**
     * @param float $side2
     */
    public function setSide2(float $side2): void
    {
        $this->side2 = $side2;
    }

    /**
     * @return float
     */
    public function getSide3(): float
    {
        return $this->side3;
    }

    /**
     * @param float $side3
     */
    public function setSide3(float $side3): void
    {
        $this->side3 = $side3;
    }

    public function checkTriangle()
    {
        if (($this->side1 + $this->side2) > $this->side3 && ($this->side1 + $this->side3) > $this->side2 && ($this->side2 + $this->side1) > $this->side1) {
            echo (" day la 1 tam giac");
        } else {
            die("day khong phai la 1 tam giac");
        }
    }

    public function getPerimeter()
    {
        return $this->side1 + $this->side2 + $this->side3;
    }

    public function getHalfP()
    {
        return $this->getPerimeter() / 2;
    }

    public function getArea()
    {
        $this->checkTriangle();
        return sqrt($this->getHalfP() * ($this->getHalfP() - $this->side1) * ($this->getHalfP() - $this->side2) * ($this->getHalfP() - $this->side3));
    }


    public function toString()
    {
        return "name and color: " . parent::show() . "<br>" . "canh thu nhat: " . $this->side1 . "<br>" . "canh thu hai " . $this->side2 . "<br>" . "canh thu ba: " . $this->side3 . "<br>" . " chu vi: " . $this->getPerimeter() . "<br> " . " dien tich: " . $this->getArea();
    }


}