<?php 
//[question.php]から送られてきた名前の変数、選択した回答、問題の答えの変数を作成

//選択した回答と正解が一致していれば「正解！」、一致していなければ「残念・・・」と出力される処理を組んだ関数を作成する


<p><!--POST通信で送られてきた名前を表示-->echo$_post['text'];さんの結果は・・・？</p>
<p>①の答え</p>
<!--作成した関数を呼び出して結果を表示-->
if($question === 80){

echo "正解";

}elseif($result == 80){

echo "残念・・・";

}


<p>②の答え</p>
<!--作成した関数を呼び出して結果を表示-->
if($question == HTML){

    echo "正解";
    
    }elseif($result == HTML){
    
    echo "残念・・・";
    
    }


<p>③の答え</p>
<!--作成した関数を呼び出して結果を表示-->
if($question == join){

    echo "正解";
    
    }elseif($result == join){
    
    echo "残念・・・";
    
    }

?>