<?php

function getRandPwd($pwdLen,$letters,$numbers,$symbols,$noRepeat){
  $strLetters = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
  $strNumbers = "0123456789";
  $strSymbols = "!?$&()";
  $strToUse = ($letters ? $strLetters : "") . ($numbers ? $strNumbers : "") . ($symbols ? $strSymbols : "");    //stringa che si crea in base ai checkbox selezionati
  $strLength = strlen($strToUse);   //length stringa creata
  $randStr = "";    // variabile output funzione

      if($letters === null && $numbers === null && $symbols === null){
        echo "Seleziona almeno uno tra Lettere, Numeri o Simboli";
      } elseif ($noRepeat === "yes") {    //se radio è yes, cicla con ripetizione caratteri
        while (strlen($randStr) <= $pwdLen) {
          $randStr = $randStr . $strToUse[rand(0,$strLength - 1)];
        };
      } else {    //se radio è no, cicla in nuova stringa $randStr togliendo il carattere inserito dalla stringa di origine $strToUse
        while (strlen($randStr) < $pwdLen) {
            $newChar = $strToUse[rand(0,$strLength - 1)];
            $randStr .= $newChar;
            $strToUse = str_replace($newChar, "", $strToUse);
        };
      }
      return $randStr;
}

?>