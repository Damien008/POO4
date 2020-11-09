<?php

    require_once 'Car.php';

        //create car1
        $car1 = new Car('red', 4, 'essence');
        $car1->setEnergyLevel(100);
        $car1->setCurrentSpeed(150);
        $car1->setNumberWheels(4);
        $car1->setParkBrake(true);
        var_dump($car1);

        try {
            echo $car1->start();
        } catch(Exception $e){
            
            echo "Exception received : ". $e->getMessage() . "<br>";
            $car1->setParkBrake(false);
        }finally{
            echo "Ma voiture roule comme un donut";
        }
        var_dump($car1);
       


       

?>