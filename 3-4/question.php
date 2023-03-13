<?php
$name = $_POST['name'];
$question1_arry = ["80", "22", "20", "21"];
$question2_arry = ["PHP", "Python", "JAVA", "HTML"];
$question3_arry = ["join", "select", "insert", "update"];
$correctAns1 = $question1_arry[0];
$correctAns2 = $question2_arry[3];
$correctAns3 = $question3_arry[1];
?>

<p>お疲れ様です<?php echo $name; ?>さん</p>

<h2>①ネットワークのポート番号は何番？</h2>
<!--③ 問題のradioボタンを「foreach」を使って作成する-->
<form action="answer.php" method="post">
<?php foreach ($question1_arry as $value1) ?>
<input type="radio" name="Ans1" value="<?php echo $value1;?>">
<?php echo $value1;?>

<h2>②Webページを作成するための言語は？</h2>
<!--③ 問題のradioボタンを「foreach」を使って作成する-->
<?php foreach ($question2_arry as $value2) { ?>
<input type="radio" name="Ans2" value="<?php echo $value2;?>">
<?php echo $value2;}?>

<h2>③MySQLで情報を取得するためのコマンドは？</h2>
<!--③ 問題のradioボタンを「foreach」を使って作成する-->
<?php foreach ($question3_arry as $value3) { ?>
<input type="radio" name="Ans3"
value="<?php echo $value3;?>">
<?php echo $value3;}?>

<!--問題の正解の変数と名前の変数を[answer.php]に送る-->
<input type="hidden" name="name"
value="<?php echo $name; ?>" />
<input type="hidden" name="correctAns1"
value="<?php echo $correctAns1; ?>" />
<input type="hidden" name="correctAns2"
value="<?php echo $correctAns2; ?>" />
<input type="hidden" name="correctAns3"
value="<?php echo $correctAns3; ?>" />
<input type="submit" value="回答する" />
</form>