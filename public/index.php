<?php
require __DIR__ . '/../vendor/autoload.php';

use App\Quest\Bicycle;
use App\Quest\SkateBoard;
use App\Challenge\Car;
use App\Challenge\Truck;
use App\Challenge\MotorWay;
use App\Challenge\PedestrianWay;
use App\Challenge\ResidentialWay;

$firstBicycle = new Bicycle('red');
$secondBicycle = new Bicycle('blue');

$firstChallengeCar = new Car('blue', 5, 'electric');
$secondChallengeCar = new Car('red', 4, 'gasoline');

$firstTruck = new Truck('white', 3, 'gasoil', 10000);
$secondTruck = new Truck('black', 3, 'gasoil', 15000);

$skateBoard = new SkateBoard();

$vehicles = [$firstBicycle, $secondBicycle, $firstChallengeCar, $secondChallengeCar, $firstTruck, $secondTruck, $skateBoard];

$motorWay = new MotorWay();
$motorWay->setCurrentVehicules($vehicles);

$pedestrianWay = new PedestrianWay();
$pedestrianWay->setCurrentVehicules($vehicles);

$residentialWay = new ResidentialWay();
$residentialWay->setCurrentVehicules($vehicles);

function printVehicle($vehicle)
{
    $vehicleColor = $vehicle->getColor();
    switch ($vehicle) {
        case $vehicle instanceof Bicycle:
            return $vehicleColor . ' bicycle';
            break;
        case $vehicle instanceof Car:
            return $vehicleColor . ' car';
            break;
        case $vehicle instanceof Truck:
            return $vehicleColor . ' truck';
            break;
        case $vehicle instanceof SkateBoard:
            return 'skate board';
            break;
    }
}

?>

<p>👇 This is a list of current vehicules on a motor way: </p>
<ul>
    <?php foreach ($motorWay->getCurrentVehicles() as $motorVehicule) {
        echo '<li>' . printVehicle($motorVehicule) . '</li>';
    } ?>
</ul>

<p>👇 This is a list of current vehicules on a pedestrian way: </p>
<ul>
    <?php foreach ($pedestrianWay->getCurrentVehicles() as $pedestrianVehicule) {
        echo '<li>' . printVehicle($pedestrianVehicule) . '</li>';
    } ?>
</ul>

<p>👇 This is a list of current vehicules on a residential way: </p>
<ul>
    <?php foreach ($residentialWay->getCurrentVehicles() as $residentialVehicule) {
        echo '<li>' . printVehicle($residentialVehicule) . '</li>';
    } ?>
</ul>