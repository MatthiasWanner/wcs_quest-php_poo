<?php
require __DIR__ . '/../vendor/autoload.php';

use App\Challenge\Car;

$firstChallengeCar = new Car('blue', 5, 'electric');
$firstChallengeCar->setParkBrake(true);

$secondChallengeCar = new Car('red', 4, 'gasoline');
$secondChallengeCar->setParkBrake(false);

function startCar(Car $car)
{
    try {
        return $car->start();
    } catch (\Exception $e) {
        return $e->getMessage();
    }
}

function printParkBrakeSate(Car $car)
{
    return $car->getParkBrakeState() ? 'engaged' : 'unlocked';
}

?>

<p>
    🚗 I try to start the car #1 with the park brake: <br />
    Park brake status: <?php echo printParkBrakeSate($firstChallengeCar) ?><br />
    Result: <?php echo startCar($firstChallengeCar) ?>
</p>

<p>🚗 I try to start the car #2 without the park brake: <br />
    Park brake status: <?php echo printParkBrakeSate($secondChallengeCar) ?><br />
    Result: <?php echo startCar($secondChallengeCar) ?>
</p>