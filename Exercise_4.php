<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Odd or Even</title>
</head>
<body>
<?php
           $x=0;
           for($x ; $x<=20; ++$x){
               if($x%2==0){
                    echo "The number is : ". $x ." is even";
               }
               else if($x%2==1){
                    echo "The number is : ". $x ." is odd";
               }
               else{
                    echo "Not even or odd number";
               }
               echo "<br>";
               echo "<br>";
            }
            ?>
</body>
</html>