<?php

declare(strict_types=1);

echo "Welcome to the division calculator!".PHP_EOL;
echo "\n";

$a = (float) readline("Enter the first number: ");
$b = (float) readline("Enter the second number: ");


function division(float $a, float $b): float {
  return round($a/$b, 3);
}

try {
  $result = division($a, $b);
  echo "Result: " . $result.PHP_EOL;
} catch (DivisionByZeroError $e) {
  echo $e->getMessage();
} finally {
  echo PHP_EOL."Program Finished.".PHP_EOL;
}
