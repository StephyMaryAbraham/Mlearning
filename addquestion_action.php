<?php
$ques=$_REQUEST["ques"];

for ($i=1;$i<=$ques;$i++)
{

    echo ('<b>Question no:'.$i.'</b><br><br><br><div class="form-group">
 <div class="row">
  <label for="" class="control-label col-sm-2"> Question:</label>
 
    <div class="col-sm-4">

  <input type="text" class="form-control" name="question[]" id="ques[]" value="" required>
</div>


</div>
</div>




<div class="form-group">
 <div class="row">
  <label for="" class="control-label col-sm-2">Option 1:</label>
  
    <div class="col-sm-4">

  <input type="text" class="form-control" name="option1[]" id="op1" value="" required>
</div>


</div>
</div>



<div class="form-group">
 <div class="row">
  <label for="" class="control-label col-sm-2">Option 2:</label>
  
    <div class="col-sm-4">

  <input type="text" class="form-control" name="option2[]" id="op2" value="" required>
</div>


</div>
</div>


      <div class="form-group">
       <div class="row">
        <label for="" class="control-label col-sm-2">Option 3:</label>
        
          <div class="col-sm-4">

        <input type="text" class="form-control" name="option3[]" id="op3" value="" required>
      </div>


      </div>
      </div>
      
       <div class="form-group">
        <div class="row">
        <label for="" class="control-label col-sm-2">Option 4:</label>
       
          <div class="col-sm-4">

        <input type="text" class="form-control" name="option4[]" id="op4" value="" required>
      </div>


      </div>
      </div>





      <div class="form-group">
       <div class="row">
        <label for="" class="control-label col-sm-2">Correct Answer:</label>
       
          <div class="col-sm-4">

        <select class="form-control" name="ans[]" id="ans" >
            <option value="0">Select correct answer</option>
          <option value="1">1</option>
            <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>

        </select>
       


      </div>
      </div>
      </div>
            <br>
      <br>');

}
 ?>
