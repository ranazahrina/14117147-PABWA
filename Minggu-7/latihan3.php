<?php
  function Faktorial(&$value)
  {
    $hasil=1;
    for ($i=$value; $i > 0 ; $i--) {
      $hasil = $hasil * $i;
    }
    echo "Hasil Faktorial = $hasil";
  }
  $value = 6;
  Faktorial($value);
 ?>
