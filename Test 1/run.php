<?php

require_once('./Math.php');


echo 'Sum of 0 + 1: ' . \Math::AddValues(0, 1) . PHP_EOL;
echo 'Sum of 1 + 1: ' . \Math::AddValues(1, 1) . PHP_EOL;
echo 'Sum of 1000 + 45: ' . \Math::AddValues(1000, 45) . PHP_EOL;

echo 'Value of 0 - 1: ' . \Math::SubtractValues(0, 1) . PHP_EOL;
echo 'Value of 1 - 1: ' . \Math::SubtractValues(1, 1) . PHP_EOL;
echo 'Value of 1000 - 45: ' . \Math::SubtractValues(1000, 45) . PHP_EOL;