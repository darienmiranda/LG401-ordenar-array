<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  <?php
  $edad = false;
  /*if($edad>18){
    echo "mayor de edad";
  } else {
    echo "menor edad";

  }*/

  //echo $edad>18?"mayor de edad de 18":"menor de edad de 18";
  echo $edad??"la edad no esta";

  ?>
</body>
</html>