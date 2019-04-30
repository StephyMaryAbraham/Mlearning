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
<script>

function val()
{

    var dept = document.getElementById("dep");
    var testname = document.getElementById("testn");

    if (dept.value == 0) {
        swal("Select a department");
        dept.focus();
        return false;
    }
    else if (testname.value == 0) {
        swal("Select test name");
        dept.focus();
        return false;

    }
}

        $(document).ready(function(){
        $('#dep').on('change',function(){
            var dept=$(this).val();
            if(dept)
            {
                $.ajax({
                    type:'POST',
                    url:'viewques_testname.php',
                    data:'dept_name='+dept,
                    success:function(testName){
                        $('#testn').html(testName);
                    }
                });
            }
            else {
                $('#testn').html('<option value="">Select department first</option>');
            }
        });

    });


</script>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
          <div id="page-inner" style="background-color:CadetBlue;">
            <h1 style="text-align:center;"><div class="well well-sm"><b>View Questions</b></div></h1>
            <br>

              <div class="container">
                  <form class="form-horizontal" method="post" action="viewques_tstname_action.php" onsubmit="return val()">



                      <div class="form-group">
                          <div class="row">

                          <label for="" class="control-label col-sm-1">Department:</label>

                              <div class="col-sm-3">

                                  <select class="form-control" name="dept" id="dep">
                                      <option value="0">Select department</option>
                                      <option value="CSE">CSE</option>
                                     <option value="EC">EC</option>
                                    <option value="CIVIL">CIVIL</option>
                                   <option value="MECH">MECH</option>
                                      <option value="EEE">EEE</option>
                                    <option value="MCA">MCA</option>
                                     <option value="MBA">MBA</option>
                                  </select>
                              </div>






                          <label for="" class="control-label col-sm-2">Test Name:</label>

                          <div class="col-sm-3">

                                  <select class="form-control" name="testid" id="testn">
                                      <option value="0">Select department first</option>

                                  </select>
                              </div>


                              <div class="col-sm-2">

                                  <input id="submit" type="submit" class="btn btn-sm btn-success" value="OK" onclick="valid()">

                              </div>


                          </div>
                      </div>

                  </form>
              </div>


                      <table class="table table-condensed">
            <thead>
              <tr>
                <th>Department</td>
                <th>Test Name</td>
                <th>Question</th>
                <th>Option 1</th>
                <th>Option 2</th>
                <th>Option 3</th>
                <th>Option 4</th>
                <th>Correct Answer</td>
                <th></td>
                <th></td>


              </tr></thead>
              <tbody>
<?php

          $sql="select * from tb_questions join tb_test on tb_questions.testid=tb_test.testid";
          $result=$con->query($sql);
          $count=$result->num_rows;

          if($count>0)
          {
          while($rows=$result->fetch_assoc())
          {
              $dept=$rows['department'];
          $testname=$rows['testname'];
          $question=$rows['question'];
          $ans1=$rows['ans1'];
          $ans2=$rows['ans2'];
          $ans3=$rows['ans3'];
          $ans4=$rows['ans4'];
          $correctans=$rows['correctans'];
          $ques_id=$rows['question_id'];
?>

          <tr>
          <td><?php echo $dept ?></td>
          <td><?php echo $testname ?></td>
          <td><?php echo $question." ?" ?></td>
          <td><?php echo $ans1 ?></td>
          <td><?php echo $ans2 ?></td>
          <td><?php echo $ans3 ?></td>
          <td><?php echo $ans4 ?></td>
          <td><?php echo $correctans ?></td>
          <td><a href="delete_question.php?id=<?php echo $ques_id?>" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this record?')">Delete</a></td>
          <td><a href="edit_question.php?id=<?php echo $ques_id?>" class="btn btn-info btn-sm" >Edit</a></td>
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
