<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP Strong Password Generator</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

  <?php 
    include "functions.php"; 
    $letters = $_GET['letters'];
    $numbers= $_GET['numbers'];
    $symbols = $_GET['symbols'];

    $pwdLen = $_GET['pwd-len'];

  ?>

</head>
<body>
  <div class="container">
    <h1 class="text-center">Strong Password Generator</h1>
    <h2 class="text-center">Genera una password sicura</h2>
    <h6 class="text-center my-4">
    <?php
        $ranPwd = (getRandPwd($pwdLen,$letters,$numbers,$symbols));

        echo $ranPwd;
        // $_SESSION['ranPwd'] = $ranPwd;
      // if($pwdLen){
      //   header('Location: showPwd.php');
      // }
      ?>
    </h6>
    <form>
      <div class="row">
        <div  class="col-6">Lunghezza password</div>
        <input class="offset-2 col-4" type="text" name="pwd-len">
      </div>
      <div class="row my-3">
        <div class="col-6">Consenti ripetizioni di uno o più caratteri</div>
        <div class="offset-2 col-4 d-flex flex-column">
          <!-- <div>
            <input type="radio" name="rep-char" id="rep-char-yes" checked>
            <label for="rep-char-yes">Si</label>
          </div>
          <div>
            <input type="radio" name="rep-char" id="rep-char-no">
            <label for="rep-char-no">No</label>
          </div> -->
          <div class="d-flex flex-column py-3">
            <div>
              <input type="checkbox" name="letters" id="letters">
              <label for="letters">Lettere</label>
            </div>
            <div>
              <input type="checkbox" name="numbers" id="numbers">
              <label for="numbers">Numeri</label>
            </div>
            <div>
              <input type="checkbox" name="symbols" id="symbols">
              <label for="symbols">Simboli</label>
            </div>
          </div>
        </div>
      </div>
      <input type="submit" value="Send">
    </div>
    </form>
    <a href="showPwd.php">vai</a>



</body>
</html>