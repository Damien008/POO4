<?php

    //car

    class Car
    {
        //attributs
        private $numberWheels;
        private $currentSpeed;
        private $color;
        private $numberSeats;
        private $energy;
        private $energyLevel;
        private $hasParkBrake;

        //méthodes

        public function __construct(string $color, int $numberSeats, string $energy)
        {
            $this->color = $color;
            $this->numberSeats = $numberSeats;
            $this->energy = $energy;
        }

         public function getParkBrake(): bool
        {
            $this->hasParkBrake;
        }
        public function setParkBrake(bool $hasParkBrake): void 
        {
            $this->hasParkBrake = $hasParkBrake;
        }
        
        //start

        public function start()
        {
            if ($this->hasParkBrake == true){
                throw new exception('frein à main serré');
            }
           return "pas de frein à main";
        }

        //forward
        public function forward()
        {
            $this->currentSpeed;

            return "Go !";
        }

        //stop
        public function brake(): string
        {
        $sentence = "";
        while ($this->currentSpeed > 0) {
            $this->currentSpeed--;
            $sentence .= "Brake !!!";
        }
        $sentence .= "I'm stopped !";
        return $sentence;
        }

        //wheels
        public function getNumberWheels(): int
        {
            return $this->numberWheels;
        }

        public function setNumberWheels(int $numberWheels): void
        {
            $this->numberWheels = $numberWheels;
        }

        //speed
        public function getCurrentSpeed(): int
        {
            return $this->currentSpeed;
        }

        public function setCurrentSpeed(int $currentSpeed): void
        {
            if($currentSpeed >= 0){
                $this->currentSpeed = $currentSpeed;
            }
        }

        //color
        public function getColor(): string
        {
            return $this->color;
        }

        //seats
        public function getNumberSeats(): int
        {
            return $this->numberSeats;
        }

        //energy type
        public function getEnergy(): string
        {
            return $this->energy;
        }


        //energy level
        public function getEnergyLevel(): int
        {
            return $this->energyLevel;
        }

        public function setEnergyLEvel(int $energyLevel): void
        {
            $this->energyLevel = $energyLevel;
        }

      

       







    }