<?php
require __DIR__ . '/../vendor/autoload.php';

use App\Quest\ElectricBike;
use App\Quest\ChargingStation;

$firstElectricBike = new ElectricBike('red');
$secondElectricBike = new ElectricBike('blue');

$chargingStation = new ChargingStation();

?>

<p>
    <?php
    echo '🚲 First electric bike: ' . $firstElectricBike->getColor() . '<br>';
    echo '🚲 Second electric bike: ' . $secondElectricBike->getColor() . '<br>';
    ?>
</p>

<p>
    <?php
    echo 'Charge the first bike => ' . $firstElectricBike->charge(10) . '% <br>';
    echo 'Charge the second bike => ' . $firstElectricBike->charge(50) . '% <br>';
    ?>
</p>

<p>
    I full charge the frist bike with the charging station: <br>
    Energy level: <?php echo $chargingStation->fullCharge($firstElectricBike); ?>%
</p>