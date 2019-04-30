<?php
session_start();
require("connection.php");


$user=$_REQUEST["u"];
$pass=$_REQUEST["p"];




$sql="select * from tb_admin where password='$pass' and username='$user'";
$result=$con->query($sql);
$count=$result->num_rows;

if($count>0)
{
$_SESSION["user_id"]=$user;
$_SESSION["session_status"]='success';

header("location:index.php");

}
else {
$_SESSION["session_status"]='failed';
  header("location:login.php");
}

?>
