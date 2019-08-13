<?php 
    include_once('./template/header.php');
    $output = "";
    if(isset($_POST['btnRequest'])){
        include_once('../Controller/RequestController.php');
        include_once('../Model/Request.php');
        $date = date("Y-m-d H:i:s",time());
        session_start();
        $id = $_SESSION['id'];
        $request = new Request(0,$id,$_POST['type'],$_POST['last'],$_POST['reason'],$date);
        $requestController = new RequestController();
        $output = $requestController->sendRequest($request);
    }

?>
<!-- Default form login -->
<div class="container mb-5" style="margin-top:80px;">
            <div class="row">
                <div class="col-md-6 offset-3 mt-5">
                    <!-- Material form register -->
                    <div class="card">

                    <h5 class="card-header bg-warning text-white text-center py-4">
                        <strong>Send Request</strong>
                    </h5>

                    <!--Card content-->
                    <div class="card-body px-lg-5 pt-0">

                        <!-- Form -->
                        <form class="text-center mt-5" method="POST" style="color: #757575;" action="sendRequest.php">

                                <div class="form-row">
                                <div class="col">
                                    <!-- First name -->
                                    <div class="md-form">
                                    <label for="materialRegisterFormFirstName">Last Class Attended</label>
                                        <input name="last" type="date" id="materialRegisterFormFirstName" class="form-control">

                                    </div>
                                </div>
                              
                            </div>
                            <div class="form-group">
                            <label for="exampleFormControlTextarea3">Reason</label>
                            <textarea name="reason" class="form-control" id="exampleFormControlTextarea3" rows="7"></textarea>
                            </div>
                            
                         
                            <!-- Default unchecked -->
                            <div class="custom-control custom-radio">
                            
                            </div>
                            <div class="md-form">
                            <select name="type" class="browser-default custom-select">
                            <option value="Withdrawal">Withdrawal</option>
                            <option value="Transfer">Transfer</option>
                            <option selected value="Classend">ClassEnd</option>
                            <option value="Graduate">Graduate</option>
                            </select>
                            </div>


                            <!-- Sign up button -->
                            <button name="btnRequest" class="btn btn-outline-warning btn-rounded btn-block my-4 waves-effect z-depth-0" type="submit">submit</button>
                            <p style="color:green;"><?php echo $output;?></p>
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
 <!-- Default form login -->
 
