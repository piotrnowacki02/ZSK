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
      include("./skrypty/connect.php");
      $sql = "SELECT * FROM `user`";
      $result = $connect->query($sql);
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
            <td>$row[surname]</td>
            <td>$row[birthday]</td>
            <td><a href="./skrypty/delete.php?id=$row[id]">Usuń</a></td>
          <tr>
          ETYKIETA;
      }
      echo "</table>";
      if (!empty($_GET['id']))
      {
        echo "Usunięto rekord o id = $_GET[id] ";
      }
      $connect->close();
     ?>
  </body>
</html>
