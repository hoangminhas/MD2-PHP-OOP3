<?php

class Triangle extends Shape
{
    private float $side1;
    private float $side2;
    private float $side3;

    /**
     * @param float $side1
     * @param float $side2
     * @param float $side3
     */
    public function __construct(string $name, float $side1=1.0, float $side2=1.0, float $side3=1.0)
    {
        parent::__constructor($name);
        $this->side1 = $side1;
        $this->side2 = $side2;
        $this->side3 = $side3;
    }

    public function __toString()
    {
        return "Day la tam giac";   // TODO: Implement __toString() method.
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

    public function getArea(): float
    {
        return "Dien tich tam giac"
    }


}