<?php
require __DIR__ . '/../vendor/autoload.php';

use App\Quest\Bicycle;
use App\Challenge\Car;

$firstBicycle = new Bicycle('red');
$secondBicycle = new Bicycle('blue');

$firstChallengeCar = new Car('blue', 5, 'electric');
$secondChallengeCar = new Car('red', 4, 'gasoline');

?>

<p>The first bike is <?php echo $firstBicycle->getColor() ?></p>
<p>The second bike is <?php echo $secondBicycle->getColor() ?></p>

<p><?php echo $firstChallengeCar->introduceProperties() ?></p>
<p><?php echo $secondChallengeCar->introduceProperties() ?></p>