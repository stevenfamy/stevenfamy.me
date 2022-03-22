<?php
for ($y = 2; $y <= 11; $y++) {
    $y1 = sprintf('%02d', $y);
    for ($x = 1; $x <= 132; $x++) {
        $x2 = sprintf('%03d', $x);

        echo "<img height='20%' src='https://fileak.upbatam.ac.id/fotomhs/20".$y1."10".$x2.".jpg?time=20210922213402' /> 20".$y1."10".$x2;
    }
}

?>
