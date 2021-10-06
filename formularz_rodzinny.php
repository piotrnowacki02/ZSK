<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>średni wiek</title>
  </head>
  <body>
    <?php
      if(!isset($_POST['person']) || empty($_POST['person']) && !isset($_POST['buttonAVG']))
      {
        if (isset($_GET['redirection'])) {
          ECHO 'WITAJ Z POWROTEM';
        }
        echo <<< FORMCOUNTUSER
        <h3>Ilość osób w rodzinie</h3>
        <form method="post">
          <input type="number" name="person" placeholder="Podaj ilość osób"><br><br>
          <input type="submit" value="Zatwierdź">
        </form>
      FORMCOUNTUSER;
      }


      if (!empty($_POST['person'])) {
        echo <<< FORMAGE
        <h3>Ilość osób w rodzinie: $_POST[person]</h3>
        <form method="post">
        FORMAGE;
          for ($i=1; $i <= $_POST['person']; $i++) {
            echo "<input type='number' name='person$i' placeholder='Podaj wiek osoby nr $i'><br><br>";
          }
        echo <<< FORMAGE
          <input type="submit" name="buttonAVG" value="Sredni wiek">
        </form>
        FORMAGE;
      }

      if(isset($_POST['buttonAVG']))
      {
        //print_r($_POST);
        $avg = 0;
        $count = 0;
        foreach ($_POST as $key => $value) {
          //echo "$key: $value<br>";
          if(is_numeric($value))
          {
            $avg += $value;
            $count++;
          }
        }
        $avg /= $count;
        print("Sredni wiek to: ".number_format($avg,2));
      }
      echo '<a href="formularz_rodzinny.php?redirection=true"><br><hr><br>Strona główna</a>';
     ?>

  </body>
</html>
