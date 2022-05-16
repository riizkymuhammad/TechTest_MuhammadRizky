<?php
$a = 12;
$b = 2;
$result = 0;
for($x=0;$x < 20; $x++ ){
    if($a < $b){
        break;
    }
    $a = $a-$b;
    $result++;
}

echo $result;
?>