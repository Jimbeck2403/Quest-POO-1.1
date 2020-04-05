<?php

require_once 'Bicycle.php';
require_once 'Car.php';

$bike = new Bicycle();
$rockrider = new Bicycle();
$tornado = new Bicycle();




$homers = new Car('pink', 5, 'fuel');
$marges = new Car('orange', 8, 'fuel');
$teenages = new Car('yellow', 4, 'essence');
$lilbandit = new Car('red', 2, 'essence');
$polices = new Car('white-black', 4, 'fuel');
$flanders= new Car('purple', 4, 'fuel');
$thehomer = new Car('green', 2, 'essence');
$plow = new Car('red', 3, 'fuel');
$canyonhero = new Car('red', 6, 'fuel');
$kurstys = new Car('grey', 2, 'essence');
$patty = new Car('green', 4, 'fuel');
$lovejoy =  new Car('white', 2, 'essence');







echo $patty -> forward();
echo $patty -> start();





