<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP Strong Password Generator</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

  <?php 
    include "functions.php";    //includo file con funzione

    session_start();    //inizio sessione per condivisione variabile


    //Dichiaro vari input
    $letters = $_GET['letters'];    //checkbox lettere
    $numbers= $_GET['numbers'];   //checkbox numeri
    $symbols = $_GET['symbols'];    //checkbox simboli
    $noRepeat = $_GET['rep-char'];    //radio ripeti caratteri

    $pwdLen = $_GET['pwd-len'];   //lunghezza pwd

  ?>

</head>
<body>
  <div class="container bg-secondary p-3 mt-3 text-light rounded">
    <div class="bg-primary p-2 rounded">
      <h1 class="text-center">Strong Password Generator</h1>
      <h2 class="text-center">Genera una password sicura</h2>
    </div>
    <h6 class="text-center my-4 bg-success p-4 rounded">
    <?php

      //eseguo funzione
      $ranPwd = (getRandPwd($pwdLen,$letters,$numbers,$symbols,$noRepeat));

      //dichiaro variabile di session (output funzione)
      $_SESSION['ranPwd'] = $ranPwd;

      //condizione se input len pwd compilato redirect a pagina PWD  
      if($pwdLen){
        header('Location: showPwd.php');
      }
      ?>
    </h6>
    <form>
      <div class="row">
        <div  class="col-8">Lunghezza password (min 4 - max 20)</div>
        <input class="offset-1 col-2" type="text" name="pwd-len" pattern="[0-9]{4-20}">
      </div>
      <div class="row my-3">
        <div class="col-8">Consenti ripetizioni di uno o più caratteri</div>
        <div class="offset-1 col-3 d-flex flex-column">
          <div>
            <input type="radio" name="rep-char" id="rep-char-yes" checked value="yes">
            <label for="rep-char-yes">Si</label>
          </div>
          <div>
            <input type="radio" name="rep-char" id="rep-char-no" value="no">
            <label for="rep-char-no">No</label>
          </div>
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
      <input type="submit" value="Send" class="btn bg-primary text-white">
    </div>
    </form>
    <div class="container my-5">
      <a href="showPwd.php">Go to showPwd</a>
    </div>



</body>
</html>