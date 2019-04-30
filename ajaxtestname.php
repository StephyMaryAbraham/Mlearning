<?php
include('connection.php');


if(isset($_POST['dept_name']) && !empty($_POST['dept_name']))
{
$dept=$_POST['dept_name'];
$sql="select testid,testname from tb_test where department='$dept'";
$result=$con->query($sql);
$count=$result->num_rows;

if($count>0) {
    echo '<option value="0">Select TestName</option>';
    while ($rows = $result->fetch_assoc()) {
        echo '<option value="' . $rows['testid'] . '">' . $rows['testname'] . '</option>';
    }
}
  else
    {
      echo'<option value="">Test Name not available</option>';
    }


}
else{
  echo "error";
}

?>
