<?php
// Car.php

class Car
{

    /**
     * @var int
     */
    private $nbWheels;

    /**
     * @var int
     */
    private $currentSpeed;

    /**
     * @var string
     */
    private $color;


    /**
     * @var int
     */
    private $nbSeats;

    /**
     * @var string
     */
    private $energy;

    /**
     * @var integer
     */
    private $energyLevel;

    public function __construct($color, $nbSeats, $energy)
    {
        $this->color = $color;
        $this->nbWheels = $nbSeats;
        $this->energy = $energy;

    }

    /**
     * @return string
     */
    public function getNbWheels(): string
    {
        return $this->nbWheels;
    }

    /**
     * @return integer
     */
    public function getCurrentSpeed(): integer
    {
        return $this->currentSpeed;
    }

    /**
     * @return string
     */
    public function getColor(): string
    {
        return $this->color;
    }

    /**
     * @return string
     */
    public function getEnergy(): string
    {
        return $this->energy;
    }

    /**
     * @return integer
     */
    public function getEnergyLevel(): integer
    {
        return $this->energyLevel;
    }

    public function forward()
    {
        $this->currentSpeed = 15;

        return "Go !";
    }

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

    public function start(): string{
        if ($this->currentSpeed > 0) {
            echo 'Lets go';
    }


        }
    }