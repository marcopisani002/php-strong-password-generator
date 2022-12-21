
<?php
  $lowercaseLetters="abcdefghijklmnopqrstuvwxyz";
  $uppercaseLetters="ABCDEFGHIJKLMNOPQRSTUVWXYZ";
  $numbers="1234567890";
  $symbols= "!#$%&'()*+,-.:;<=>?@[\]^_{|}";
  $comb = $lowercaseLetters . $uppercaseLetters .$numbers.$symbols ;
  $pass = array(); 
  $combLen = strlen($comb) - 1; 
 
 for ($i = 0; $i < $lenght; $i++) {
     $n = rand(0, $combLen);
     $pass[] = $comb[$n];
     
 }


?>