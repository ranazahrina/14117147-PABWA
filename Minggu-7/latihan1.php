<?php
  function swap(&$value1, &$value2)
  {
    $temp = $value1;
    $value1 = $value2;
    $value2 = $temp;
  }
  $a = 20;
  $b = 32;
  echo "Value a = $a ";
  echo "Value b = $b ";
  echo "<br>";
  echo "Lakukan fungsi swap";
  swap($a, $b);
  echo "<br>";
  echo "Value a = $a ";
  echo "Value b = $b ";
 ?>
