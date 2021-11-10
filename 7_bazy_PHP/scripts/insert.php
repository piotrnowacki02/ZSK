<?php
  if (!empty($_POST)) {
    foreach ($_POST as $key => $value) {
      // echo "$key: $value<br>";
      if(empty($value))
      {
        header('location: ../4_bazy_insert.php?error=1&info=Wypełnij wszystkie dane w formularzu!&addUser=');
        exit();
      }
    }
    require_once './connect.php';
    $sql = "INSERT INTO `users` (`name`, `surrname`, `birthday`) VALUES ('$_POST[name]', '$_POST[surrname]', '$_POST[birthday]');";
    $connect->query($sql);
    header('location: ../4_bazy_insert.php?dodano=1');
  }
  else {
    header('location: ../4_bazy_insert.php?error=1&info=Nie dodano uzytkownika?addUser=');
    exit();
  }
 ?>
