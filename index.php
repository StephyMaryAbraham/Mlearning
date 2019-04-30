<?php
        include("header.php");

     if(isset($_SESSION["session_status"]))
        {
if($_SESSION["session_status"]=='success')
{
            unset($_SESSION["session_status"]);
            echo "<script>swal('Login Successfull');</script>";


    }
    else if($_SESSION["session_status"]=='failed')
        {
          echo "<script>swal('Failed');</script>";
          unset($_SESSION["session_status"]);
        }

  }



?>

        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner" style="background-color:grey;">

<h1 style="text-align:center;">WELCOME ADMIN</h1>

</div>
<?php
include("footer.php");

?>
