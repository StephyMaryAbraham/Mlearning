<?php

include('header.php');




?>
        <!-- /. NAV SIDE  -->



        <div id="page-wrapper" >
            <div id="page-inner" style="background-color:grey;">

<h1 style="text-align:center;"><div class="well well-sm"><b>Edit Question</b></div>
</h1>
<br>
<br>

<?php
$quesid=$_REQUEST["id"];
$sql="select * from tb_questions where question_id='$quesid'";
$result=$con->query($sql);
$count=$result->num_rows;
if ($count>0) {
  $rows=$result->fetch_assoc();


//  print_r($rows);
}
?>

<div class="container">
  <form class="form-horizontal" action="editquestion_action.php?id=<?php echo $quesid; ?>" method="post" id="submitform" >

    <div class="form-group">
    <label for="testname" class="control-label col-sm-2"> Question:</label>

    <div class="col-sm-4">

    <input type="text" class="  form-control" name="question" id="ques"  pattern="[A-Za-z ]+" title="Enter a Character" value="<?php echo $rows['question']; ?>" required>
    </div>



    </div>




    <div class="form-group">
    <label for="" class="control-label col-sm-2">Option 1:</label>
    <div class="row">
    <div class="col-sm-4">

    <input type="test" class="form-control" name="option1" id="op1" value="<?php echo $rows['ans1']; ?>" required>
    </div>


    </div>
    </div>



    <div class="form-group">
    <label for="" class="control-label col-sm-2">Option 2:</label>
    <div class="row">
    <div class="col-sm-4">

    <input type="test" class="form-control" name="option2" id="op2" value="<?php echo $rows['ans2']; ?>" required>
    </div>


    </div>
    </div>


      <div class="form-group">
        <label for="testname" class="control-label col-sm-2">Option 3:</label>
        <div class="row">
          <div class="col-sm-4">

        <input type="text" class="form-control" name="option3" id="op3" value="<?php echo $rows['ans3']; ?>" required>
      </div>


      </div>
      </div>

      <div class="form-group">
        <label for="testname" class="control-label col-sm-2">Option 4:</label>
        <div class="row">
          <div class="col-sm-4">

        <input type="text" class="form-control" name="option4" id="op4" value="<?php echo $rows['ans4']; ?>" required>
      </div>


      </div>
      </div>


      <div class="form-group">
        <label for="" class="control-label col-sm-2">Correct Answer:</label>
        <div class="row">
          <div class="col-sm-4">

        <select class="form-control" name="ans"  id="ans" required >

            <?php
            if( $rows["correctans"]==1) {
                ?>
                <option value="<?php echo $rows['correctans']; ?>"><?php echo $rows['correctans']; ?></option>

                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <?php
            }
           ?>

            <?php
            if($rows['correctans']==2) {
                ?>
                <option value="<?php echo $rows['correctans']; ?>"><?php echo $rows['correctans']; ?></option>

                <option value="3">3</option>
                <option value="4">4</option>
                <option value="1">1</option>
                <?php
            }
            ?>

            <?php
            if($rows['correctans']==3) {
                ?>
                <option value="<?php echo $rows['correctans']; ?>"><?php echo $rows['correctans']; ?></option>

                <option value="4">4</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <?php
            }
            ?>

            <?php
            if($rows['correctans']==4) {
                ?>
                <option value="<?php echo $rows['correctans']; ?>"><?php echo $rows['correctans']; ?></option>

                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <?php
            }
            ?>

        </select>
      </div>


      </div>
      </div>


            <div class="form-group">

                <div class="col-sm-offset-6 col-sm-4">

              <input type="submit" class="btn btn-lg btn-success" value="Update">

            </div>
            </div>

</form>
</div>
</div>

<?php

include('footer.php');

?>
