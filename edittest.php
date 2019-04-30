<?php
        include("header.php");



?>

        <!-- /. NAV SIDE  -->

    <!--    <script type="text/javascript">
        function validation()
        {
      var dept=document.getElementById("dep");
      var testname=document.getElementById("testname");
      var subject=document.getElementById("subject");
      var examcode=document.getElementById("examcode");

      if(dept.value==0)
      {
      alert("Please select a department");
      dept.focus();
      return false;
      }
      else if (testname.value=="") {
      alert("Enter the test name");
      testname.focus();
      return false;
      }

      else if(!isNaN(testname.value))
      {
       alert("Enter character");
       testname.focus();
       return false;
      }


      else if (subject.value=="") {
      alert("Enter the subject");
      subject.focus();
      return false;
      }

      else if(!isNaN(subject.value))
      {
       alert("Enter character");
      subject.focus();
       return false;
      }


      else if (examcode.value=="") {
      alert("Enter the Examcode");
      examcode.focus();
      return false;
      }


        }

      </script> -->
      <?php
      $testid=$_REQUEST["id"];
      $sql="select * from tb_test where testid='$testid'";
      $result=$con->query($sql);
      $count=$result->num_rows;
      if ($count>0) {
          $rows=$result->fetch_assoc();
      }


      ?>

        <div id="page-wrapper" >
          <div id="page-inner" style="background-color:grey;">


<h1 style="text-align:center;"><div class="well well-sm"><b>Edit Test</b></div>
</h1>


              <br>
              <br>





              <form class="form-horizontal" action="testedit_action.php?id=<?php echo $testid; ?>" method="post" id="submitform" onsubmit="return validation()" >

                  <div class="container">

                      <div class="form-group">
                          <label for="" class="control-label col-sm-2">Department:</label>
                          <div class="row">
                              <div class="col-sm-4">

                                  <select class="form-control" name="dept" id="dep" required>
                                      <?php
                                      if($rows['department']=='CSE') {
                                          ?>

                                          <option value="<?php echo $rows['department']; ?>"><?php echo $rows['department']; ?></option>
                                          <option value="EC">EC</option>
                                          <option value="CIVIL">CIVIL</option>
                                          <option value="MECH">MECH</option>
                                          <option value="EEE">EEE</option>
                                          <option value="MCA">MCA</option>
                                          <option value="MBA">MBA</option>
                                          <?php
                                      }
                                      ?>

                                      <?php
                                      if($rows['department']=='EC') {
                                          ?>

                                          <option value="<?php echo $rows['department']; ?>"><?php echo $rows['department']; ?></option>
                                          <option value="CSE">CSE</option>
                                          <option value="CIVIL">CIVIL</option>
                                          <option value="MECH">MECH</option>
                                          <option value="EEE">EEE</option>
                                          <option value="MCA">MCA</option>
                                          <option value="MBA">MBA</option>
                                          <?php
                                      }
                                      ?>

                                      <?php
                                      if($rows['department']=='CIVIL') {
                                          ?>

                                          <option value="<?php echo $rows['department']; ?>"><?php echo $rows['department']; ?></option>
                                          <option value="CSE">CSE</option>
                                          <option value="EC">EC</option>
                                          <option value="MECH">MECH</option>
                                          <option value="EEE">EEE</option>
                                          <option value="MCA">MCA</option>
                                          <option value="MBA">MBA</option>
                                          <?php
                                      }
                                      ?>

                                      <?php
                                      if($rows['department']=='MECH') {
                                          ?>

                                          <option value="<?php echo $rows['department']; ?>"><?php echo $rows['department']; ?></option>
                                          <option value="CSE">CSE</option>
                                          <option value="EC">EC</option>
                                          <option value="CIVIL">CIVIL</option>
                                          <option value="EEE">EEE</option>
                                          <option value="MCA">MCA</option>
                                          <option value="MBA">MBA</option>
                                          <?php
                                      }
                                      ?>

                                      <?php
                                      if($rows['department']=='EEE') {
                                          ?>

                                          <option value="<?php echo $rows['department']; ?>"><?php echo $rows['department']; ?></option>
                                          <option value="CSE">CSE</option>
                                          <option value="EC">EC</option>
                                          <option value="CIVIL">CIVIL</option>
                                          <option value="MECH">MECH</option>
                                          <option value="MCA">MCA</option>
                                          <option value="MBA">MBA</option>
                                          <?php
                                      }
                                      ?>

                                      <?php
                                      if($rows['department']=='MCA') {
                                          ?>

                                          <option value="<?php echo $rows['department']; ?>"><?php echo $rows['department']; ?></option>
                                          <option value="CSE">CSE</option>
                                          <option value="EC">EC</option>
                                          <option value="CIVIL">CIVIL</option>
                                          <option value="MECH">MECH</option>
                                          <option value="EEE">EEE</option>
                                          <option value="MBA">MBA</option>
                                          <?php
                                      }
                                      ?>

                                      <?php
                                      if($rows['department']=='MBA') {
                                          ?>

                                          <option value="<?php echo $rows['department']; ?>"><?php echo $rows['department']; ?></option>
                                          <option value="CSE">CSE</option>
                                          <option value="EC">EC</option>
                                          <option value="CIVIL">CIVIL</option>
                                          <option value="MECH">MECH</option>
                                          <option value="EEE">EEE</option>
                                          <option value="MCA">MCA</option>
                                          <?php
                                      }
                                      ?>





                                  </select>
                              </div>


                          </div>
                      </div>


                      <div class="form-group">
                          <label for="testname" class="control-label col-sm-2">Test Name:</label>
                          <div class="row">
                              <div class="col-sm-4">

                                  <input type="text" class="form-control" name="testname" id="testname" pattern="[A-Za-z ]+" title="Enter the test name in charaters" value="<?php echo $rows["testname"]; ?>" required>
                              </div>


                          </div>
                      </div>




                      <div class="form-group">
                          <label for="" class="control-label col-sm-2">Subject:</label>
                          <div class="row">
                              <div class="col-sm-4">

                                  <input type="text" class="form-control" name="subject" id="subject" pattern="[A-Za-z ]+" title="Enter the Subject in characters" value="<?php echo $rows["subject"]; ?>" required>
                              </div>


                          </div>
                      </div>





                      <div class="form-group">
                          <label for="" class="control-label col-sm-2">Exam Code:</label>
                          <div class="row">
                              <div class="col-sm-4">

                                  <input type="text" class="form-control" name="examcode" id="examcode" value="<?php echo $rows["exam_code"]; ?>" required>
                              </div>


                          </div>
                      </div>


                     


                      <div class="form-group">

                          <div class="col-sm-offset-6 col-sm-2">

                              <input type="submit" class="btn btn-lg btn-success" id="sub" value="Update">

                          </div>
                      </div>
                  </div>
              </form>
</div>


<?php
include("footer.php");

?>
