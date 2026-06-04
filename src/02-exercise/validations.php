<?php declare(strict_types=1);

session_start();

$username = trim($_POST['username']);
$email = trim($_POST['email']);
$password = trim($_POST['password']);

try {  
  if (empty($username)) {
    throw new Exception("Username is required. <br>");
  } 
  $_SESSION['username'] = $username;
} catch (Throwable $e) {
  echo $e->getMessage();
}

try {  
  if (empty($email)) {
    throw new Exception("Email is required. <br>");
  }
  $_SESSION['email'] = $email;  
} catch (Throwable $e) {
  echo $e->getMessage();
}

try {
  $pattern = "/^[a-zA-Z0-9_]{8,}$/";
  if (empty($password) || !preg_match($pattern, $password)) {
    throw new Exception("Password is required and must be at least 8 characters long. <br>"); 
  }
} catch (Throwable $e) {
  echo $e->getMessage();
}
    
include_once 'login.php';