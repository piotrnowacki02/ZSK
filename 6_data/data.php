<?php
  //date()
  header('Content-type: text/html; charset=utf-8');
  setlocale(LC_ALL, 'Polish');
  echo "dzień-miesiąc-rok ".date("d-m-Y")."<br>";
  echo date("m-d-y")."<br>";
  echo date("d-M-Y")."<br>";
  echo date("d-F-Y")."<br>";
  echo strftime('%A %d %B %Y')."<br>";
  echo date('G:i:s'),"<br>";
?>
  <script>
    setTimeout(function(){
      window.location.reload();
    }, 1000)
  </script>
 <?php
 $date = getdate();
 echo "<pre>";
 print_r($date);
 echo "</pre>";
 echo date('L'); //rok przestępny
 $lastYear = mktime(0, 0, 0, 3, 0, 2000);
 echo $lastYear;
 ?>
