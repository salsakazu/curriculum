<?php
$num= $_POST['num'];

    echo '選ばれた数字は'.$num.;
    
    $fortune = array(
        '0'=> 凶,
        '1'=> 小吉,
        '2'=> 小吉,
        '3'=> 小吉,
        '4'=> 中吉,
        '5'=> 中吉,
        '6'=> 中吉,
        '7'=> 吉,
        '8'=> 吉,
        '9'=> 大吉,
         );
         
    foreach ($fortune as $key = $value){
    '選ばれた数字は'echo .$value.;
    } 
    echo date("Y年m月d日", time());
?>