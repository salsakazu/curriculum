<?php

$fruit = array(
    'りんご' => 150,
    'みかん' => 75,
    'もも' => 1500
);

$num = [2, 2, 2];

function getPrice($value, $num) {
    $total = $value*$num;
    return $total;  
}

$i=0;
foreach ($fruit as $key => $value){
    echo $key.'は'.getPrice($value,$num[$i]).'円です。';
    echo "<br>";
    $i++;

}

?>