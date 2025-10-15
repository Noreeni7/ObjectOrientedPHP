<?php

// Define a class (blueprint) for a car
class Car
{
    // Properties that each car object will have
    private $brand;  
    private $color;
    public $vehicleType = "car";
    // we also have public and protected

    // 🔹 Constructor method
    // $this runs automatically when a new Car object is created
    // It sets the brand and color for that specific car
    public function __construct($brand, $color = "none")
    {
        // '$this' refers to the current object being created
        // store the given brand in the car's property
        $this->brand = $brand; 

        // store the given color in the car's property
        $this->color = $color;
    }

    // A getter is a reader → it gets the value.
    // A setter is a writer → it sets (changes) the value.
    public function getBrand() {
        return $this->brand;
    }

    public function setBrand ($brand) {
        return $this->$brand;
    }

    public function getColor () {
        return $this->color;
    }

    public function setColor ($color) {
        $allowedColors = [
            "red",
            "yellow",
            "black"
        ];
        if (in_array($color, $allowedColors)) {
            $this->$color;
        }

    }

    // 🔹 Method (a function that belongs to the class)
    // $this method returns information about the ca
    public function getCarInfo () {
        return "Brand: " . $this->brand . "Color: " . $this->color;
    }
}

// 🔹 Create (instantiate) a new Car object
// $this calls the constructor and sets the brand to "BMW" and color to "black"
$car01 = new Car("BMW", "black");

// 🔹 Display the car's information using the getCarInfo() method
echo $car01->getCarInfo();
echo "<br>";
echo $car01->vehicleType;

