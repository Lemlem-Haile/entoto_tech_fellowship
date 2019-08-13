<?php
    $output = "";
    if(isset($_POST['btnSignup'])){
        include_once('../Controller/AccountController1.php');
        include_once('../Model/Office.php');
        $date = date("Y-m-d H:i:s",time());
        $office = new office(0,$_POST['officer'],$_POST['name'],$_POST['phone'],$_POST['username'],$_POST['password'],$date,$_POST['role']);
        $accountController = new AccountController1();
        $output = $accountController->addOffice($office);
    }
?>
<html>
    <head>
        <title>Signup</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Font Awesome -->
        <!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"> -->
        <!-- Bootstrap core CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <!-- Material Design Bootstrap -->
        <link href="css/mdb.min.css" rel="stylesheet">
        <!-- Your custom styles (optional) -->
        <link href="css/style.css" rel="stylesheet">  
    </head>

    <style>
    .LoginBorder{
    background-color: white;
    border: 3px rgb(14, 2, 2) solid;
    border-radius: 40px;
    margin-top: 40px;
    margin-left:550px;
    margin-right: 500px;
    padding-bottom: 0px;
    padding-top: 25px;
    text-align: center;
    font-size: 20px; 
    font-family: 'Times New Roman';
    height: 750px;
}
</style>

    <body>     
        <div class="container">
            <div class="row">
                <div class="col-md-6 offset-3 mt-5">
                    <!-- Material form register -->
                    <div class="LoginBorder">
                    <div class="card" >

                    <h5 class="card-header info-color white-text text-center py-4">
                        <strong>Sign up</strong>
                    </h5>

                    <!--Card content-->
                    <div class="card-body px-lg-5 pt-0">

                        <!-- Form -->
                        <form class="text-center" method="POST" style="color: #757575;" action="createaccount.php">

                                <div class="form-row">
                                <div class="col">
                                    <!-- First name -->
                                    <div class="md-form">
                                       Officername: <input name="name" type="text" id="materialRegisterFormFirstName" class="form-control">
                                        <!-- <label for="materialRegisterFormFirstName">Full Name</label> -->
                                    </div><br>
                                    <div class="md-form">
                                       Officename: <input name="name" type="text" id="materialRegisterFormFirstName" class="form-control">
                                        <!-- <label for="materialRegisterFormFirstName">Full Name</label> -->
                                    </div>
                                </div>
                              
                            </div>
                            <div class="form-row">
                                <div class="col"><br>
                                    <!-- First name -->
                                    <div class="md-form">
                                       Phone No. <input name="phone" type="number" id="materialRegisterFormFirstName" class="form-control">
                                        <!-- <label for="materialRegisterFormFirstName">Phone Number</label> -->
                                    </div>
                                </div>
                              
                            </div><br>

                           

                            <div class="form-row">
                                <div class="col">
                                    <!-- Last name -->
                                    <div class="md-form">
                                        Username: <input name="username" type="text" id="materialRegisterFormLastName" class="form-control">
                                        <!-- <label for="materialRegisterFormLastName">Username</label> -->
                                    </div>
                                </div>
                                <div class="col"><br>
                                    <!-- Last name -->
                                    <div class="md-form">
                                    Password: <input name="password" type="password" id="materialRegisterFormLastName" class="form-control">
                                        <!-- <label for="materialRegisterFormLastName">Password</label> -->
                                    </div>
                                </div>
                            </div>

                         
                            <!-- Default unchecked -->
                            <div class="custom-control custom-radio"><br>
                            
                            </div>
                            <div class="col">
                            <div class="md-form">
                            Role: <select name="role" class="browser-default custom-select">
                            <option selected value="UG">Proctor</option>
                            <option value="PG">Librarian</option>
                             <option value="PG">Registrar</option>
                              <option value="PG">Guard</option>
                              
                            </select>
                            </div><br>

                            <!-- Sign up button -->
                            <button name="btnSignup" class="btn btn-outline-info btn-rounded btn-block my-4 waves-effect z-depth-0" type="submit">Sign up</button>
                            <p style="color:green;"><?php echo $output;?></p>
                            <!-- Register -->
                            <p>Already a member?
                                <a href="./officeLogin.php">Login</a>
                            </p>
                            </div>
                        </form>
                        <!-- Form -->

                    </div>

                    </div>
                    <!-- Material form register -->
                    </div>

                </div>
            </div>
        </div> 
        
        </div>
        <!-- Material form login -->
        <!-- SCRIPTS -->
        <!-- JQuery -->
        <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
        <!-- Bootstrap tooltips -->
        <script type="text/javascript" src="js/popper.min.js"></script>
        <!-- Bootstrap core JavaScript -->
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
        <!-- MDB core JavaScript -->
        <script type="text/javascript" src="js/mdb.min.js"></script>

    </body>
</html>
