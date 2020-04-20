<?php

require_once 'Bicycle.php';
require_once 'Car.php';
require_once 'Truck.php';





$green =  new Truck ('yellow', 2, 'diesel', 150);

echo $green->start();
echo $green->forward();
echo $green->brake();
echo $green->tank();

var_dump($green);












