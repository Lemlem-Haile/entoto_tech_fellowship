<?php 

    include_once('./template/header.php');
    include_once('../Controller/RequestController.php');
    $requestController = new RequestController();
    $statuses = $requestController->getStatus();
    
?>
<!-- Default form login -->
<div class="container" style="margin-top:200px; margin-bottom:70px;">
            <div >
                <div class=" mt-5">
                    <table class="table">
                <thead>
                    <tr>
                    <th scope="col">Status Id</th>
                    <th scope="col">Request Id</th>
                    <th scope="col">Office Id</th>
                    <th scope="col">Status</th>
                    <th scope="col">Reason</th>
                    <th scope="col">Date</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        foreach($statuses as $status){
                    ?>
                        <tr>
                        <th scope="row"><?php echo $status->getId();?></th>
                        <td><?php echo $status->getReqId();?></td>
                        <td><?php echo $status->getOffId();?></td>
                        <td><?php echo $status->getStatus();?></td>
                        <td><?php echo $status->getReason();?></td>
                        <td><?php echo $status->getDate();?></td>
                        
                        </tr>
                    <?php }?>
                </tbody>
                </table>

            </div>
        </div> 
        
        </div>
        
