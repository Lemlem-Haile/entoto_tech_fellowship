<?php  

include("viewoffice.php");  
$delete_id=$_GET['del'];  
echo $delete_id;
$delete_query="delete from office WHERE officeId='$delete_id'";//delete query  
$run=mysqli_query($conn,$delete_query);  
if($run)  
{  
//javascript function to open in the same window   
    echo "<script>window.open('Viewoffice.php?deleted=office has been deleted','_self')</script>";  
}  
  
?> 