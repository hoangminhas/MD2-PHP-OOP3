<?php

class Point2D
{
    protected float $x;
    protected float $y;
    private array $xy;

    public function __construct(float $x, float $y)
    {
        $this->x = $x;
        $this->y = $y;
    }

    public function __toString()
    {
        return "This is Point2D"; // TODO: Implement __toString() method.
    }

    /**
     * @return float
     */
    public function getX(): float
    {
        return $this->x;
    }

    /**
     * @param float $x
     */
    public function setX(float $x): void
    {
        $this->x = $x;
    }

    /**
     * @return float
     */
    public function getY(): float
    {
        return $this->y;
    }

    /**
     * @param float $y
     */
    public function setY(float $y): void
    {
        $this->y = $y;
    }

    public function setXY(float $x, float $y)
    {
        $this->xy = array($x,$y);
    }

    public function getXY()
    {
        return $this->xy;
    }


}