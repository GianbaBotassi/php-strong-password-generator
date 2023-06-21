<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Show Pwd</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

</head>
  <?php

session_start();

  ?>
<body>
  <div class="container text-center">
    <h3>Ecco la tua nuova password:</h3>
    <h1>
      <?php

        echo $_SESSION['ranPwd'];

      ?>
    </h1>
    <a href="index.php">Back to Index</a>
</body>
</html>