<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Print text by multiplying</title>
</head>
<body>
<?php
        $x=1;
         while($x<=100){
              if($x%3==0 && $x%5==0){
                  echo "CocaCola";
              }
              else if($x%3==0){
                  echo "Coca";
              }
              elseif($x%5==0){
                  echo "Cola";
              }
              else{
                  echo $x;
              }
               ++$x;
               echo "<br>";
         } 
         ?>
</body>
</html>