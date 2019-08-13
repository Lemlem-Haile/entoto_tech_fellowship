    <?php   
 session_start();
 if(isset($_SESSION['username']))
 {
  $username=$_SESSION['username'];
  ?>
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
             <div style="font-family: Vijaya ;margin-left: 100px;"id="banner">
                <div style="float: right;height: 80px;;width: 400px;">
            <?php echo '<h1> Welcome '.$username; ?><img src="icon/e.jpg" style="border-radius: 200px;margin-left: 70px;"height="50px;"><ul><li style="list-style: none;float: right;margin-top: -70px;"><a style="color: graytext;"href="logout.php">logout</a></li></ul><?php '</h1>';?>
<!--              <tr><td>Username:</td><td><?php // echo $username; ?></td></tr>-->
            </div>
                <h1>Administrator Panel</h1>
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
                <h4 style="color:green;font-style:italic">Wellcome to the system dear <?php   echo $username;?></h4>  
<form name="form1" method="POST" action="" enctype="multipart/form-data">
                    <h3><bold><font style="text-align:center; color: #FF2AD4;">Post news Form</font></strong></h3>
                    <table border="0">
                       
                        <tbody>
                           
                            <tr>
                                <td>Subject</td>
                                <td> <input type="text" name="sub" value="" size="35" /> </td>
                                <td></td>
                            </tr>
                            <tr>
                                
                                <td>Title:</td>
                                <td> <input type="text" name="title" value="" size="35" /> </td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>Date</td>
                                <td> <input type="date" name="date" value="" /> </td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>Content</td>
                                <td> <textarea style="width: 300px;height: 200px"name="content" rows="10" cols="20">
                                    </textarea> </td>
                                <td></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td> <input type="submit" value="Post" name="post" /> </td>
                                <td></td>
                            </tr>
                        </tbody>
                    </table>

                </form>   
                       <?php
 include 'connection.php';
 if(isset($_POST["post"]))
 {
     $sub=$_POST["sub"];
     $date=$_POST["date"];
     $con=$_POST["content"];
     $title=$_POST["title"];
     $sub=$_POST["sub"];
     if ($sub == "" || $con == "" || $date == "") {
         echo '<p style="color:red;font-size:22px;">please enter the above form items</p>';
     }
     else{
         $oper="INSERT INTO `news`(`date`, `content`, `status`,`title`) VALUES('$date','$con','1','$title')";
         $eo= mysqli_query($conn, $oper);
         if ($eo) {
         echo '<p style="color:green;font-size:30px;"> News Submiited Successfully!!!!</p>';
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
                                   <li><a href="viewcomplaint.php">view feedback</a></li>   
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

<?php
 }  else {
 ?>
 <script>
  alert('You Are Not Logged In !! Please Login to access this page');
  window.location='../../finalpro/login.php';
 </script>
 <?php } ?>
