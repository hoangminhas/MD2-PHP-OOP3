<?php

class Cylinder extends Circle
{
    public int $height;

    public function __construct(string $name, int $radius, int $height)
    {
        parent::__construct($name, $radius);
        $this->height = $height;
    }

    public function calculateArea(): int
    {
        return parent::calculateArea() * 2 + parent::calculatePerimeter() * $this->height;
    }

    public function calculateVolume(): int
    {
        return parent::calculateArea() * $this->height;
    }
}