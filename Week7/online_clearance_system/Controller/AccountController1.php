<?php
 class AccountController1{
    private $id;
    private $officer;
    private $name;
    private $phone;
    private $username;
    private $password;
    private $date;
    private $role;
    private $mysqli;
    public function __construct(){
        include_once('db.php');
        $this->mysqli = connect();
    }
    public function studentLogin($username,$password){
        $query = "SELECT * FROM student WHERE username = '$username' AND password = '$password'";
        $result = $this->mysqli->query($query);
        if($result){
          $row = $result->fetch_assoc();
          if($row){
            session_start();
            $_SESSION['id'] = $row['studentId'];
            $_SESSION['role'] = "student";
            return true;
          }
          else{
            return false;
          }
        }
    }
    public function officeLogin($username,$password){
      $query = "SELECT * FROM office WHERE username = '$username' AND password = '$password'";
      $result = $this->mysqli->query($query);
      if($result){
        $row = $result->fetch_assoc();
        if($row){
          session_start();
          $_SESSION['id'] = $row['officeId'];
          $_SESSION['role'] = "office";
          return true;
        }
        else{
          return false;
        }
      }
  }
    public function addOffice($office){
        $id = $office->getId();
        $id = $office->getOfficer();
        $name = $office->getName();
        $phone = $office->getPhone();
        $username = $office->getUsername();
        $password = $office->getPassword();
        $date = $office->getDate();
        $role = $office->getRole();
        $query = "INSERT INTO office VALUES('$id','$officer',$name','$phone','$username','$password','$date','$role')";
        $result = $this->mysqli->query($query);
        if($result){
          return "Successully Added";
        }else{
          return "Invalid/ERROR";
        }
    } 
    public function changePassword($id,$password){
      $query = "UPDATE office SET password = '$password' WHERE officeId = '$id'";
      $result = $this->mysqli->query($query);
      if($result){
        return "Successully Changed";
      }else{
        return "Invalid/ERROR";
      }
  } 


 }
?>