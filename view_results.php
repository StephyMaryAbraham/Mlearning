<?php
include("header.php");
?>

<div id="page-wrapper" >
    <div id="page-inner" style="background-color:CadetBlue;">
      <h1 style="text-align:center;"><div class="well well-sm"><b>Results</b></div></h1>
      <br>


      <table class="table table-condensed">
      <thead>
        <tr>
          <th>Student Reg:no</th>
          <th>Student Name</th>
          <th>Student Branch</th>
          <th>Student Class</th>

          <th>Exam Code</th>

          <th>Result</th>
          <th>Mark</th>


        </tr></thead>
        <tbody>

<?php

$sql="select student_regnum,student_name,student_branch,student_class,exam_code,result,mark from tb_student join tb_result where tb_student.student_id=tb_result.student_id";
$result=$con->query($sql);
$count=$result->num_rows;

if($count>0)
{
while($rows=$result->fetch_assoc())
{
  $student_regnum=$rows['student_regnum'];
  $student_name=$rows['student_name'];
  $student_class=$rows['student_class'];
  $student_branch=$rows['student_branch'];
$exam_code=$rows['exam_code'];
$Result=$rows['result'];
$mark=$rows['mark'];
?>

<tr>
  <td><?php echo $student_regnum; ?></td>
  <td><?php echo $student_name; ?></td>
  <td><?php echo $student_branch; ?></td>
  <td><?php echo $student_class; ?></td>
<td><?php echo $exam_code ?></td>
<td><?php echo $Result ?></td>
<td><?php echo $mark ?></td>
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
