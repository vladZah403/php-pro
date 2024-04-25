<?php

require ('BaseEntity.php');
require ('CarOwner.php');
require ('Car.php');
require ('Part.php');
require ('ServiceOrder.php');

$car = new Car("Car1", "Toyota", "Camry", 2015, "VIN1234567890");
$owner = new CarOwner("John Doe", "+380984257118", 'deh4353@gmail.com', $car);
$part = new Part("Oil", 30, true);
$serviceOrder = new ServiceOrder("Order1", $car, "Oil change", $part);


echo $car->getDescription() . "\n";
echo $owner->getDescription() . "\n";
echo $serviceOrder->getDescription() . "\n";

