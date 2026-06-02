<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>form-php</title>
</head>
<body>
  <h1>Form PHP</h1>

  <form action="validations.php" method="POST">
    <div>
      <label for="username">Username:</label>
      <input type="text" name="username" id="username">
    </div>

    <br>
    <div>
      <label for="email">email:</label>
      <input type="email" name="email" id="email">
    </div>

    <br>
    <button type="submit">Send</button>

  </form>
</body>
</html>