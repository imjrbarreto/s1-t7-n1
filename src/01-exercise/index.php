<?php

declare(strict_types=1);

include 'math.php';

try {
  
  echo "Welcome to the division calculator!";
  echo "\n";


  $a = (float) readline("Enter the first number: ");
  $b = (float) readline("Enter the second number: ");

  if ($b === 0.0) {
    throw new Exception("Division by zero is not allowed.");
  }

  $result = division($a, $b);
  echo "Result: " . $result;

} catch (Throwable $e) {

  echo $e->getMessage();

} finally {

  echo "\n";
  echo "Program Finished.";
  echo "\n";

}
