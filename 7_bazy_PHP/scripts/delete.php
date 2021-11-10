<?php
//sprawdzenie czy dane zostały wysłane
// TAK => usuwamy rekord o konkretnym id
//wyświetl ile rekordów usuniete
// NIE => cofamy uzytkownika do strony z tabela
  if (!empty($_GET['id']))
  {
    require_once("./connect.php");
    $connect->query("DELETE FROM `USERS` WHERE `users`.`id` = $_GET[id];");
    //$liczba = $connect->affected_rows;
    //echo "Usunięto $liczba rekordów";
    header("Location: ./../3_bazy_tabela_delete.php?id=$_GET[id]");
    exit;
  }
  else {
    header("Location: ./../3_bazy_tabela_delete.php");
    exit;
  }
 ?>
