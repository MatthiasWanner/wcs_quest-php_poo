<?php
require __DIR__ . '/../vendor/autoload.php';

use App\Quest\Bicycle;

$bicycle = new Bicycle('red');

?>

<p>The bike is <?php echo $bicycle->getColor() ?></p>