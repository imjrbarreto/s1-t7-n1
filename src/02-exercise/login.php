<?php declare(strict_types=1);

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
  <?php if (!empty($_POST['username']) && !empty($_POST['email']) && !empty($_POST['password'])) : ?>
    <h1>Welcome, <?= $_SESSION['username'] ?></h1>
    <p>Your email is: <?= $_SESSION['email'] ?></p>
  <?php else : ?>
    <h1>Please log in</h1>
  <?php endif; ?>
</body>
</html>