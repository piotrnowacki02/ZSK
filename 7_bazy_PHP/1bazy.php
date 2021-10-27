<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h4>Użytkownicy</h4>
    <?php
      $connect = new mysqli("localhost", "root", "", "zsk_4dg2_baza1");
      $sql = "SELECT * FROM `users`";
      $result = $connect->query($sql);
      //$row = $result->fetch_assoc(); //pobiera pierwszy rekord
      //echo $row['name'];
      while ($row = $result->fetch_assoc()) {
        echo <<< ETYKIETA
          <hr>
          ID: $row[id]
          <br>Imię i nazwisko: $row[name]  $row[surrname]
          <br>Data urodzenia: " $row[birthday]<br><hr>
          ETYKIETA;
      }
      $connect->close();
     ?>
  </body>
</html>
