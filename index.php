<?php

require_once 'Bicycle.php';
require_once 'Car.php';
require_once 'Truck.php';





$green =  new Truck ('yellow', 2, 'diesel', 150);

echo $green->start();
var_dump($green);












