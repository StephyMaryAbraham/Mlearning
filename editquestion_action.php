<?php
session_start();
require("connection.php");

$quesid=$_REQUEST["id"];
$question=$_REQUEST["question"];
$option1=$_REQUEST["option1"];
$option2=$_REQUEST["option2"];
$option3=$_REQUEST["option3"];
$option4=$_REQUEST["option4"];
$ans=$_REQUEST["ans"];

$sql="update tb_questions set question='$question',ans1='$option1',ans2='$option2',ans3='$option3',ans4='$option4',correctans='$ans' where question_id='$quesid'";
$result=$con->query($sql);
$count=$con->affected_rows;


if($count>0)
{
  $_SESSION["session_status"]='success';
 header("location:view_questions.php");
}
else {
  $_SESSION["session_status"]='failed';
  header("location:view_questions.php");
}


?>
