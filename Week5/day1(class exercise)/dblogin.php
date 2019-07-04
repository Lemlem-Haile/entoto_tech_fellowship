<?php


class dblogin {
    private $conn;
    function __construct() {
        
        include_once 'dbconnect.php';
    
        $db=new dbconnect();
        $this->conn=$db->connect();
    }
    public function userlogin($user, $pass){
        $stm=$this->conn->prepare("select * from login where username=? and password=?");
    
          $stm->bind_param("ss", $user, $pass);
          $stm->execute();
          $stm->store_result();
          if($stm->num_rows>0){
              return 1;
          }else {
              return 2;
    }
    }
    public function signup($FullName,$Age,$Phone,$Email){
        $stm= $this->conn->prepare("insert into signup(FullName,Age,Phone,Email) values(?,?,?,?);");
        $stm->bind_param("ssss",$FullName,$Age,$Phone,$Email);
    if($stm->execute()){
        return 1;
    }else {
        return 2;
    }
      
}
}