<?php

require_once 'Bicycle.php';
require_once 'car.php'; 
require_once 'truck2.php';

// Bicycle code
$bike = new Bicycle("blue", 1);
var_dump($bike);

echo $bike->forward();
echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';
echo $bike->brake();
echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';
echo $bike->brake();

//Car code
$car = new Car ("red", 5, "electric");
echo $car->forward();
var_dump($car);

echo $car->forward();
echo '<br> Vitesse de la voiture : ' . $car->getCurrentSpeed() . ' km/h' . '<br>';
echo $car->brake();
echo '<br> Vitesse de la voiture : ' . $car->getCurrentSpeed() . ' km/h' . '<br>';
echo $car->brake();

//Truck code
$truck2 = new Truck2 ("green", 3, "fuel", 20);
var_dump($truck2);

echo '<br> Capacité de chargement : ' . $truck2->getStorageCapacity() . ' tonnes' . '<br>';
echo $truck2->isItFull() . '<br>'; 
echo 'Chargement : ' . $truck2->getShipping() . ' tonnes' . '<br>';

echo '<br>' . $truck2->forward();
echo '<br> Vitesse du camion : ' . $truck2->getCurrentSpeed() . ' km/h' . '<br>';
echo $truck2->brake();
echo '<br> Vitesse du camion : ' . $truck2->getCurrentSpeed() . ' km/h' . '<br>';
echo $truck2->brake();





