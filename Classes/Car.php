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
    // This runs automatically when a new Car object is created
    // It sets the brand and color for that specific car
    public function __construct($brand, $color = "none")
    {
        // 'this' refers to the current object being created
        // store the given brand in the car's property
        $this->brand = $brand; 

        // store the given color in the car's property
        $this->color = $color;
    }

    // 🔹 Method (a function that belongs to the class)
    // This method returns information about the ca
    public function getCarInfo () {
        return "Brand: " . $this->brand . "Color: " . $this->color;
    }
}

// 🔹 Create (instantiate) a new Car object
// This calls the constructor and sets the brand to "BMW" and color to "black"
$car01 = new Car("BMW", "black");

// 🔹 Display the car's information using the getCarInfo() method
echo $car01->getCarInfo();
echo "<br>";
echo $car01->vehicleType;

