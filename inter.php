<?php
interface Shape  {
    public function area();
}

class Circle implements Shape {
private $width;
private $height;

public function __construct($width, $height) {
    $this->width = $width;
    $this->height = $height;
}
public function area()
{
     return $this->width * $this->height;

}
}

class Rectangle implements Shape {
    private $radius;
    public function __construct($radius)
    {
        $this->radius = $radius;
    }

    public function area(){
        return pi()*
        pow($this->radius,2);
    }
}

$circle = new Circle(5, 10);

$rectangle = new Rectangle(4);

echo "Circle area: " . $circle->area() . "<br>";

echo "Rectangle area: " . $rectangle->area() . "<br>";

