<?php
  echo "<pre>";
  print_r($_POST);
  echo "</pre><hr>";
  //isset() - sprawdza czy istnieje (może być pusta ale być)
  // empty sprawdza czy jest pusta, więc negując empty sprawdzasz czy jest wypełniona
  if (!empty($_POST['name']) && !empty($_POST['GeometricFigure'])) {
    switch ($_POST['GeometricFigure']) {
      case 'kwadrat':
        header('location: ./square.php');
        break;
      case 'prostokat':
          header('location: ./rectangle.php');
        break;
    }
    echo "Wypełniłeś dane";
  }
  else {
    ?>
      <script>
      history.back();
      </script>
    <?php
  }
 ?>
