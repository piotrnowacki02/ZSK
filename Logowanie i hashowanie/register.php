<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <style>
      h2, input
      {
        margin: 10px;

      }
    </style>
  </head>
  <body>
    <h2>REJESTRACJA</h2>
    <form action="register.php" method="post">
      <input type="text" name="name" placeholder="wpisz imie"><br>
      <input type="text" name="surname" placeholder="wpisz nazwisko"><br>
      <input type="text" name="mail" placeholder="wpisz email"><br>
      <input type="password" name="pass1" placeholder="wpisz hasło"><br>
      <input type="password" name="pass2" placeholder="powtórz hasło"><br>
      <input type="submit" value="Zarejestruj">
    </form>
    <?php
    if (!empty($_POST)) {
      if (!empty($_POST['name']) && !empty($_POST['surname']) && !empty($_POST['mail']) && !empty($_POST['pass1']) && !empty($_POST['pass2'])) {
        if($_POST['pass1'] == $_POST['pass2'])
        {
            $conn = new mysqli("localhost","root","","logowanie");
            $password = $_POST['pass1'];
            $mail = $_POST['mail'];
            $name = $_POST['name'];
            $surname = $_POST['surname'];
            $passwordHash = password_hash($password, PASSWORD_ARGON2ID);
            $sql = "select mail from users";
            $result = $conn->query($sql);
            $unique = 1;
            while($row = $result->fetch_assoc())
            {
              if($row['mail'] == $mail)
              {
                $unique = 0;
              }
            }
            if($unique == 1)
            {
              $sql = "insert into users values(NULL,'$mail','$passwordHash','$name','$surname');";
              $result = $conn->query($sql);
              echo "dodano użytkownika";
            }
            else {
              echo "konto o tym mailu już istnieje";
            }

        }
        else {
          echo "Wprowadzone hasła są różne!";
        }
      }
      else {
        echo"Wypełnij wszystkie pola!";
      }
    }

     ?>
     <a href="./index.php">Mam konto, chce się zalogować</a>
</html>
