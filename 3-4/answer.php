<?php 
//[question.php]から送られてきた名前の変数、選択した回答、問題の答えの変数を作成

//選択した回答と正解が一致していれば「正解！」、一致していなければ「残念・・・」と出力される処理を組んだ関数を作成する
?>
$name = $_POST['name'];
<p><!--POST通信で送られてきた名前を表示--><?php echo $name;?>さんの結果は・・・？</p>


//[question.php]から送られてきた名前の変数、選択した回答、問題の答えの変数を作成




$Ans1 = $_POST['Ans1'];
$Ans2 = $_POST['Ans2'];
$Ans3 = $_POST['Ans3'];
$correctAns1 = $_POST['correctAns1'];
$correctAns2 = $_POST['correctAns2'];
$correctAns3 = $_POST['correctAns3'];


<p>①の答え</p>
<!--作成した関数を呼び出して結果を表示-->
<?php if ($Ans1 === $correctAns1) {
echo "正解";
}else{
echo "残念・・・";
}
?>


<p>②の答え</p>
<!--作成した関数を呼び出して結果を表示-->
<?php
if($Ans2 === $correctAns2){
    echo "正解";
    }else{  
    echo "残念・・・";
    }
?>


<p>③の答え</p>
<!--作成した関数を呼び出して結果を表示-->
<?php
if($Ans3 === $correctAns3){
    echo "正解";   
    }else{    
    echo "残念・・・";    
    }
?>