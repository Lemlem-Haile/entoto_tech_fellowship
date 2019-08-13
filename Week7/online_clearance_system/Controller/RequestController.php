<?php
 class RequestController{
    private $id;
    private $stdId;
    private $type;
    private $last;
    private $reason;
    private $date;
    private $mysqli;
    public function __construct(){
        include_once('db.php');
        $this->mysqli = connect();
    }
    public function sendRequest($request){
        $id = $request->getId();
        $stdId = $request->getStdId();
        $type = $request->getType();
        $last = $request->getLast();
        $reason = $request->getReason();
        $date = $request->getDate();
        $query = "INSERT INTO request VALUES('$id','$stdId','$type','$last','$reason','$date')";
        $result = $this->mysqli->query($query);
        if($result){
          return "Successully Sent";
        }else{
          return "Invalid/ERROR";
        }
    } 
    public function getAllRequests(){
      include_once('../Model/Request.php');
      $query = "SELECT * FROM request";
      $result = $this->mysqli->query($query);
      $requests = array();
      while($row = $result->fetch_assoc()){
        $request = new Request($row['requestId'],$row['stdId'],$row['requestType'],$row['lastclass'],$row['reason'],$row['reqDate']);
        $requests[] = $request;
      }
      return $requests;

    }
    public function getRequest($id){
      $query = "SELECT * FROM request WHERE requestId='$id'";
        $result = $this->mysqli->query($query);
        if($result){
          $row = $result->fetch_assoc();
          return new Request($row['requestId'],$row['stdId'],$row['requestType'],$row['lastclass'],$row['reason'],$row['reqDate']); 
        }

   }
   public function  getStatus(){
            include_once('../Model/Status.php');
            $query = "SELECT * FROM status";
            $result = $this->mysqli->query($query);
            $statuss = array();
            while ($row = $result->fetch_assoc()){
                $status = new Status($row['statusId'],$row['reqId'],$row['offId'],$row['status'],$row['reason'],$row['date']);
                $statuss[] = $status;
            }
            return $statuss;
        }
    public function deleteRequest($id){
        $query = "DELETE FROM request WHERE requestId='$id'";
        $this->mysqli->query($query);

    }
    public function insertStatus($status){
      $id = $status->getId();
      $reqId = $status->getReqId();
      $offId = $status->getOffId();
      $sta = $status->getStatus();
      $reason = $status->getReason();
      $date = $status->getDate();
      $query = "INSERT INTO status VALUES('$id','$reqId','$offId','$sta','$reason','$date')";
      $result = $this->mysqli->query($query);
      if($result){
        return true;
      }else{
        return false;
      }
  } 
    
 }
?>