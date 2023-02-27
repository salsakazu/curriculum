<?php>

$fruit = array(
    'りんご' => 150,
    'みかん' => 75,
    '桃' => 150
);

forreach ($fruit as $key => $value)[
    echo $key.'は'$value.'円です。';
]

<?>