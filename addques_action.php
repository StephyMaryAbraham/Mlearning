<?php

session_start();
require("connection.php");




$noques=$_REQUEST["Ques"];


$testid=$_REQUEST["testid"];
$ques=$_REQUEST["question"];
$option1=$_REQUEST["option1"];
$option2=$_REQUEST["option2"];
$option3=$_REQUEST["option3"];
$option4=$_REQUEST["option4"];
$ans=$_REQUEST["ans"];


for ($i=0; $i < sizeof($ques) ; $i++) {



$sql="insert into tb_questions(question,ans1,ans2,ans3,ans4,correctans,testid) value('$ques[$i]','$option1[$i]','$option2[$i]','$option3[$i]','$option4[$i]','$ans[$i]','$testid')";
$result=$con->query($sql);
}

$count=$con->affected_rows;


if($count>0)
{
  $_SESSION["session_status"]='success';
 header("location:add_questions.php");
}
else {
  $_SESSION["session_status"]='failed';
  header("location:add_questions.php");
}

 ?>
