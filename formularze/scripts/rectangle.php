<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Prostokąt</title>
  </head>
  <body>
    <h3>Prostokąt</h3>
    <form method="get">
      <input type="text" name="sideA" placeholder="Podaj bok a"><br><br>
      <input type="text" name="sideB" placeholder="Podaj bok b"><br><br>
      <input type="submit" name="button" value="Oblicz">
    </form>
    <?php
    if (isset($_GET['button'])) {
      if (!empty($_GET['sideA']) && !empty($_GET['sideB'])) {
        $a = str_replace(',','.',$_GET['sideA']);
        $b = str_replace(',','.',$_GET['sideB']);
        $area = $a * $b;
        $circuit = 2*$a + 2*$b;
        echo <<<RESULT
          Pole prostokata wynosi: $area cm<sup>2</sup><br>
          Obwód prostokata wynosi: $circuit cm
          RESULT;
      }
      else {
        echo "Wypełnij dane";
      }
    }
     ?>
  </body>
</html>
