<?php 
declare(strict_types=1);

session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Welcome</title>
</head>
<body>
  <h1>Welcome, <?= $_SESSION['username'] ?></h1>
  <p>Your email is: <?= $_SESSION['email'] ?></p>
</body>
</html>