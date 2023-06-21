<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP Strong Password Generator</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

  <?php include "functions.php"; 
  ?>

</head>
<body>
  <div class="container">
    <h1 class="text-center">Strong Password Generator</h1>
    <h2 class="text-center">Genera una password sicura</h2>
    <h3 class="text-center my-4">
    <?php
      $pwdLen = $_GET['pwd-len'];
      $ranPwd = (getRandPwd($pwdLen));
      echo $ranPwd;
      ?>
    </h3>
    <form>
      <div class="row">
        <div  class="col-6">Lunghezza password</div>
        <input class="offset-2 col-4" type="text" name="pwd-len">
      </div>
      <!-- <div class="row my-3">
        <div class="col-6">Consenti ripetizioni di uno o più caratteri</div>
        <div class="offset-2 col-4">
          <input type="radio" name="more-character" id="more-character-yes">
          <label for="more-character-yes">Si</label>
          <input type="radio" name="more-character" id="more-character-no">
          <label for="more-character-no">No</label>
        </div>
      </div> -->
      <input type="submit" value="Send">
    </div>
    </form>


</body>
</html>