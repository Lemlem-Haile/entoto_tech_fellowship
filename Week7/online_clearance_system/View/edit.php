
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
                        <style>
            form table{
                width: 700px;
            }
            form table td{
                text-align: justify;
                color: black;
                font-size: 16px;
                width: 100px;
            }
                form table td input{
                height: 30px;
                          font-size: 16px;

                font-family: times new roman;
                border-radius: 1px;
                background-color: skyblue;
                }
        </style>
    </head>
   
    <form name="form" action="" method="POST" enctype="multipart/form-data">
<?php
include 'connection.php';
$editid=$_GET['edit'];  

$ed="SELECT  * FROM taxpayer1 where tin='$editid'";
$result = mysqli_query($conn, $ed);
while (($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) != NULL) {
         echo '<table>';
        echo '<tr><td>  TIN:</strong></td><td><input type="text" name="tin" readonly value='.$row['tin'].'></td></tr>';   
        echo '<tr><td>  first name :</strong></td><td><input type="text" name="fname"  value='.$row['fname'].'></td></tr>';   
        echo '<tr><td>  middle name:</td><td><input type="text" name="mname" value='.$row['mname'].'></td></tr>';   
        echo '<tr><td>  last name:</td><td><input type="text" name="lname"  value='.$row['lname'].'></td></tr>';   
        echo '<tr><td>  martial status:</td><td><input type="text" name="mstatus"  value='.$row['mstatus'].'></td></tr>';   
        echo '<tr><td>  gender:</td><td><input type="text" name="gender"  value='.$row['gender'].'></td></tr>';   
//        echo '<tr><td>  Photo:</td><td><input type="file" name="photo"  value='.$row['photo'].'></td></tr>';   
//        echo '<tr><td>  Country of birth:</td><td><input type="text" name="cre"  value='.$row[''].'></td></tr>';   
        echo '<tr><td>  country of Residance:</td><td><input type="text" name="cre"  value='.$row['countryresidance'].'></td></tr>';   
        echo '<tr><td>  occupation :</td><td><input type="text" name="occup"  value='.$row['occu'].'></td></tr>';   
        echo '<tr><td>  Name of Institution:</td><td><input type="text" name="nameofin" readonly value='.$row['nameofin'].'></td></tr>';   
        echo '<tr><td>  region:</td><td><input type="text" name="region"  value='.$row['region'].'></td></tr>';   
        echo '<tr><td>  zone :</td><td><input type="text" name="zone"  value='.$row['zone'].'></td></tr>';   
        echo '<tr><td>  woreda:</td><td><input type="text" name="woreda"  value='.$row['woreda'].'></td></tr>';   
        echo '<tr><td>  kebele:</td><td><input type="text" name="kebele" readonly value='.$row['kebele'].'></td></tr>';   
        echo '<tr><td>  houseno:</td><td><input type="text" name="hno"  value='.$row['houseno'].'></td></tr>';   
        echo '<tr><td>  phone numberr:</td><td><input type="text" name="phone"  value='.$row['phone'].'></td></tr>';   
        echo'<tr> <td></td><td colspan="2"><input style="background-color: palegoldenrod;font-size: 19px;height: 30px;width: 130px;"type="submit" name="update" value="update"></td></tr>';

                 echo '</table>';
}
?>
        
<?php
include 'connection.php';
if (isset($_POST["update"])) {
    $tin=$_POST["tin"];
    $fname=$_POST["fname"];
    $mname=$_POST["mname"];
    $lname=$_POST["lname"];
    $mars=$_POST["mstatus"];
    $gender=$_POST["gender"];
//    $photo=$_POST["photo"];
    $cre=$_POST["cre"];
    $occup=$_POST["occup"];
    $nameofin=$_POST["nameofin"];
    $region=$_POST["region"];
    $zone=$_POST["zone"];
    $woreda=$_POST["woreda"];
    $keble=$_POST["kebele"];
    $hno=$_POST["hno"];
    $phone=$_POST["phone"];
    $update="UPDATE `taxpayer1` SET `fname`='$fname',`mname`='$mname',`lname`='$lname',`mstatus`='$mars',`gender`='$gender',`countryresidance`='$cre',`occu`='$occup',`nameofin`='$nameofin',`region`='$region',`zone`='$zone',`woreda`='$woreda',`kebele`='$keble',`houseno`='$hno',`phone`='$phone' where tin='$tin'";
$runu= mysqli_query($conn,$update);
if($runu){
    echo '<p style="color:green;font-style:italic;font-size:20px;font-family:times new roman;font-weight:bold;"> Taxpayer detail Updated successfully<p>';

        header("location:viewtaxpayer.php");

}
 else {
    echo '<p style="color:red;font-style:italic;font-size:20px;font-family:times new roman;font-weight:bold;"> Taxpayer detail not updated successfully<p>';
    
 }
    
    
}

?>
</form>

            </div>
            <div id="sidebar">
                <ul id="nav">  
                        <li style="width: 300px;padding-left: 0px;"><h1 style="font-size: 1em"> manage user account</h1></li>
                        <li><a href="createaccount.php">create account</a></li>
                        <li><a href="viewaccount.php">view account</a></li>   
                        <li><a href="deleteaccount.php">delete account</a></li>   
                        <li><a href="editaccount.php">edit account</a></li>  
                        <li><a href="changepassword.php">change password</a></li>  
                        <li style="width: 300px;padding-left: 0px;"> <h1 style="font-size: 1em"> manage taxpayer</h1></li>
                        <li><a href="register.php">register taxpayer</a></li>
                        <li><a href="viewtaxpayers.php">view taxpayer</a></li>   
                        <li><a href="viewtaxpayer.php">delete taxpayer</a></li>   
                        <li><a href="viewtaxpayer.php">edit taxpayer</a></li>  
                        <li style="width: 300px;padding-left: 0px;"> <h1 style="font-size: 1em">View message</h1></li>
                        <li><a href="viewcomplaint.php">view feedback</a></li>   
                        <li><a href="viewresponce.php">view message</a></li>  
                        <li style="width: 300px;padding-left: 0px;"> <h1 style="font-size: 1em">manage complaint</b></h1></li>
                         <li><a href="viewcomplaint.php">view complaint</a></li>   
                        <li><a href="view responce.php">response complaint</a></li>  

                </ul>
            </div>
            <footer>
                <p>All right Reserved &COPY<?php echo date("\ F \ Y");?></p>
                <p>Developed By Group-6 students</p>
            </footer>
        </div>
    </body>
</html>