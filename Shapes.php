<?php

class Shape
{
    /**
     * id
     * @var string
     */
    protected $id;

    /**
     * name
     * @var string
     */
    public $name;

    /**
     * width
     * @var float
     */
    protected $width;

    /**
     * length
     * @var float
     */
    protected $length;

    const SHAPE_TYPE = 1;

    function __construct(float $width, float $length)
    {
        $this->width = $width;
        $this->length = $length;
        $this->id = uniqid('', true);
    }

    /**
     * Set Shape name
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * Get the shape name
     * @return string Shape name
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Get the shape Id
     * @return string Shape Id
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * Get the shape Width
     * @return float Shape Width
     */
    public function getWidth(): float
    {
        return $this->width;
    }

    /**
     * Get the shape Length
     * @return float Shape Length
     */
    public function getLength(): float
    {
        return $this->length;
    }

    /**
     * Get the shape object area
     * @return float area shape object area
     */
    public function getShapeArea(): float
    {
        return ($this->width * $this->length);
    }

    /**
     * Get all properties of a shape object.
     * @return object properties of a shape object
     */
    public function getShapeProperties(): object
    {
        $properties = new stdObject();
        $properties["name"] = $this->name;
        $properties["width"] = $this->width;
        $properties["length"] = $this->length;
        $properties["id"] = $this->id;
        return $properties;
    }

    /**
     * Get the SHAPE_TYPE value of a shape object.
     * @return int SHAPE_TYPE
     */
    public static function getShapeType(): int
    {
        return SHAPE_TYPE;
    }
}
