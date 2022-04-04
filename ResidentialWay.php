<?php

require_once 'HighWay.php';

final class ResidentialWay extends HighWay
{
    public function __construct(string $nbLane, int $maxSpeed)
    {
        $this->nbLane = $nbLane;
        $this->maxSpeed = $maxSpeed;
    }

    public function addVehicle(Vehicle $vehicle){
        if ($vehicle instanceof Vehicle) {
            $this->setCurrentVehicles($vehicle);
            $message= "vehicle added";
        } 
        else{ 
            $message = "vehicle not added";
        }
         return $message;
    
    }
}
