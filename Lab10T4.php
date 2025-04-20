<?php
$x = 3;
$y = 2;
$z = 8;
echo "x=3<br>";
echo "y=2<br>";
echo "z=8<br>";
if ($x > $y && $x > $z) {
    echo "$x is the greatest";
} elseif ($y > $z) {
    echo "$y is the greatest";
} else {
    echo "$z is the greatest";
}
?>
