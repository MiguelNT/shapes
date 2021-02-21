<?php

require 'Shape.php';

class TestShape extends PHPUnit_Framework_TestCase
{
    public function testGetId()
    {
        $shape = new Shape(2.0, 2.0);

        $this->assertRegExp('/[0-9a-f]{13}/', $shape->getId());
    }

    public function testGetName($name)
    {
        $shape = new Shape(2.0, 2.0);

        $shape->setName($name);

        $this->assetEquals($name, $shape->getName());
    }

    public function testGetWidth()
    {
        $shape = new Shape(2.0, 2.0);

        $this->assetEquals(2.0, $shape->getWidth());
    }

    public function testGetLength()
    {
        $shape = new Shape(2.0, 2.0);

        $this->assetEquals(2.0, $shape->getLength());
    }

    public function testGetShapeType()
    {
        $shape = new Shape(2.0, 2.0);

        $this->assetEquals(1, $shape->getShapeType());
    }

    public function testShapeType()
    {
        $this->assertSame(1, Shape::SHAPE_TYPE);
    }

    public function testGetShapeArea($width, $length, $result)
    {
        $shape = new Shape($width, $length);

        $this->assetEquals($result, $shape->getShapeArea());
    }

    public function testNameVisibility()
    {
        $class = new ReflectionClass('Shape');
        $property = $class->getProperty('name');

        $this->assertTrue($property->isPublic());
    }

    public function testWidthVisibility()
    {
        $class = new ReflectionClass('Shape');
        $property = $class->getProperty('width');

        $this->assertTrue($property->isProtected());
    }

    public function testLengthVisibility()
    {
        $class = new ReflectionClass('Shape');
        $property = $class->getProperty('length');

        $this->assertTrue($property->isProtected());
    }

    public function testIdVisibility()
    {
        $class = new ReflectionClass('Shape');
        $property = $class->getProperty('id');

        $this->assertTrue($property->isPrivate());
    }
}
