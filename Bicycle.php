<?php
// Bicycle.php

class Bicycle {

    /**
     * @var string
     */
private $color;

    /**
     * @return string
     */

/**
 * @var integer
 */
private $currentSpeed;

/**
 * @var integer
 */
private $nbSeats;

/**
 * @var integer
 */
private $nbWheels;

    /**
     * @return string
     */
public function getColor(): string {
    return $this -> color;
}

    /**
     * @rparam string $color
     * @param string $color
     */
public function setColor(string $color) : void
{
    $this->color = $color;
}

public function forward(){
    $this -> currentSpeed = 15;
    return "Go !";
}
public function brake(): string {
    $sentence = "";
    while ($this -> currentSpeed > 0){
        $this -> currentSpeed--;
        $sentence .= "Brake !!!";
    }
    $sentence .= "I'm stopped !";
    return $sentence;
}
public function dump (){
    var_dump($this);
}
}