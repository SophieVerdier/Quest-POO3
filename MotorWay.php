<?php

require_once 'HighWay.php';

final class MotorWay extends HighWay
{
    public function __construct(string $nbLane, int $maxSpeed)
    {
        $this->nbLane = $nbLane;
        $this->maxSpeed = $maxSpeed;
    }

public function addVehicle(Vehicle $car){
    if ($car instanceof Car) {
        $this->setCurrentVehicles($car);
        $message= "vehicle added";
    } 
    else{ 
        $message = "vehicle not added";
    }
     return $message;

}
}

