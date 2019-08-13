<?php  

include("viewinterviewr.php");  
$assignid=$_GET['assign'];  
$fname=$_GET['fname'];  
$mname=$_GET['mname'];  
$lname=$_GET['lname'];  
$sex=$_GET['sex'];  
$phone=$_GET['phone'];  
$delete_query="INSERT INTO `schedule` (`uid`, `fname`, `lname`, `mname`, `sex`, `phone`) VALUES ('$assignid','$fname','$mname','$lname','$sex','$phone')";//delete query  
$run=mysqli_query($conn,$delete_query);  
if($run)  
{  
//javascript function to open in the same window   
    echo "<script>window.open('Viewtaxpayer.php?assigned=interviewer has been assigned','_self')</script>";  
}  
  
?> 