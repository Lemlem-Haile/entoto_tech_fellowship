
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title><?php $title; ?></title>
        <link rel="stylesheet" type="text/css" href="style/style.css">
        <link rel="icon" type="img/png" href="../img/pp.png"/>

    </head>
    <body>
        <div id="wrapper">
            <div id="banner">
                
            </div>
            <div id="navigation">
                <ul id="nav">
                    <li  style="width: 100px;padding-left: 100px;"><a href="index.php">Home</a></li>
                    <li style="width: 100px"><a href="postnews.php" >post news</a></li>
                    <li><a href="viewinterviewer.php">assign interviewer</a></li>
                    <li style="width: 150px"><a href="viewreport.php" >generate report</a></li>
                    <li style="width: 100px"><a href="viewreport.php" >view report</a></li>
                    <li style="width: 100px"><a href="logout.php" >logout</a></li>

                </ul>
            </div>
            <div id="contentarea">
               
                <fieldset style="width: 550px;font-size: 20px;padding: 20px;margin-left: 80px;margin-bottom: 60px;background-color: #d0caca;">
            <legend><h3 style="font-style:italic;padding-top: 0px; ">Assign Interviewer Form</h3></legend>
        <form name="form" method="POST" action="schedule.php" >
            <table>

        <?php
        include 'connection.php';
        $assignid=$_GET['uid'];

$ass="SELECT  * FROM user where uid='$assignid'";
$result = mysqli_query($conn,$ass);
while (($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) != NULL) {
    echo '<tr><td>Interviwer Id</td><td><input type="text" name="uid" value="' . $row['uid'] . '"</td></tr>';
    echo '<tr><td>Interviwer Name</td><td><input type="text" name="username" value="' . $row['username'] . '"</td></tr>';
    echo '<tr><td>Interviwer phone</td><td><input type="text" name="phoneno" value="' . $row['phone'] . '"</td></tr>';

}

    ?>
    <?php
//        $ass="SELECT  * FROM taxpayer1";
//$result = mysqli_query($conn,$ass);
?>
<!--    <tr><td>TIN</td><td><select name="tin">-->

<?php
//while (($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) != NULL) {
//           echo'<option value="'.$row["tin"].'">'.$row["tin"].'</option>';
//}  
//echo'</td></tr></select>';
?>
                <?php
$ass="SELECT  * FROM taxpayer1";
$result = mysqli_query($conn,$ass);
?>
 <tr><td>Region</td><td>
         <select name="tname" >

<?php
while (($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) != NULL) {
           echo'<option value="'.$row["region"].'">'.$row["region"].'</option>';
}  
?></td></tr></select>
        <?php $ass="SELECT  * FROM taxpayer1";
$result = mysqli_query($conn,$ass);?>
 <tr><td>Kebele</td><td><select name="tkebele">

<?php
while (($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) != NULL) {
           echo'<option value="'.$row["kebele"].'">'.$row["kebele"].'</option>';
}  
echo'</td></tr></select>';
$ass="SELECT  * FROM taxpayer1";
$result = mysqli_query($conn,$ass);?>
 <tr><td>Woreda</td><td><select name="tworeda">

<?php 
while (($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) != NULL) {
           echo'<option value="'.$row["woreda"].'">'.$row["woreda"].'</option>';
}  
echo'</td></tr></select>';
  $ass="SELECT  * FROM taxpayer1";
$result = mysqli_query($conn,$ass);
?>
 <tr><td>category</td><td>
         <select name="category">
             <option>A</option>
             <option>B</option>
             <option>C</option>
             </select>
             <tr><td>Interviewing start date</td><td> <input type="date" name="startdate" value="" size="50" /> </td></tr></select>
             <tr><td>Interviewing end date</td><td> <input type="date" name="enddate" value="" size="50" /> </td></tr></select>
             <tr><td></td><td><input type="submit" value="assign" name="assign" /></td></tr>
             <?php
mysqli_free_result($result);

echo '</table>';       ?>
             </table>
             </form>
            </fieldset>
            </div>
            <div id="sidebar">
                <ul id="nav1"> 
                    <li>
                        <a href="index.php" class="active"><img src="icon/hom.jpg" style="height: 30px;margin-top: 10px;"> Home</a>
                         </li>
                            <li>
                                <a class="active" href="#"><img src="icon/e.jpg" style="height: 30px;margin-top: 10px;"> Manage User account<span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                   <li><a href="createaccount.php">create account</a></li>
                                <li><a href="viewaccount.php">view account</a></li>   
                                <li><a href="deleteaccount.php">delete account</a></li>   
                                <li><a href="editaccount.php">edit account</a></li>  
                                <li><a href="changepassword.php">change password</a></li>  
                        
                                </ul>
                            </li>
				<li>
                                <a class="active" href="#"><img src="icon/use.jpg" style="height: 30px;margin-top: 10px;"> Manage Taxpayers<span class="fa arrow"></span></a>
                                <ul class=" nav-second-level">
                                  <li><a href="register.php">register taxpayer</a></li>
                        <li><a href="viewtaxpayers.php">view taxpayer</a></li>   
                        <li><a href="viewtaxpayer.php">delete taxpayer</a></li>   
                        <li><a href="viewtaxpayer.php">edit taxpayer</a></li>  
                                </ul>
                                <!-- /.nav-second-level -->
                            </li>			
                     <li>
                         <a class="active" href="#"><img src="icon/3.png" style="height: 30px;margin-top: 10px;"> View Comment<span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                    <li><a href="viewcomment.php">view feedback</a></li>   
                                    <li><a href="viewresponce.php">view message</a></li>   
                                </ul>
                                <!-- /.nav-second-level -->
                            </li>
                            <li>
                                <a class="active" href="#"><img src="icon/ad.png" style="height: 30px;margin-top: 10px;"> Manage Complaint<span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                        <li><a href="viewcomplaint.php">view complaint</a></li>   
                        <li><a href="view responce.php">response complaint</a></li>  
                                </ul>
                                <!-- /.nav-second-level -->
                            </li>
                    
                </ul>
            </div>
            <footer>
                <p>All right Reserved &COPY<?php echo date("\ F \ Y");?></p>
                <p>Developed By Group-6 students</p>
            </footer>
        </div>
    </body>
</html>

