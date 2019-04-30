<?php
session_start();
require("connection.php");


$dept=$_REQUEST["dept"];
$testname=$_REQUEST["testname"];
$sub=$_REQUEST["subject"];
$examcode=$_REQUEST["examcode"];

$sqll="select * from tb_test WHERE exam_code='$examcode' ";
$resultt=$con->query($sqll);
$count=$resultt->num_rows;
if($count>0)
{
    $_SESSION["session_status"] = 'exist';
    header("location:add_test.php");

}

else {
    $sql = "insert into tb_test(department,testname,subject,exam_code) values('$dept','$testname','$sub','$examcode')";
    $result = $con->query($sql);
    $count = $con->affected_rows;


    if ($count > 0) {
        $_SESSION["session_status"] = 'success';
        header("location:add_test.php");
    } else {
        $_SESSION["session_status"] = 'failed';
        header("location:add_test.php");
    }

}
 ?>
