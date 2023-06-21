<?php


function getRandPwd($pwdLen,$letters,$numbers,$symbols){
  $strLetters = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
  $strNumbers = "0123456789";
  $strSymbols = "!?$&()£";
  $strToUse = ($letters ? $strLetters : "") . ($numbers ? $strNumbers : "") . ($symbols ? $strSymbols : "");
  $strLength = strlen($strToUse);
  $randStr = "";

      if($letters === null && $numbers === null && $symbols === null){
        echo "Seleziona almeno uno tra Lettere, Numeri o Simboli";
      } else {
        $x = 0;
        while (++$x <= $pwdLen) {
      
          $randStr = $randStr . $strToUse[rand(0,$strLength - 1)];
        };
      }
      return $randStr;
}


          // if(str_contains($word,"c")){
          //   echo "yes";
          // } else {
          //   echo "no";
          // }
      

// function getRandPwdNoRepeat($pwdLen,$letters,$numbers,$symbols){
//   $strLetters = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
//   $strNumbers = "0123456789";
//   $strSymbols = "!?$&()£";
//   $strToUse = ($letters ? $strLetters : "") . ($numbers ? $strNumbers : "") . ($symbols ? $strSymbols : "");
//   $strLength = strlen($strToUse);
//   $randStr = "";

//       if($letters === null && $numbers === null && $symbols === null){
//         echo "Seleziona almeno uno tra Lettere, Numeri o Simboli";
//       } else {
//         $x = 0;
//         while (++$x <= $pwdLen) {
      
//           $randStr = $randStr . $strToUse[rand(0,$strLength - 1)];
//         };
//       }
//       return $randStr;
// }







?>