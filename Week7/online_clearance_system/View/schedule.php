<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        // put your code here
        include 'connection.php';
        if (isset($_POST["assign"])) {
            $uid=$_POST["uid"];
            $username=$_POST["username"];
            $phoneno=$_POST["phoneno"];
            //$tin=$_POST["tin"];
            $tname=$_POST["tname"];
            $tkebel=$_POST["tkebele"];
            $tworeda=$_POST["tworeda"];
            $cated=$_POST["category"];
            $startdate=$_POST["startdate"];
            $enddate=$_POST["enddate"];
      $checkass="SELECT * FROM `schedule` where uid='$uid'";
      $me= mysqli_query($conn, $checkass);
      $noofta= mysqli_num_rows($me);
      if ($noofta>=1) {
          echo 'already assigned';
      }
 else {  $set="INSERT INTO `schedule`(`uid`, `interviwername`, `phone`, `region`, `taxpayer_kebele`, `woreda`, `category`, `interviewdate`, `interview_end_date`, `status`)"
         . " VALUES ('$uid','$username','$phoneno','$tname','$tkebel','$tworeda','$cated','$startdate','$enddate','assigned')";
      
            $asos= mysqli_query($conn, $set);
            if ($asos) {
                echo 'Assigned successfulyy';
            }
 else {
                echo 'not assigned because of some error';
}
            
 }     
            
        }
        ?>
    </body>
</html>
