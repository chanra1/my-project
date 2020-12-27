<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>2 degree equation</title>
</head>
<body>
<?php
           $a=2;
           $b=-3;
           $c=1;
           echo " $a x<sup>2</sup> $b x + $c = 0"."<br><br><br>";

           $d= pow($b,2)-4*$a*$c;

           if($d>0){
                $y=sqrt($d);
                $i1=(-$b+$y)/(2*$a);
                $i2=(-$b-$y)/(2*$a);
                echo "The roots of the equation are x<sub>1</sub>= $i1 , x<sub>2</sub>= $i2";
           }
           elseif($d==0){
                $i3=-$b/(2*$a);
                echo "The roots of the equation are x<sub>1</sub> = x<sub>2</sub> = $i3";
           }
           else {
                echo "The roots not real";
           }
           ?>
</body>
</html>