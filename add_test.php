<?php

include('header.php');

if(isset($_SESSION["session_status"]))
   {
if($_SESSION["session_status"]=='success')
{
       unset($_SESSION["session_status"]);
       echo "<script>swal('Successfully Added');</script>";
}

else if($_SESSION["session_status"]=='failed')
{
  echo "<script>swal('');</script>";
  unset($_SESSION["session_status"]);
}

else if($_SESSION["session_status"]=='exist')
{
    echo "<script>swal('Exam code already exist');</script>";
    unset($_SESSION["session_status"]);
}
}



?>


        <!-- /. NAV SIDE  -->

     <!--   <script>
$(document).ready(function(){
  $("#sub").click(function(){
    add();
  });
});

function add()
{
  var dept=$("#dep").val();
  var testname=$("#testname").val();
  var subject=$("#subject").val();
  var examcode=$("#examcode").val();

if(dept==0)
{
$(".error").show().html("Please select a department.");
}

else if(testname=="")
{
$(".error").show().html("You must fill the fields.");
}

else if(subject=="")
{
$(".error").show().html("You must fill the fields.");
}

else if(examcode=="")
{
$(".error").show().html("You must fill the fields.");
}

else{
        $(".error").hide();
        $("#submitform").submit();
    }

}


        </script>-->

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

      </script>-->


        <div id="page-wrapper" >
            <div id="page-inner" style="background-color:grey;">

<h1 style="text-align:center;"><div class="well well-sm"><b>ADD Test</b></div>
</h1>
<br>
<br>



                <script>





      $(document).ready(function(){

      });


function departmentcheck(){
  var dep=document.getElementById('dep');
  if(dep.value=='0'){
      dep.focus();
    swal('Select a proper department');

  }


}

</script>


<div class="container">
  <form class="form-horizontal" action="addtest_action.php" method="post" id="submitform" onsubmit="return validation()" >
<div class="col-sm-12">

    <div class="form-group">

      <label for="" class="control-label col-sm-2">Department:</label>
        <div class="col-sm-4">

      <select class="form-control" name="dept" id="dep" required>
          <option value="0">Select department</option>
        <option value="CSE">CSE</option>
          <option value="EC">EC</option>
          <option value="MECH">MECH</option>
            <option value="CIVIL">CIVIL</option>
              <option value="EEE">EEE</option>
              <option value="MCA">MCA</option>
              <option value="MBA">MBA</option>
      </select>
    </div>



    </div>
    </div>
      <br>



      <div class="col-sm-12">

<div class="form-group">
  <label for="testname" class="control-label col-sm-2">Test Name:</label>

    <div class="col-sm-4">

  <input type="text" class="form-control" name="testname" id="testname" value="" pattern="[A-Za-z ]+" title="Enter the test name in charaters" required onfocus="departmentcheck()">
</div>



</div>
</div>
<br>




      <div class="col-sm-12">

<div class="form-group">

  <label for="" class="control-label col-sm-2">Subject:</label>

    <div class="col-sm-4">

  <input type="test" class="form-control" name="subject" id="subject" value="" pattern="[A-Za-z ]+" title="Enter the Subject in characters" required>
</div>



</div>
</div>

<br>

      <div class="col-sm-12">

<div class="form-group">

  <label for="" class="control-label col-sm-2">Exam Code:</label>

    <div class="col-sm-4">

  <input type="test" class="form-control" name="examcode" id="examcode" value="" required>
</div>





</div>
</div>

<br>



      <div class="col-sm-12">

<div class="form-group">

    <div class="col-sm-offset-6 col-sm-4">

  <input type="submit" class="btn btn-lg btn-success" id="sub" value="Add">


</div>
</div>
</div>
</form>
</div>
</div>


<?php

include('footer.php');

?>
