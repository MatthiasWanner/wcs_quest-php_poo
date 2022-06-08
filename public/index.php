<?php
require __DIR__ . '/../vendor/autoload.php';

use App\Quest\Bicycle;
use App\Challenge\Car;
use App\Challenge\Truck;

$firstBicycle = new Bicycle('red');
$secondBicycle = new Bicycle('blue');

$firstChallengeCar = new Car('blue', 5, 'electric');
$secondChallengeCar = new Car('red', 4, 'gasoline');

$firstTruck = new Truck('white', 3, 'gasoil', 10000);
$secondTruck = new Truck('black', 3, 'gasoil', 15000);

?>

<p>The first bike is <?php echo $firstBicycle->getColor() ?></p>
<p>The second bike is <?php echo $secondBicycle->getColor() ?></p>

<p><?php echo $firstChallengeCar->introduceVehicle() ?></p>
<p><?php echo $secondChallengeCar->introduceVehicle() ?></p>

<p><?php echo $firstTruck->introduceVehicle() ?></p>
<p><?php echo $secondTruck->introduceVehicle() ?></p>
<p><?php echo $secondTruck->forward() ?></p>
<p><?php echo $secondTruck->brake() ?></p>
<p><?php echo $secondTruck->getStorageState() ?></p>
<p><?php echo $secondTruck->setCurrentStorage(15000) ?></p>
<p><?php echo $secondTruck->getCurrentStorage() ?></p>
<p><?php echo $secondTruck->getStorageState() ?></p>