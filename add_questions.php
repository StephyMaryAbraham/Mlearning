<?php
        include("header.php");

        if(isset($_SESSION["session_status"]))
           {
        if($_SESSION["session_status"]=='success')
        {
               unset($_SESSION["session_status"]);
               echo "<script>swal('Successfully Added');</script>";
        }

        else if($_SESSION["session_status"]=='failed')
        {
          echo "<script>swal('Failed');</script>";
          unset($_SESSION["session_status"]);
        }

        }



?>

<script type="text/javascript">

   


$(document).ready(function(){
  $("#noques").keyup(function(){
    var Ques=$("#noques").val();
    $.get("addquestion_action.php?ques="+Ques,function(data,status){
      document.getElementById("divques").innerHTML=(data);

    });
  });
});

$(document).ready(function(){
  $('#dep').on('change',function(){
    var dept=$(this).val();
    if(dept)
    {
      $.ajax({
        type:'POST',
        url:'ajaxtestname.php',
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





function validation() {
    var testname = document.getElementById("testn");
    var dept = document.getElementById("dep");

    if (dept.value == 0) {
        dept.focus();
        swal("Select a department");


    }
    else if (testname.value == 0) {
        testname.focus();
        swal("select a test name");
    }
}









</script>
<script>

    function valid() {

            var cor_ans = document.getElementById("ans");
            if (cor_ans.value == 0) {
                cor_ans.focus();
                swal("Select a correct answer");

                return false;
            }


    else
        {
            return true;
        }
    }
    </script>




        <div id="page-wrapper" >
            <div id="page-inner" style="background-color:grey;">

  <h1 style="text-align:center;"><div class="well well-sm"><b>Add Questions</b></div>
  </h1>
  <br>
  <br>
                <div class="container">
    <form class="form-horizontal" method="post" action="addques_action.php" onsubmit="return valid()" >



      <div class="form-group">
          <div class="row">
        <label for="" class="control-label col-sm-2">Department:</label>

          <div class="col-sm-4">

        <select class="form-control" name="dept" id="dep">
            <option value="0">Select a department</option>
          <option value="CSE">CSE</option>
            <option value="EC">EC</option>
              <option value="CIVIL">CIVIL</option>
                <option value="MECH">MECH</option>
                <option value="EEE">EEE</option>
              <option value="MCA">MCA</option>
              <option value="MBA">MBA</option>
        </select>
      </div>


      </div>
      </div>

      <div class="form-group">
          <div class="row">
        <label for="" class="control-label col-sm-2">Test Name:</label>

          <div class="col-sm-4">

        <select class="form-control" name="testid" id="testn">
            <option value="0">Select department first</option>

        </select>
      </div>


      </div>
      </div>







      <div class="form-group">
          <div class="row">
        <label for="testname" class="control-label col-sm-2">Number of Questions:</label>

          <div class="col-sm-1">

        <input type="text" class="form-control" name="Ques" id="noques" pattern="[0-9]{1,2}$" title="Enter the number of questions" value="" onfocus="validation()" required>
      </div>


      </div>
      </div>
      <br>
      <br>

      <div id="divques">

      </div>




      <br>/


      <div class="form-group">
          <div class="row">
          <div class="col-sm-offset-6 col-sm-4">

        <input id="submit" type="submit" class="btn btn-lg btn-success" value="ADD" >

      </div>
      </div>
      </div>

    </form>
</div>
</div>

<?php
include("footer.php");

?>
