<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h3>Początek strony</h3>
      <?php
        include 'plik_do_dołączenia.php'; //kod będzie się dalej wykonywał jeżeli błędna ścieżka
        require 'plik_do_dołączenia.php'; //dalszy kod nie będzie sie wykonywał jeżeli błędna ścieżka
        include_once 'plik_do_dołączenia.php'; //jeżeli wcześniej plik został dołączony, to już nie będzie dołączany
        require_once 'plik_do_dołączenia.php'; // jak wyżej tylko że require
      ?>
    <h3>Koniec strony</h3>
  </body>
</html>
