<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Show Pwd</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

</head>
  <?php

session_start();    //apro sessione per condivisione variabile

  ?>
<body>
  <div class="container text-center">
    <h3 class="bg-secondary p-3 rounded mt-3 text-white">Ecco la tua nuova password:</h3>
    <h1 class="border p-3 text-primary rounded">
      <?php

        echo $_SESSION['ranPwd'];   //stampo in pagina propria

      ?>
    </h1>
    <a href="index.php">Back to Index</a>
</body>
</html>