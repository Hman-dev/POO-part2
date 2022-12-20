<?php
require_once "Truck.php";

$manTruck = new Truck(500, "blue",8,"Diesel",);

$teslaTruck = new Truck(800, "yellow",7, "electric");

var_dump($manTruck);

var_dump($manTruck->setIsCharged(0));

"<br>".var_dump($teslaTruck)."<br>";

// //  var_dump($audi)."<br><br>";

// Moving $

echo $manTruck->forward().'<br>';
echo '<br> Vitesse du camion : ' . $manTruck-> getCurrentSpeed(). ' km/h' . '<br>';
echo $manTruck->brake();
echo '<br> Vitesse du camion: ' . $manTruck->getCurrentSpeed(). ' km/h' . '<br>';
echo ' le camion est-il chargé ? :  Il est <strong>' . $manTruck->setIsCharged(500). '</strong><br>';
echo $manTruck->brake().'<br><br><br>';



echo $teslaTruck->forward().'<br>';
echo '<br> Vitesse du camion : ' . $teslaTruck-> getCurrentSpeed(). ' km/h' . '<br>';
echo $teslaTruck->brake();
echo '<br> Vitesse du camion: ' . $teslaTruck->getCurrentSpeed(). ' km/h' . '<br>';
echo ' le camion est-il chargé ? :  Il est <strong>' . $teslaTruck->setIsCharged(500). '</strong><br>';
echo $teslaTruck->brake().'<br><br>';


// $bike = new Bicycle("pink", 1);
// // var_dump($bike);

// $bicycle = new Bicycle('blue', 1);
// echo $bicycle->forward();
// var_dump($bicycle);


// // Moving bike
// echo $bike->forward();
// echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';
// echo $bike->brake();
// echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed(). ' km/h' . '<br>';
// echo $bike->brake().'<br></br>';



// $car = new Car('green', 4, 'electric');
// echo $car->forward();
// var_dump($car).'<br><br>';

// var_dump(Car::ALLOWED_ENERGIES).'<br></br>';

// $vehicule = new Vehicle('pink',4);