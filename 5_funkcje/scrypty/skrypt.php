<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      require_once '../funkcje/function.php';
      show();

      ECHO '<hr><br><br>';
      show1('name');
      ECHO '<br><br>';
      show1('surname');
      ECHO '<br><br>';
      echo stringValidate("   frANciszke", 6);
     ?>
  </body>
</html>
