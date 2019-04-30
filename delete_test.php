<?php
session_start();
require("connection.php");

$id=$_REQUEST["id"];
$sql="delete from tb_test where testid='$id'";
$result=$con->query($sql);
$count=$con->affected_rows;
if ($count>0) {
  $_SESSION["delete_session"]='success';
  header("location:view_test.php");

}
else {
  $_SESSION["delete_session"]='failed';
  header("location:view_test.php");
}

?>
