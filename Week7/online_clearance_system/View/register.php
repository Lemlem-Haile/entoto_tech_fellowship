


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
               
                <form name="form" id="form" action="" method="POST" >
                    <table>
                        <tbody>
                            <tr><td colspan="3"><h2>Tax Payer Registration form</h2></td></tr>    

                            
                            <tr>
                                <td colspan="3"><b>Tax payer profile</b></td>
                            </tr>
    <tr><td></td><td><p style="color:red" id="error"></p></td></tr>
                            <tr>
                                <td><span>First name</span> </td>
                                <td style="width:120px;"> <input type="text" name="fname" id="fname" value="" placeholder="Enter first name"/> </td>
                                <td><span>Middle name</span></td>
                                <td> <input type="text" name="mname" id="mname" value="" placeholder="Enter middle name"/> </td>
                            </tr>
                            <tr>
                                <td><span>Last name</span></td>
                                <td><input type="text" name="lname" id="lname" value="" placeholder="Enter Last name"/></td>
                            </tr>
                            
                            <tr>
                                <td>Martial Status</td>
                                <td> <select name="type" id="type">
                                        <option value=""></option> selected
                                        <option value="single">single</option>
                                        <option value="married">married</option>
                                        <option value="divorced">divorced</option>
                                    </select> </td>
                                <td><span>Gender</span></td>
                                <td><select name="gender">
                                        <option value="male">male</option>
                                        <option value="female">female</option>
                                    </select> </td>
                            </tr>
             <tr><td><span>Year</span></td>
                                <td><select name="year">
                                        <option value="">2001</option>
                                        <option value="">2002</option>
                                        <option value="">2003</option>
                                        <option value="">2004</option>
                                        <option value="">2005</option>
                                        <option value="">2006</option>
                                        <option value="">2007</option>
                                        <option value="">2008</option>
                                        <option value="">2009</option>
                                        <option value="">2010</option>
                                        <option value="">2011</option>
                                        <option value="">2012</option>
                                        <option value="">2013</option>
                                        <option value="">2014</option>
                                        <option value="">2015</option>
                                        <option value="">2016</option>
                                        <option value="">2018</option>
                                        <option value="">2019</option>
                                        <option value="">2020</option>
                                        <option value="">2021</option>
                                        <option value="">2022</option>
                                        <option value="">2023</option>
                                        <option value="">2024</option>
                                        <option value="">2025</option>
                                        <option value="">2026</option>
                                    </select> </td>
                            </tr>
                               <tr>
                                <td>Dob</td>
                                <td> <input type="date" name="dob" value="" /> </td>
                                <td></td>
                            </tr> 

                            <tr>
                                <td>Photo</td>
                                <td> <input type="file" name="photo" value="" /> </td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>COuntry of residence</td>
                                <td> <input type="text" name="residence" value="" /> </td>
                                <td><span>Country of Birth</span></td>
                                 <td> <input type="text" name="birth" value="" /> </td>

                            </tr>
                            
                          
                            <tr>
                                <td colspan="3"><b>Employment information</b></td>
                            </tr>
                            <tr>
                                <td><span>Occupation</span></td>
                                <td>
                                    <select name="occupation">
                                        <option value="employee">Employee</option>
                                        <option value="trader">Trader</option>
                                        <option value="self employee">self Employee</option>
                                    </select>
                                </td>
                               

                                <td>Name of Institution</td>
                                <td> <input type="text" name="inst" value="" /> </td>
                                <td></td>
                            </tr>
                            <tr>
                                <td colspan="3"><b>Home Address</b></td>
                            </tr>  
                            <tr>
                                <td><span>Region</span></td>
                                <td> <select name="region">
                                        <option>Amhara</option>
                                        <option>Tigray</option>
                                        <option>AddisAbbeba</option>
                                        <option>Oromia</option>
                                        <option>Afar</option>
                                        <option>Somali</option>
                                        <option>Benshangul</option>
                                        <option>SNNP</option>
                                        <option>Gambela</option>
                                        <option>Harrar</option>
                                    </select> </td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>Zone</td>
                                <td> <input type="text" name="zone" value="" /> </td>
                              
                           
                                <td>Woreda</td>
                                <td> <input type="text" name="woreda" value="" /> </td>
                            </tr>  
                            <tr>
                                <td>Kebele</td>
                                <td> <input type="text" name="kebele" value="" /> </td>
                            
                                <td>House No</td>
                                <td> <input type="text" name="hno" value="" /> </td>
                            </tr> 
                            <tr>
                                <td>Applicant name and signature</td>
                                <td> <textarea name="ns" rows="4" cols="20">
                                </textarea> </td>
                                <td><span>Applicant Phone no</span></td>
                                <td><input type="text" name="phone"></td>
                            </tr>
                                 <script>
                                   function take(){
                                       var networth=document.getElementById("ver").value;
                                       var moin;
                                       var anin;
                                       if(networth !=""){
                                           alert("Networth field can not be empty");
                                       }
                                       if(networth !=""){
                                       if(networth >1000000){
                                       document.getElementById("aut").value="A";
                                        }
                                       else if(networth >=500000 && networth <=1000000){
                                         document.getElementById("aut").value="B";
                                         }
                                         else{
                                             document.getElementById("aut").value="C";
                                             return true;

                                            }
                                         
                                       }
                                       
                                   }
                                   </script>
                            <tr>
                                <td>Networth</td>
                                <td> <input type="text" id="ver" name="ver"> </td>
                                <td><span>Category</span></td>
                                <td><input type="text" id="aut" name="aut" onclick="take();"></td>
                            </tr>
                    <tr><td> </td><td><input type="submit" name="register"  value="Register" onclick="return validate_regform();" style="width:200px" /><td><input type="reset" value="cancel" name="cancel"  style="width:200px"/> </td></tr>
                        </tbody>
                    </table>

                </form>
                <?php

$conn = mysqli_connect('localhost', 'root', '', 'tax', '3306');
if (!$conn) {
    die('Could not connect to MySQL: ' . mysqli_connect_error());
}
 if(isset($_POST["register"])){
        $fname=$_POST["fname"];
        $mname=$_POST["mname"];
        $lname=$_POST["lname"];
        $martial=$_POST["type"];
        $sex=$_POST["gender"];
        $dob=$_POST["dob"];
	$phot=$_POST["photo"];
        $residence=$_POST["residence"];
        $birth=$_POST["birth"];
        $occup=$_POST["occupation"];
        $inst=$_POST["inst"];
        $region=$_POST["region"];
        $zone=$_POST["zone"];
        $woreda=$_POST["woreda"];
        $kebele=$_POST["kebele"];
        $hno=$_POST["hno"];
        $ns=$_POST["ns"];
        $phone=$_POST["phone"];
        $ver=$_POST["ver"];
        $aut=$_POST["aut"];
         $checkavail="Select * from taxpayer1 where fname='$fname' AND mname='$mname' AND lname='$lname'";
        $sol= mysqli_query($conn, $checkavail);
        $count= mysqli_num_rows($sol);
        if ($count == 0){
      $sa="INSERT INTO tax.taxpayer1 (fname, mname, lname, mstatus, gender, dob, photo, countrybirth, countryresidance, occu, nameofin, region, `zone`, woreda, kebele, houseno, appname, phone, Networth, Category) 
	VALUES('$fname','$mname','$lname','$martial','$sex','$dob','$phot','$residence','$birth','$occup','$inst','$region','$zone','$woreda','$kebele','$hno','$ns','$phone','$ver','$aut')";

$res1= mysqli_query($conn,$sa) ;
        
        if($res1){
            
            $sel="Select * from taxpayer1 where fname='$fname' AND mname='$mname' AND lname='$lname'";
            $out= mysqli_query($conn, $sel);
            if($out){
                while ($row = mysqli_fetch_array($out)) {
                      $assignedtin=$row['tin'];
                      
                      echo 'Dear '.$row['fname'].'Your taxpayer identification number after this time is '.$assignedtin.'';
                      ?><a href="viewpro.php?pro=<?php echo $assignedtin; ?>">view profile</a>;
                      <a href="viewpro.php?registered=<?php echo $assignedtin; ?>"></a>;
                          <?php
                }

        
        
            }
            echo '</table>';
                ?>
                      <p style="color: green;font-size: 20px;font-weight: bold;font-style: italic;">"You registered successfully !!!!!!!!!"</p>

            <script type="text/javascript">

            window.open('register.php') ;    
                    </script>
 <?php
        }      
 else {
     
            ?>
                 <p style="color: red;font-size: 20px;font-weight: bold;font-style: italic;">You have Registerd Before</p> 
            <script type="text/javascript">
            window.open('register.php','_self') ;    
                    </script>
 <?php
    }
    }
     else{
        echo '<p style="color: red;font-size: 20px;font-weight: bold;font-style: italic;">You have Registerd Before</p> ';
         $sel="Select * from taxpayer1 where fname='$fname' AND lname='$lname'";
            $out= mysqli_query($conn, $sel);
            while ($row = mysqli_fetch_array($out)) {
                      $assignedtin=$row['tin'];
                      echo '<p style="color: green;font-size: 18px;font-style: normal;">Your TIN is '.$row['tin'];?>
                    <td><a href="viewpro.php?pro=<?php echo $assignedtin; ?>">view profile</a></p></td> 
 <?php
            }

     }
 } 

?>
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
                <p>All right Reserved &COPY <?php echo date("d/m/y");?></p>
                <p>Developed By Group-6 students</p>
            </footer>
        </div>
    </body>
</html>
