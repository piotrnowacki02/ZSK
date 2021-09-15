<?php
  echo "ZSK <br>";
  echo "ZSK <br>";

  $name = "Janusz";
  echo 'Imię: $name <br>'; // Imię: $name
  echo "Imię: $name <br>"; // Imię: Janusz

  //konkatenacja .
  // interpolacja ,
  echo "text1"."text2";
  echo "text1","text2<br>";

  //typy danych
  //całkowity
    $calkowita = 10; // nie zapisujemy nazw zmiennych z polskimi znakami
    $bin = 0b1011; //11
    $oct = 010; // 8
    $hex = 0x10; // 16

    //zmiennoprzecinkowe
    $x = 10.5;

    //logiczne
    $prawda = true; //1
    $falsz = false;// nic nie wyswietli

    // składnia heredoc
    echo <<< ETYKIETA
      <br><hr>Imię: $name<br>
      Poznań<hr>
    ETYKIETA;

    $text = <<< ETYKIETA
      <br><hr>Imię: $name<br>
      Poznań<hr>
    ETYKIETA;

    echo $text;

    // składnia nowdoc
    echo <<< 'ETYKIETA'
      <br><hr>nowdoc<br>Imię: $name<br>
      Poznań<hr>
    ETYKIETA;

    echo "Nazwa zmiennej \$name <br>";
    echo "Wartość zmiennej $name <br>";
 ?>
