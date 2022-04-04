<?php

require_once 'HighWay.php';

final class PedestrianWay extends HighWay

{
    public function __construct(string $nbLane, int $maxSpeed)
    {
        $this->nbLane = $nbLane;
        $this->maxSpeed = $maxSpeed;
    }

    public function addVehicle(Vehicle $bicycle){
        if ($bicycle instanceof Vehicle) {
            $this->setCurrentVehicles($bicycle);
            $message= "vehicle added";
        } 
        else{ 
            $message = "vehicle not added";
        }
         return $message;
    
    }
}
