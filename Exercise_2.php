<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Leap Year</title>
</head>
<body>
    <p><?php echo "Found Leap Year <br>"?></p>

    <?php 
    $y = 2000;
    echo "Year = ", $y;
    echo "<br>";
    if ($y % 4 ==0 || $y % 400 == 0 || $y % 400 ==0){
        echo $y, " is Leap Year";
        echo "<br>";
    }
    else {
        echo $y, " is not Leap Year";
    }
    ?>
</body>
</html>