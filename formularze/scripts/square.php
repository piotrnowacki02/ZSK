<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Kwadrat</title>
  </head>
  <body>
    <h3>Kwadrat</h3>
    <form method="get">
      <input type="text" name="sideA" placeholder="Podaj bok a"><br><br>
      <input type="submit" name="button" value="Oblicz">
    </form>
    <?php
    if (isset($_GET['button'])) {
      if (!empty($_GET['sideA'])) {
        $a = str_replace(',','.',$_GET['sideA']);
        $area = pow($a, 2);
        $circuit = 4*$a;
        echo <<<RESULT
          Pole kwadratu wynosi: $area cm<sup>2</sup><br>
          Obwód kwadratu wynosi: $circuit cm
          RESULT;
      }
      else {
        echo "Wypełnij bok a";
      }
    }
     ?>
  </body>
</html>
