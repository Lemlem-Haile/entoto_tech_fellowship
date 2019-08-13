<?php 
    include_once('./template/header.php');
    $output = "";
    if(isset($_POST['btnSetting'])){
        include_once('../Controller/AccountController.php');
        session_start();
        $id = $_SESSION['id'];
        $accountController = new AccountController();
        $output = $accountController->changePassword($id,$_POST['password']);
    }

?>
<!-- Default form login -->
<div class="container mb-5" style="margin-top:80px;">
            <div class="row">
                <div class="col-md-6 offset-3 mt-5">
                    <!-- Material form register -->
                    <div class="card">

                    <h5 class="card-header bg-warning text-white text-center py-4">
                        <strong>Change Password</strong>
                    </h5>

                    <!--Card content-->
                    <div class="card-body px-lg-5 pt-0">

                        <!-- Form -->
                        <form class="text-left mt-5" method="POST" style="color: #757575;" action="setting.php">

                                <div class="form-row mb-5">
                                <div class="col">
                                    <!-- First name -->
                                    <div class="md-form">
                                    <label for="materialRegisterFormFirstName">New Password</label>
                                        <input name="password" type="password" id="materialRegisterFormFirstName" class="form-control">

                                    </div>
                                </div>
                              
                                </div>
                                <div class="form-row mt-5">
                                <div class="col">
                                    <!-- First name -->
                                    <div class="md-form">
                                    <label for="materialRegisterFormFirstName">Confirm Password</label>
                                        <input name="confirmpassword" type="password" id="materialRegisterFormFirstName" class="form-control">

                                    </div>
                                </div>
                              
                                </div>



                            <!-- Sign up button -->
                            <button name="btnSetting" class="btn btn-outline-warning btn-rounded btn-block my-4 waves-effect z-depth-0" type="submit">Reset</button>
                            <p style="color:green;"><?php echo $output;?></p>
                        </form>
                        <!-- Form -->
<script>
          function validate(){



var pass =document.forms["users"]["password"].value;
var confirmpass= document.forms["users"]["confirmpassword"].value;

if(passwors !== confirmpassword){
   alert("New Password doesn't match")
    //header("Location: /onlineStudentCleranceSystem/MDB-Free_4.8.2/ruth/r.html");
}


}
          </script>


                    </div>

                    </div>
                    <!-- Material form register -->
                    </div>

                </div>
            </div>
        </div> 
        
        </div>
 <!-- Default form login -->
 