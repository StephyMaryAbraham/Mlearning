<?php
session_start();
require("connection.php");

$testid=$_REQUEST["id"];
$dept=$_REQUEST["dept"];
$testname=$_REQUEST["testname"];
$sub=$_REQUEST["subject"];
$examcode=$_REQUEST["examcode"];

$sql="update tb_test set department='$dept',testname='$testname',subject='$sub',exam_code='$examcode' where testid='$testid'";
$result=$con->query($sql);
$count=$con->affected_rows;


if($count>0)
{
  $_SESSION["session_status"]='success';
 header("location:view_test.php");
}
else {
    echo $sql;
  $_SESSION["session_status"]='failed';
 // header("location:view_test.php");
}


?>
