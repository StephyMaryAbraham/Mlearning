<?php
session_start();
require("connection.php");

$id=$_REQUEST["id"];
$sql="delete from tb_questions where question_id='$id'";
$result=$con->query($sql);
$count=$con->affected_rows;
if ($count>0) {
  $_SESSION["delete_session"]='success';
  header("location:view_questions.php");

}
else {
  $_SESSION["delete_session"]='failed';
  header("location:view_questions.php");
}

?>
