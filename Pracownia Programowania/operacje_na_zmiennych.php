<?php
  echo PHP_VERSION; //8.0.10
  echo 2**10; //1024


  echo "<br>";
  $x = 1;
  $y = 10;
  echo $x<=>$y;// porównanie: lewa większa = 1, prawa większa = -1, równe = 0

  //równe
  $x = 1;
  $y = 1.0;
  echo "<br>";
  if ($x==$y) {
    echo "Równe";
  }
  else {
    echo "Różne";
  }
  echo "<br>";
  if ($x===$y) {
    echo "Identyczne";
  }
  else {
    echo "Nieidentyczne";
  }
  echo "<br>";

  echo gettype($x); //integer
  echo "<br>";
  echo gettype($y); //double
  echo "<br>";

  /*
    postinkrementacja $x++
    preinkrementacja ++$x
    postdekrementacja $x--
    predekrementacja --$x
  */

  $x = 1;
  echo $x;// 1
  $x = $x++;
  echo $x;// 1
  $x = ++$x;
  echo $x;// 2
  $y = ++$x;
  echo $x;// 3
  echo $y;// 3
  $y = $x++;
  echo $x;// 4
  echo "$y<br>";// 3


 ?>
