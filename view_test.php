<?php
        include("header.php");

        if(isset($_SESSION["session_status"]))
           {
        if($_SESSION["session_status"]=='success')
        {
               unset($_SESSION["session_status"]);
               echo "<script>swal('Successfully Updated');</script>";
        }

        else if($_SESSION["session_status"]=='failed')
        {
          echo "<script>swal('Failed');</script>";
          unset($_SESSION["session_status"]);
        }

        }

        if(isset($_SESSION["delete_session"]))
           {
        if($_SESSION["delete_session"]=='success')
        {
               unset($_SESSION["delete_session"]);
               echo "<script>swal('Successfully Deleted');</script>";
        }

        else if($_SESSION["delete_session"]=='failed')
        {
          echo "<script>swal('Failed');</script>";
          unset($_SESSION["delete_session"]);
        }

        }

?>

        <!-- /. NAV SIDE  -->

<!--<script>

function deleletconfig(){

var del=confirm("Are you sure you want to delete this record?");
if (del==true){
   swal("record deleted");
}
return del;
}
</script>-->




</script>


        <div id="page-wrapper" >
            <div id="page-inner" style="background-color:CadetBlue;">
              <h1 style="text-align:center;"><div class="well well-sm"><b>List of Tests</b></div></h1>
              <br>


              <table class="table table-condensed">
              <thead>
                <tr>

                  <th>Department</th>
                  <th>Subject</th>
                  <th>Test Name</th>
                  <th>Exam Code</th>
                
                  <th></th>
                  <th></th>


                </tr></thead>
                <tbody>
<?php

$sql="select department,testid,testname,subject,exam_code from tb_test";
$result=$con->query($sql);
$count=$result->num_rows;

if($count>0)
{
while($rows=$result->fetch_assoc())
{
  $testid=$rows['testid'];
  $dept=$rows['department'];
  $subject=$rows['subject'];
  $testname=$rows['testname'];
  $examcode=$rows['exam_code'];

?>

<tr>

  <td><?php echo $dept ?></td>
  <td><?php echo $subject ?></td>
  <td><?php echo $testname ?></td>
  <td><?php echo $examcode ?></td>

  <td><a href="delete_test.php?id=<?php echo $testid?>" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this record?')">Delete</a></td>
  <td><a href="edittest.php?id=<?php echo $testid?>" class="btn btn-info btn-sm" >Edit</a></td>
</tr>

<?php
}

}
?>
</tbody>
</table>
</div>
<?php
include("footer.php");

?>
