<?php

declare(strict_types=1);

session_start();

$username = trim($_POST['username']);
$email = trim($_POST['email']);

$errors = [];

try {
  if (empty($username) || is_null($username)) {
    $errors['username'] = "Username is required. <br>";
  }

  if (empty($email) || is_null($email)) {
    $errors['email'] = "Email is required. <br>";
  }

  if ($errors !== []) {
    throw new Exception($errors['username'] . $errors['email']);
  }

  $_SESSION['username'] = $username;
  $_SESSION['email'] = $email;

  include_once 'login.php';

} catch (Throwable $e) {

  echo $e->getMessage();

}