<?php

function getRandPwd($pwdLen){
  $numWords = "0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ!?$&()£";
  $strLength = strlen($numWords);
  $randStr = "";

  $x = 0;
  while (++$x <= $pwdLen) {
    $randStr = $randStr . $numWords[rand(0,$strLength - 1)];
  };
  return $randStr;
}


?>