<?php

class Circle
{
    public int $radius;
    public string $color;

    public function __construct(int $radius, string $color)
    {
        $this->radius = $radius;
        $this->color = $color;
    }

    /**
     * @return int
     */
    public function getRadius(): int
    {
        return $this->radius;
    }

    /**
     * @param int $radius
     */
    public function setRadius(int $radius): void
    {
        $this->radius = $radius;
    }

    /**
     * @return string
     */
    public function getColor(): string
    {
        return $this->color;
    }

    /**
     * @param string $color
     */
    public function setColor(string $color): void
    {
        $this->color = $color;
    }

    public function getArea(){
        return pi()*pow($this->radius, 2);
    }

    public function __toString()
    {
        return "Radius: " .$this->radius. "<br>" . "Color: " .$this->color ."<br>";
    }

}