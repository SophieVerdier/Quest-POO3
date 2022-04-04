<?php

require_once 'Highway.php';
require_once 'MotorWay.php'; 
require_once 'ResidentialWay.php';
require_once 'PedestrianWay.php';
require_once '../vehicle/Car.php';
require_once '../vehicle/bicycle.php';

$tesla = new Car('blue', 5, 'electric');
$clio = new Car('grey', 3, 'gaz');
$bicycle = new Bicycle('red',2);

$motorway = new Motorway(4, 130);

echo $motorway->addVehicle($tesla);

$residentialway = new ResidentialWay(2, 50);
echo $residentialway->addVehicle($clio);

$pedestrianway = new PedestrianWay(1, 10);
echo $pedestrianway->addVehicle($bicycle);
