<?php
 
   
     
    $a = 1;
    $faktorial = $a;
    $angka=6;
 
    while($a <= $angka){
      $faktorial = $faktorial * $a;
      $a++;
    }
   
    echo "\tAngka Faktorial : ";
    echo $angka;
    echo "\n";
   
    echo "<br>Hasil Perhitungan Faktorial adalah : ";
    echo $faktorial;
 

?>