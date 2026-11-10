
<?php
if (isset($_COOKIE["ciastko"])) {
    $licznik = $_COOKIE["ciastko"] + 1;
} else {
    $licznik = 1;
}
setcookie("ciastko", $licznik , time()+60*60);
echo "$licznik";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $plik =fopen('tekst.txt', 'w');
    $odczyt = fwrite($plik, $licznik);
    //$text =fread($plik, 16);
    $close =fclose($plik);
    
    echo "$odczyt";
    ?>
  
</body>
</html>
<?php

?>