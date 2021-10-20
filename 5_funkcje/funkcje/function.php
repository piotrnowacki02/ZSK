<?php
  function show()
  {
    echo "SHOW";
  }

  function show1($name)
  {
    if(!empty($_POST[$name]))
    {
      echo $_POST[$name];
    }
  }
  function stringValidate($string, $length)
  {
    $string = trim($string);
    $string = strtolower($string);
    $string = ucfirst($string);
    $string = substr($string, 0, $length);
    return $string;
  }
 ?>
