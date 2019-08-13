<?php
    class Student{
        private $id;
        private $name;
        private $phone;
        private $role;
        private $username;
        private $password;
        private $date;
        public function __construct($id,$name,$phone,$role,$username,$password,$date){
            $this->id = $id;
            $this->name = $name;
            $this->phone = $phone;
            $this->program = $role;
            $this->username = $username;
            $this->password = $password;
            $this->date = $date;
        }

        public function getId(){
            return $this->id;
        }
        public function getName(){
            return $this->name;
        }
        public function getPhone(){
            return $this->phone;
        }
        public function getRole(){
            return $this->role;
        }
        public function getUsername(){
            return $this->username;
        }
        public function getPassword(){
            return $this->password;
        }
        public function getDate(){
            return $this->date;
        }
    }
?>