<?php
require __DIR__ . '/../vendor/autoload.php';

use App\Quest\ElectricBike;
use App\Quest\ChargingStation;
use App\Quest\Bicycle;
use App\Challenge\Speedometer;

$firstElectricBike = new ElectricBike('red');
$firstElectricBike->setCurrentSpeed(5);

$secondElectricBike = new ElectricBike('blue');
$secondElectricBike->setCurrentSpeed(25);

$chargingStation = new ChargingStation();

$firstManualBike = new Bicycle('red');
$firstManualBike->setCurrentSpeed(5);

$secondManualBike = new Bicycle('blue');
$secondManualBike->setCurrentSpeed(15);

?>

<h2>✨ The challenge example (with 10 kmh/h) => Corresponding <?php echo Speedometer::convertKmToMiles(10) ?> miles/h </h2>

<p>
    🚲 Details about the first electric bike:
    <?php
    echo 'Color: ' . $firstElectricBike->getColor() . '<br>';
    echo 'Charge the first bike => ' . $firstElectricBike->charge(10) . '% <br>';
    ?>
    I full charge the frist bike with the charging station: <br>
    Energy level: <?php echo $chargingStation->fullCharge($firstElectricBike); ?>% <br>
    CurrentSpeed: <?php echo $firstElectricBike->getCurrentSpeed(); ?> km/h or <strong><?php echo Speedometer::convertKmToMiles($firstElectricBike->getCurrentSpeed()) ?> miles/h <br></strong>
    Switch on the light: <?php echo $firstElectricBike->switchOn() ? 'On' : 'Off'; ?><br>
    Switch off the light: <?php echo $firstElectricBike->switchOff() ? 'On' : 'Off'; ?><br>
</p>

<p>
    🚲 Details about the first electric bike:
    <?php
    echo 'Color: ' . $secondElectricBike->getColor() . '<br>';
    echo 'Charge the second bike => ' . $secondElectricBike->charge(50) . '% <br>';
    ?>
    CurrentSpeed: <?php echo $secondElectricBike->getCurrentSpeed(); ?> km/h or <strong><?php echo Speedometer::convertKmToMiles($secondElectricBike->getCurrentSpeed()) ?> miles/h <br></strong>
    Switch on the light: <?php echo $secondElectricBike->switchOn() ? 'On' : 'Off'; ?><br>
    Switch off the light: <?php echo $secondElectricBike->switchOff() ? 'On' : 'Off'; ?><br>
</p>

<p>
    🚲 Details about the first manual bike:
    <?php
    echo 'Color: ' . $firstManualBike->getColor() . '<br>';
    ?>
    CurrentSpeed: <?php echo $firstManualBike->getCurrentSpeed(); ?> km/h or <strong><?php echo Speedometer::convertKmToMiles($firstManualBike->getCurrentSpeed()) ?> miles/h <br></strong>
    Switch on the light: <?php echo $firstManualBike->switchOn() ? 'On' : 'Off'; ?> 💡 It speed is too slow to switch on light<br>
    Switch off the light: <?php echo $firstManualBike->switchOff() ? 'On' : 'Off'; ?><br>
</p>

<p>
    🚲 Details about the second manual bike:
    <?php
    echo 'Color: ' . $secondManualBike->getColor() . '<br>';
    ?>
    CurrentSpeed: <?php echo $secondManualBike->getCurrentSpeed(); ?> km/h or <strong><?php echo Speedometer::convertKmToMiles($secondManualBike->getCurrentSpeed()) ?> miles/h <br></strong>
    Switch on the light: <?php echo $secondManualBike->switchOn() ? 'On' : 'Off'; ?><br>
    Switch off the light: <?php echo $secondManualBike->switchOff() ? 'On' : 'Off'; ?><br>
</p>