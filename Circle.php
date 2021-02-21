<?php

require_once "Shapes.php";

class Circle extends Shape
{
    /**
     * radius
     * @var float
     */
    protected $radius;

    const SHAPE_TYPE = 3;

    public function __construct(float $radius, float $width, float $length)
    {
        $this->radius = $radius;
        parent::__construct($width, $length);
    }

    /**
     * get Circle area
     * @return float Circle area result
     */
    public function getShapeArea(): float
    {
        return (pi() * ($this->radius * $this->radius));
    }

    /**
     * get Circle properties
     * @return object properties of a Circle shape object
     */
    public function getShapeProperties(): object
    {
        $properties = new stdObject();
        $properties["name"] = $this->name;
        $properties["width"] = $this->width;
        $properties["length"] = $this->length;
        $properties["radius"] = $this->radius;
        $properties["id"] = $this->id;

        return $properties;
    }
}
