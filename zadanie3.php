<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
      <!-- <form method="Post" name="zadanie3">
        <h2>sprawdz kto ma urodziny</h2>
        <input type="date" name="data" min="2024-01-01" max="2024-12-31" required> 
        <input type="submit" value="wyślij">
    </form> -->
    <?php
    // if (isset($_POST["data"])) {
    //     $data = $_POST["data"];
    //     $format = date('t', strtotime($data));
    //     echo "$format";
    //     // echo strtotime("tomorrow");
    //     //echo date("y");
    // }
    $weekend = strtotime("next friday 13:00");
    $teraz = time();
    $roznica = $weekend - $teraz;
     $minuty = $roznica / 60;
     $godziny = $minuty / 60;
     $dni = $godziny / 24;
    echo "$minuty minut";
    echo "$godziny godzin";
    echo "$dni dni";
    ?>
</body>
</html>