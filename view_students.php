<?php
include("header.php");

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
        <div id="page-wrapper" >
            <div id="page-inner" style="background-color:CadetBlue;">
              <h1 style="text-align:center;"><div class="well well-sm"><b>List of Students</b></div></h1>
              <br>


              <table class="table table-condensed">
              <thead>
                <tr>

                  <th>Register Number</th>
                  <th>Student Name</th>
                  <th>Date of Birth</th>
                  <th>Class</th>
                  <th>Branch</th>
                  <th>Phone Number</th>
                  <th>Email</th>
                  <th>SecKey</th>
                  <th></th>


                </tr></thead>
                <tbody>

<?php

$sql="select * from tb_student";
$result=$con->query($sql);
$count=$result->num_rows;

if($count>0)
{
while($rows=$result->fetch_assoc())
{
  $student_id=$rows['student_id'];
  $student_regnum=$rows['student_regnum'];
  $student_name=$rows['student_name'];
  $student_dob=$rows['student_dob'];
  $student_class=$rows['student_class'];
  $student_branch=$rows['student_branch'];
  $phonenumber=$rows['phonenumber'];
  $email=$rows['email'];
  $secKey=$rows['secKey'];
?>

<tr>

  <td><?php echo $student_regnum ?></td>
  <td><?php echo $student_name ?></td>
  <td><?php echo $student_dob ?></td>
  <td><?php echo $student_class ?></td>
  <td><?php echo $student_branch ?></td>
  <td><?php echo $phonenumber ?></td>
  <td><?php echo $email ?></td>
  <td><?php echo $secKey ?></td>
  <td><a href="delete_student.php?id=<?php echo $student_id?>" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this record?')">Delete</a></td>
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
