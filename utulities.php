# php 7.x
<?php
 $comb = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
 $pass = array(); 
 $combLen = strlen($comb) - 1; 
 for ($i = 0; $i < 10; $i++) {
     $n = rand(0, $combLen);
     $pass[] = $comb[$n];
 }
 var_dump(implode($pass)); 
?>