<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <style>
      table, tr, td, th
      {
        border-collapse: collapse;
        border: 1px black solid;
        text-align: center;
        padding: 8px;
      }

    </style>
  </head>
  <body>
    <h1>Użytkownicy</h1>
    <?php
      $connect = new mysqli("localhost", "root", "", "zsk_4dg2_baza1");
      $sql = "SELECT * FROM `users`";
      $result = $connect->query($sql);
      //$row = $result->fetch_assoc(); //pobiera pierwszy rekord
      //echo $row['name'];
      echo <<< TABLE
        <table>
          <tr>
            <th>ID</th>
            <th>IMIE</th>
            <th>NAZWISKO</th>
            <th>DATA URODZENIA</th>
          </tr>
      TABLE;
      while ($row = $result->fetch_assoc()) {
        echo <<< ETYKIETA
          <tr>
            <td>$row[id]</td>
            <td>$row[name]</td>
            <td>$row[surrname]</td>
            <td>$row[birthday]</td>
          <tr>
          ETYKIETA;
      }
      echo "</table>";
      $connect->close();
     ?>
  </body>
</html>
