<?php
 $a = 0;
 $b = 0;
 $i = 0;

 while ($i<=50){
     if($i % 2 == 0){
         $b = $b + $i;
     }
     else{
         $a = $a + $i;
     }
     $i++;
 }

 echo "\nEl valor final de la variable a es: " . $a;
 echo "\nEl valor final de la variable b es: " . $b;

