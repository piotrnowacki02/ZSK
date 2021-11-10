<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="./css/style.css">
    <title>Użytkownicy</title>
  </head>
  <body>
    <?php
    if(!empty($_GET['error']))
    {
      echo "$_GET[info]";
    }
    if(!empty($_GET['dodano']))
    {
      echo "Dodano $_GET[dodano] wiersz";
    }
    ?>
    <h4>Użytkownicy</h4>

    </form>
<?php
  require_once './scripts/connect.php';
  $sql = "SELECT `users`.*, `cities`.`city`\n"

    . "FROM `users`\n"

    . "	, `cities`";
  $result = $connect->query($sql);
  // echo $row['name'];
  // print_r ($row);
echo <<< TABLE
<table>
  <tr>
    <th>Id</th>
    <th>Imię</th>
    <th>Nazwisko</th>
    <th>Data urodzenia</th>
TABLE;
  while ($row = $result->fetch_assoc()) {
    echo <<<ROW
    <tr>
      <td>$row[id]</td>
      <td>$row[name]</td>
      <td>$row[surrname]</td>
      <td>$row[birthday]</td>
      <td><a href="./scripts/delete.php?id=$row[id]">Usuń</a></td>
    </tr>

    ROW;
  }
  echo '<a href="./4_bazy_insert.php?addUser=1">Dodaj</a>';
  echo "</table>";
  if(isset($_GET['addUser']))
  {
    echo <<< FORMADDUSER
      <h3>Dodawanie użytkownika:</h3><br>
      <form  action="./scripts/insert.php" method="post">
        Wpisz imie: <input type="text" name="name" placeholder="Wpisz imie"><br><br>
        Wpisz nazwisko: <input type="text" name="surrname" placeholder="Wpisz nazwisko"><br><br>
        Podaj date urodzenia: <input type="date" name="birthday"><br><br>
        <input type="submit" value="dodaj"><br><br><br>
    FORMADDUSER;
  }

  $connect->close();
 ?>

  </body>
</html>
