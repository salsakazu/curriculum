<?php>

$fruit = array(
    'りんご' => 150,
    'みかん' => 75,
    '桃' => 150
);

$num = [2, 2, 2];

function getPrice($value, $num) {
    $total = $value*$num;
    return $total;  
}

foreach ($fruit as $key => $total)[
    echo $key.'は'$total.'円です。';
]

<?>