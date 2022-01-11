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
    <h2>LOGOWANIE</h2>
    <form action="index.php" method="post">
      <input type="text" name="mail" placeholder="wpisz email"><br>
      <input type="password" name="pass1" placeholder="wpisz hasło"><br>
      <input type="submit" value="Zaloguj">
    </form>
    <?php
    $password = 'Hello';
    $passwordHash = password_hash($password, PASSWORD_ARGON2ID);
    echo $passwordHash;
    if(empty($_POST))
    {
      return;
    }
    if(empty($_POST['mail']) || empty($_POST['pass1']))
    {
      echo "uzupełnij wszystkie pola!";
      return;
    }
    $mail = $_POST['mail'];
    $password = $_POST['pass1'];
    $conn = new mysqli("localhost","root","","logowanie");
    $sql = "select password from users where mail ="."'".$mail."';";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    $passwordHash = $row['password'];
    if (password_verify($password, $passwordHash)) {
        echo 'Zalogowano<br>';
    } else {
        echo 'Błędne hasło<br>';
    }
  ?>
  <a href="./register.php">Nie mam konta, chce się zarejestrować</a>
</html>
