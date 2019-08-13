<?php
 class AccountController{
    private $id;
    private $name;
    private $phone;
    private $program;
    private $username;
    private $password;
    private $date;
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
    public function addStudent($student){
        $id = $student->getId();
        $name = $student->getName();
        $phone = $student->getPhone();
        $program = $student->getProgram();
        $username = $student->getUsername();
        $password = $student->getPassword();
        $date = $student->getDate();
        $query = "INSERT INTO student VALUES('$id','$name','$phone','$program','$username','$password','$date')";
        $result = $this->mysqli->query($query);
        if($result){
          return "Successully Added";
        }else{
          return "Invalid/ERROR";
        }
    } 
    public function changePassword($id,$password){
      $query = "UPDATE student SET password = '$password' WHERE studentId = '$id'";
      $result = $this->mysqli->query($query);
      if($result){
        return "Successully Changed";
      }else{
        return "Invalid/ERROR";
      }
  } 


 }
?>