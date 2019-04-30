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
              <h1 style="text-align:center;"><div class="well well-sm"><b>List of Teachers</b></div></h1>
              <br>


              <table class="table table-condensed">
              <thead>
                <tr>

                  <th>Register Number</th>
                  <th>Teacher Name</th>
                  <th>Branch</th>
                  <th>Designation</th>
                  <th>Phone Number</th>
                  <th>Email Id</th>
                  <th></th>



                </tr></thead>
                <tbody>

<?php

$sql="select * from tb_teacher";
$result=$con->query($sql);
$count=$result->num_rows;

if($count>0)
{
while($rows=$result->fetch_assoc())
{
  $teacherid=$rows['teacher_id'];
  $teacher_regno=$rows['teacher_regno'];
  $teacher_name=$rows['teacher_name'];
  $teacher_branch=$rows['teacher_branch'];
  $designation=$rows['designation'];
  $phonenumber=$rows['phonenumber'];
  $email=$rows['email'];
?>

<tr>

  <td><?php echo $teacher_regno ?></td>
  <td><?php echo $teacher_name ?></td>
  <td><?php echo $teacher_branch ?></td>
  <td><?php echo $designation ?></td>
  <td><?php echo $phonenumber ?></td>
  <td><?php echo $email ?></td>
  <td><a href="delete_teacher.php?id=<?php echo $teacherid?>" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this record?')">Delete</a></td>
</tr>

<?php
}

}
?>
</tbody>
</table>
</div >

<?php


include("footer.php");

?>
